<?php

$ddd = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "post_views WHERE period='total' order by count desc limit 4 ");
foreach ($ddd as $key) {
    $post_id = get_post($key->id);
    ?>
    <?php $federation = new federation();
        $thumb = $federation->CustomThumb($post_id->ID, 'thumbnail');
    ?>
    <div class=news-list-item style=" background-image: url(<?php echo $thumb ?>);">
        
        <h3 class=small><a
                href="<?php the_permalink($key->id) ?>"><?php echo $title = $post_id->post_title . "</br>"; ?></a>
        </h3>
        <div class=news-icon-date><?php echo get_the_date('j F Y') ?></div>
        <div class=news-icon-comment></div>
    </div>
<?php }
?>