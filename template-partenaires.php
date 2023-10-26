<?php
/*
Template Name: Partenaires
*/
  
	$menuItems = getNavigationMenu();
?>

<?php get_header();?>

<main>
    <section class="partners">
        <h2><?php the_title();?></h2>
        <p>Nous tenons remercier nos partenaires pour leur aide :</p>
        <?php
            $logos = get_attached_media('image', get_the_ID());
            
            foreach($logos as $logo)
            {
                $image = wp_get_attachment_image($logo->ID, 'full');
                echo '<div class="partner-image">' . $image . '</div>';
            }
        ?>
    </section>
</main>

<?php get_footer();?>