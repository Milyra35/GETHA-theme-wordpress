<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
?>


<?php get_header();?>

<main>
	<section id="homepage-about" class="homepage-about">
		<h2><?= $data['a-propos']['titre'];?></h2>

		<article class="text-about">
			<p><?= $data['a-propos']['contenu'];?></p>
			<a href="<?= $menuItems[3]->url;?>">En savoir plus</a>
		</article>
	</section>
</main>

<?php get_footer();?>