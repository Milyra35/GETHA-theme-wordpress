<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
?>


<?php get_header();?>

<main>
	<section id="about">
		<h2><?= $data['a-propos']['titre'];?></h2>
		<p><?= $data['a-propos']['contenu'];?></p>
		<a href="<?= $menuItems[4]->url;?>">En savoir plus</a>
	</section>

	<!-- <section>
		<?php echo do_shortcode("[contact-form-7 id='8a4400b' title='Contact']"); ?>  
	</section> -->
</main>

<?php get_footer();?>