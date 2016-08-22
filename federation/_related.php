<div class=related>
    <?php
    $argmnt = array(
        'category__in' => wp_get_post_categories($post->ID),
        'numberposts' => 5,
        'post__not_in' => array($post->ID)
    );
    $related = get_posts($argmnt);
    if ($related) {
        foreach ($related as $post) {
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <?php  }
    } ?>
</div>
<?php
wp_reset_query(); ?>