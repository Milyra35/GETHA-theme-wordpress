<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<main>
    <h2><?= the_title(); ?></h2>
    <section id="container contact" class="contact">
        <h3 class="hidden">Formulaire de contact</h3> <!-- Hide it in css -->
        <?php echo do_shortcode("[contact-form-7 id='8a4400b' title='Contact']"); ?>
    </section>
</main>

<?php get_footer(); ?>