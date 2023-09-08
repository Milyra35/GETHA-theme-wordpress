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
</main>

<?php get_footer();?>