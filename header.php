<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<?php wp_head(); ?>  
		<meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
		<meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>
	</head>
	<body>
        <header>
            <span>
                <section>
                    <h1 class="hidden">GETHA</h1> <!-- cacher en css -->
                    <img src="<?= get_parent_theme_file_uri('assets/images/logo-GETHA-color.png');?>" alt="Logo de l'association représentant un homme lançant un crabe dans l'Atlantique (le crabe faisant référence au cancer).">
                </section>
                <h2 class="hidden">Menu</h2>
                <nav>
                    <ul>
                        <?php
                            foreach($menuItems as $item)
                            {
                        ?>
                        <li>
                            <a href="<?= $item->url;?>"><?= $item->title;?></a>
                        </li>            
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
            </span>
        </header>