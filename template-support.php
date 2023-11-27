<?php
/*
Template Name: Support
*/
$items = getSupportMenu()
?>

<?php get_header();?>

<main>
	<article class="container support">
        
        <h2><?php the_title();?></h2>
        <?php the_content();?>

    </article>
</main>

<?php get_footer();?>