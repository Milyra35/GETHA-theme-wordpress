<?php  
	$menuItems = getNavigationMenu();
    $data = getHomepageData(); 
?>

<header>
    <section>
        <h1 class="hidden">GETHA</h1> <!-- cacher en css -->
        <img src="<?= get_parent_theme_file_uri('assets/images/logo-getha.png');?>" alt="Logo de l'association représentant un homme lançant un crabe dans l'Atlantique (le crabe faisant référence au cancer).">
    </section>
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
</header>