<?php
/*
Template Name: Agenda
*/
$events = getEvents();
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
					<p>'.tribe_get_start_date($event, false, 'd-m-Y H:i').' - '.tribe_get_end_date($event, false, 'H:i').'</p>
					<p>'.tribe_get_venue($event).'</p>
					<a href='.$event->guid.'>Page évènement</a>
				</article>
			';
		}
	?>
</main>

<?php get_footer();?>