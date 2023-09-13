<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData();
	// var_dump($data);
?>

<?php get_header();?>

<main>
	<h2><?php the_title();?></h2>

	<section class="backgorund">
		<article class="about" id="about">
			<h3 class="hidden">Texte à propos</h3>
			<p>
				<?= $data['a-propos']['all-content']; ?>
			</p>
		</article>
	</section>
</main>

<?php get_footer();?>