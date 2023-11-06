<?php   
$menuItems = getNavigationMenu();  
global $post;  
$post_title = $post->post_title;  
$thumbnail = get_the_post_thumbnail_url($post);  
?>  

<?php get_header();?>

<main>
	<article class="container single-post">
		<figure>
			<img src="<?= $thumbnail;?>" alt=""/>
		</figure>
		<section>
			<h2><?= $post_title;?></h2>
			<?php
				if (have_posts()) :  
					while (have_posts()) :
						the_post();  
						the_content();  
					endwhile;  
				else :  
					echo 'Nothing found';  
				endif;
			?>
		</section>
	</article>
</main>

<?php get_footer();?>