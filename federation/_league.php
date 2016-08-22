<div class="w26 gap dba">
    <div class=subj><h3 class=orange>لیگ</h3></div>
    <div class="bxshd notif">
        <?php
        query_posts(array(
            "category_name" => 'لیگ',
            "post_per_page" => '1'
        ));
        if(have_posts()): while(have_posts()):the_post();
            $federation = new federation();
            $thumb = $federation->CustomThumb($post->ID, 'full');

            ?>
            <a href="<?php the_permalink()?>" class=notif-top-large-image style="background-image:url(<?php echo $thumb; ?>)"</a>
            <a href="<?php the_permalink()?>" class=notif-link><?php echo get_the_excerpt()?></a>
        <?php endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
</div>