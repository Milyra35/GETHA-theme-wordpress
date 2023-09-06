<?php  
	$footerItems = getFooterMenu();
?>

<footer>
    <nav>
        <ul>
            <?php
                foreach($footerItems as $item)
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
</footer>