<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
	$events = getEvents();
	// var_dump($events);
?>

<?php get_header();?>

<main>
	<h2><?php the_title();?></h2>

</main>

<?php get_footer();?>