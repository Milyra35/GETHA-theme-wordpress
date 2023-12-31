<?php

add_theme_support('post-thumbnails');
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_filter('wpcf7_autop_or_not', '__return_false');
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function register_my_menus() 
{ 
	register_nav_menus( array( 
	'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );


function getNavigationMenu() 
{
    $items = wp_get_nav_menu_items('Navigation');

    return $items;
}

function getSupportMenu()
{
    $items = wp_get_nav_menu_items('Supports');

    return $items;
}

function getFooterMenu()
{
    $items = wp_get_nav_menu_items('Footer');

    return $items;
}

function getHomepageData() 
{
    $data = [];
    $data['a-propos'] = [];
    $data['a-propos']['titre'] = get_field('titre_a_propos');
    $data['a-propos']['contenu'] = get_field('contenu_a_propos');
    $data['a-propos']['all-content'] = get_field('a_propos');
    $data['articles'] = getPosts();
    $data['evenements'] = getEvents();

    return $data;
}

function getThumbnailUrlAndAlt($post)
{
    $thumbID = get_post_thumbnail_id($post);
    $thumb = get_post($thumbID);
    $alt = get_post_meta($thumbID, 'wp_attachment_image_alt', true);

    return ['url' => $thumb->guid, 'alt' => $alt];
}

function getPosts()
{
    $categoryID = get_category_by_slug('TEST')->term_id;
    $arg = [
        'numberposts' => 4,
        'category' => $categoryID
    ];

    $posts = get_posts($arg);
    $articles = [];

    foreach($posts as $post)
    {
        $articles[] = [
            'data' => $post,
            'image' => getThumbnailUrlAndAlt($post)
        ];
    }

    return $articles;
}

function getEvents()
{
    $events = tribe_get_events(array(
        'events' => -1,
        'start_date' => date('Y-m-d')
    ));

    return $events;
}

function enqueue_custom_scripts() {
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js');
}

?>