<div class=w36>
    <div class=slide>
        <div>
            <?php
  		  query_posts(array(
            		"category_name" => 'اسلاید',
            		"posts_per_page" => "6"
        	  ));
    ?>
                   <?php
            if(have_posts()): while(have_posts()): the_post();
                $federation = new federation();
                $thumb = $federation->CustomThumb($post->ID, 'full');
                ?>
                <a style="background-image:url(<?php echo $thumb; ?>)" href="<?php the_permalink()?>">
                    <div>
                        <h3><?php the_title()?></h3>
                        <span><?php the_excerpt()?></span>
                    </div>
                </a>
                <?php
            endwhile;
            ?>
        </div>
    </div>
    <div class=thumb>
        <?php while (have_posts()):the_post();
        $thumb = $federation->CustomThumb($post->ID, 'thumbnail');
        ?>
        <div style="background-image:url(<?php echo $thumb; ?>)"></div>
        <?php endwhile; ?>
    </div>
<?php endif;
?>
