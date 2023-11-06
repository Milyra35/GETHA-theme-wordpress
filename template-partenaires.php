<?php
/*
Template Name: Partenaires
*/
  
	$menuItems = getNavigationMenu();
?>

<?php get_header();?>

<main>
    <article class="container partners">
        <h2><?php the_title();?></h2>
        <p>Nous tenons remercier nos partenaires pour leur aide :</p>
        <section>
            <?php
                the_content();
            ?>
        </section>
    </article>
</main>

<?php get_footer();?>