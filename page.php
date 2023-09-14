<?php  
	$menuItems = getNavigationMenu();
?>

<?php get_header();?>

<main>
	<section class="background">
		<h3 class="hidden">Texte à propos</h3>
		<article class="about" id="about">
			<h2><?php the_title();?></h2>
			
			<?php the_content(); ?>
		</article>
	</section>
</main>

<?php get_footer();?>