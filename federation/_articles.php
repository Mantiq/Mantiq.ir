<div class=subj><h3 class=orange>مقالات و پژوهش‌ها</h3></div>
          <div>
          <?php query_posts(array(
            "category_name" => 'مقالات',
            "posts_per_page" => '2'
          ));
            if(have_posts()): while(have_posts()):the_post();
              $federation = new federation();
              $thumb = $federation->CustomThumb($post->ID, array(182, 182));
              ?>
            <div class="galldiv">
              <div class=article-list-item style="background-image:url(<?php echo $thumb; ?> )">
                <h3 class=small><a href="<?php the_permalink()?>"><?php echo get_the_title(); ?></a></h3>
                <div class=author><?php echo get_the_author(); ?></div>
                <?php echo get_the_excerpt(); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>

          </div>
