<?php
/*
Template Name: Support
*/
?>

<?php get_header();?>

<main>
	<article class="support">
		<h2><?php the_title();?></h2>

        <section class="list-docs">
            <?php the_content(); ?>
        </section>
		
    </article>
</main>

<?php get_footer();?>