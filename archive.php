<?php
/*
Template Name: Actualités
*/
  
	$menuItems = getNavigationMenu();
    $posts = getPosts();
    // var_dump($posts);
?>

<?php get_header();?>

<main>
    <h2><?php the_title();?></h2>

    <section class="posts">
        <h3 class="hidden">Tous les articles</h3>
        
        <?php
            foreach($posts as $item)
            {
                $post = $item['data'];
                $image = $item['image'];

                echo '
                    <article class="post">
                        <h3>'.$post->post_title.'</h3>
                        <img src='.$image["url"].' alt='.$image['alt'].'>
                        <p>'.wp_trim_words($post->post_content, 15).'</p>
                        <p><span>Publié le '.$post->post_date.'</span></p>
                        <a href="'.$post->guid.'">En savoir plus</a>
                    </article>
                ';
            }
        ?>
    
    </section>

</main>

<?php get_footer();?>