<?php  
	$menuItems = getNavigationMenu();
?>

<?php get_header();?>

<main>
	<article class="container background">
		<h2 class="hidden">Texte à propos</h3>
		<section class="about legal" id="about">
			<h2><?php the_title();?></h2>
			
			<?php the_content(); ?>
		</section>
	</article>
</main>

<?php get_footer();?>