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
                    <li>
                        <a href="mailto:association.getha@gmail.com">Nous contacter</a>
                    </li>
                    <li>
                        Thème Wordpress réalisé par : <a href="https://github.com/Milyra35" target="_blank">Marie Richir</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </body>
</html>