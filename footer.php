<?php  
	$footerItems = getFooterMenu();
?>

        <footer>
            <nav>
                <h2 class="hidden">Navigation bas de page</h2>
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
    </body>
</html>