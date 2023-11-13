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
            // Extract the figure
            preg_match_all('/<figure[^>]*>.*?<\/figure>/is', get_the_content(), $matches);
            
            // Shuffle the order of the pictures
            shuffle($matches[0]);

            foreach ($matches[0] as $picture) {
                echo $picture;
            }
        ?>
        </section>
    </article>
</main>

<?php get_footer();?>