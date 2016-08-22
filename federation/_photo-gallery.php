<?php
query_posts(array(
    "category_name" => 'گالری تصاویر',
    "posts_per_page" => '5'
));
$i = 0;
if(have_posts()): while(have_posts()): the_post();
    $federation = new federation();
    $thumb = $federation->CustomThumb($post->ID, 'thumbnail');
    if($i == 0){
        $thumb = $federation->CustomThumb($post->ID, array(792,421)); ?>
        <a href="<?php the_permalink()?>" class=home-gallery style="background-image:url(<?php echo $thumb ?>)"></a>
        <div>
            <a href="<?php the_permalink()?>"><h3><?php echo get_the_title(); ?></h3></a>
            <?php echo get_the_excerpt();?>
            <div></div>
            <div class=news-icon-date><?php echo get_the_date('j F Y') ?></div>
            <div class=news-icon-user><?php the_author() ?></div>
            <div class=news-icon-comment><?php comments_number("۰ نظر", "1 نظر", "% نظر")?></div>
        </div>
        <div>
        <?php
    }else{ ?>
        <div class="galldiv">
            <div class=news-list-item style="background-image:url(<?php echo $thumb ?>">
                <h3 class=small><a href="<?php the_permalink() ?>"><?php echo get_the_title()?></a></h3>
                <div class=news-icon-date><?php echo get_the_date('j F Y') ?></div>
                <div class=news-icon-comment><?php comments_number("۰ نظر", "1 نظر", "% نظر")?></div>
            </div>
        </div>
    <?php }
    $i++;
endwhile; ?>
    </div>
<?php endif;
wp_reset_query();
?>