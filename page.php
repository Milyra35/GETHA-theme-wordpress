<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
	$events = getEvents();
	var_dump($events);
?>

<?php get_header();?>

<main>
	<h2><?php the_title();?></h2>

	<?php
		foreach($events as $event)
		{
			echo '
				<article class="event">
					<h3>'.get_the_title($event).'</h3>
					<p>'.tribe_get_start_date($event, false, 'Y-m-d H:i').'</p>
					<p>'.$event->post_content.'</p>
					<p>'.tribe_get_venue($event).'</p>
					<a href='.$event->guid.'>Page évènement</a>
				</article>
			';
		}
	?>
</main>

<?php get_footer();?>