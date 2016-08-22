        <?php
        query_posts(array(
            "category_name" => 'اطلاعیه',
            "posts_per_page" => "3"
        ));
        
        if(have_posts()): while(have_posts()):the_post();
            ?>
            <a href="<?php the_permalink()?>" class=notif-link><?php echo mb_substr(get_the_excerpt(), 0, 75, 'utf-8')."..."; ?></a>
            
        <?php endwhile;
        endif;
        wp_reset_query();
        ?>