<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
	// var_dump($data['articles']);
	// var_dump($data['evenements']);
?>


<?php get_header();?>

<main>
	<section id="homepage-about" class="homepage-about">
		<?php the_content(); ?>

		<article class="text-about">
			<h2><?= $data['a-propos']['titre'];?></h2>
			<p><?= $data['a-propos']['contenu'];?></p>
			<a href="<?= $menuItems[5]->url;?>">En savoir plus</a>
		</article>
	</section>

	<section id="homepage-articles" class="homepage-articles">
		<h2>Quelques articles</h2>
		
		<?php
			foreach($data['articles'] as $post)
			{
				echo '
					<article>
                        <img src='.$post['image']["url"].' alt='.$post['image']['alt'].'>
						<h3>'.$post['data']->post_title.'</h3>
                        <p><span>Publié le '.$post['data']->post_date.'</span></p>
                        <a href="'.$post['data']->guid.'">En savoir plus</a>
					</article>
				';
			}
		?>

		<a href="<?=$menuItems[1]->url;?>">Voir tous les articles</a>
	</section>  
	
	<section id="homepage-events" class="homepage-events">
		<?php
			foreach($data['evenements'] as $event)
			{
				echo '
					<article>
						<h3>'.$event->post_title.'</h3>
						<p>'.$event->event_date.'</p>
						<a href="'.$event->guid.'">Aller sur la page de l\'évènement</a>
					</article>
				';
			}
		?>
	</section>
</main>

<?php get_footer();?>