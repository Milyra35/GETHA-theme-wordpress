<?php

$posts = getPosts();
// var_dump($posts);

?>

<section class="posts">

    <?php
        foreach($posts as $item)
        {
            $post = $item['data'];
            $image = $item['image'];

            echo '
                <article class="post">
                    <h3>'.$post->post_title.'</h3>
                    <img src='.$image["url"].' alt='.$image['alt'].'>
                    <p>'.wp_trim_words($post->post_content, 15).'</p>
                    <a href="'.$post->guid.'">En savoir plus</a>
                </article>
            ';
        }
    ?>

</section>