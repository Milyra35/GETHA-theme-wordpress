<?php
/*
Template Name: Agenda
*/
$events = getEvents();
?>

<?php get_header();?>

<main>
	<section class="list-events">
		<h2><?php the_title();?></h2>

		<p>

		</p>
		
		<?php
			foreach($events as $event)
			{
				echo '
					<article class="event">
						<h3>'.get_the_title($event).'</h3>
						<p>'.tribe_get_start_date($event, false, 'd-m-Y H:i').' - '.tribe_get_end_date($event, false, 'H:i').'</p>
						<p>'.tribe_get_venue($event).'</p>
						<a href='.$event->guid.'>Détails évènement</a>
					</article>
				';
			}
		?>
	</section>
</main>

<?php get_footer();?>