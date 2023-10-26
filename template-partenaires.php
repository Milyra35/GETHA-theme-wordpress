<?php
/*
Template Name: Partenaires
*/
  
	$menuItems = getNavigationMenu();
    $logos = get_attached_media('image', get_the_ID());
?>

<?php get_header();?>

<main>
    <section class="partners">
        <h2><?php the_title();?></h2>
        <p>Nous tenons remercier nos partenaires pour leur aide :</p>
        <?php
            foreach($logos as $logo)
            {
                
            }
        ?>
    </section>
</main>

<?php get_footer();?>