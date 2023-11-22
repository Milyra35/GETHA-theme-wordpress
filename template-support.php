<?php
/*
Template Name: Support
*/
$items = getSupportMenu()
?>

<?php get_header();?>

<main>
	<article class="container support">
		<h2><?php the_title();?></h2>
        <ul>

        <?php
            if(is_page('Support'))
            {
                foreach($items as $item)
                {
        ?>
        
            <li><a href="<?= $item->url;?>"><?= $item->title;?></a></li>
            
        <?php
                }
            }
        ?>
        
        </ul>
    </article>
</main>

<?php get_footer();?>