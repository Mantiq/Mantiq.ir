<?php
$federation = new federation();
query_posts(array(
    "category_name" => 'اخبار',
    "posts_per_page" => '3'
));
if(have_posts()): while(have_posts()): the_post();
    $thumb = $federation->CustomThumb($post->ID, array(185, 98));
    ?>
    <div class="news-list-item" style="background-image:url(<?php echo $thumb; ?>)">
        <h3><a href="<?php the_permalink() ?>" class="href"><?php the_title() ?></a></h3>
        <div style=""><?php the_excerpt() ?></div>
        <div class=news-icon-date><?php echo get_the_date('j F Y') ?></div>
        <div class=news-icon-user><?php the_author() ?></div>
        <div class=news-icon-comment><?php comments_number("۰ نظر", "1 نظر", "% نظر")?></div>
    </div>
<?php endwhile;
    wp_reset_query();
endif;