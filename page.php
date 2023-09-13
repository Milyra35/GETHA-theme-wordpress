<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData();
	// var_dump($data);
?>

<?php get_header();?>

<main>
	<section class="background">
		<h3 class="hidden">Texte à propos</h3>
		<article class="about" id="about">
			<h2><?php the_title();?></h2>
			<p>
				<?= $data['a-propos']['all-content']; ?>
			</p>
		</article>
	</section>
</main>

<?php get_footer();?>