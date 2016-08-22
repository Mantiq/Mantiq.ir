<?php get_header(); ?>

<div style="weight: 100% !important; overflow: auto;">

    <div style="float: right; width: auto">
        <?php
        if ( have_posts() ) { ?>

            <h2 class="archive-title">آرشیو: <a href=""><?php echo single_cat_title( '', false ); ?></a></h2>
            <p style="padding-right: 20px; margin-top: -15px;"> -------------------------------------------------- </p>

            <?php
                if ( category_description() ) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif;
            ?>
            <?php

            while ( have_posts() ) : the_post();
                $federation = new federation();
                $thumb = $federation->CustomThumb($post->ID, array('thumbnail'));
            ?>
                <div style="padding-right: 40px;">
                    <div class="news-list-item" style="background-image:url(<?php echo $thumb; ?>)">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <small>تاریخ: <?php the_time('j F Y') ?> | توسط: <?php the_author_posts_link() ?></small>
                        <div style="margin-top: -12px"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            <?php endwhile;
            //end have post
        }
            else{ ?>
            <h2 class="archive-title">آرشیو: <a href=""><?php echo single_cat_title( '', false ); ?></a></h2>
            <p style="padding-right: 20px; margin-top: -15px;"> -------------------------------------------------- </p>
            <p style="margin-right: 20px; margin-bottom: 65px">متأسفانه مطلبی با این دسته بندی وجود ندارد.</p>
            <?php } ?>
    </div>
</div>
    <div class="pagination">
        <?php wp_pagination(); ?>
    </div>

<?php get_footer(); ?>