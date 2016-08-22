<?php query_posts(array(
    'post_type' => 'members',
    'posts_per_page' => -1
)); ?>
<div class="team c">
    <?php if(have_posts()):?>
    <?php while(have_posts()): the_post(); ?>
    <?php
            $federation = new federation();
            $thumb = $federation->CustomThumb($post_id->ID, 'thumbnail');
    ?>
            <a title="<?php the_title() ?>" style=" background-image: url(<?php echo $thumb ?>);"></a>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_reset_query() ?>
