<?php
/*
Template Name: Actualités
*/
  
	$menuItems = getNavigationMenu();
    $thumbnail = get_the_post_thumbnail_url($post);
?>

<?php get_header();?>

<main>
    <article class="container posts">
        <h2><?php the_title();?></h2>
        
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            if($query->have_posts()) : 
                while($query->have_posts()) : $query->the_post();
        ?>
        
        <section class="post">
            <h3><?= the_title(); ?></h3>
            <p><?= wp_trim_words(get_the_content(), 15); ?></p>
            <p><span>Publié le <?= the_date(); ?></span></p>
            <a href="<?= the_permalink(); ?>">Lire l'article</a>
        </section>

        <?php
                endwhile;
            else :
                echo 'Aucun article trouvé';
            endif;
        ?>
    
        </article>

</main>

<?php get_footer();?>