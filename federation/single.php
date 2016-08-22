<?php get_header();
	if(have_posts()): the_post();
		$federation = new federation();
		$thumb = $federation->CustomThumb($post->ID, 'full');
?>
<main>
				<div class="w46 post">
					<h1><?php the_title()?></h1>
					<div><?php echo get_the_date('j F Y') ?></div>
					<div><?php the_excerpt()?></div>

					
					<?php the_content(); ?>
					<?php comments_template()?>
				</div>
				<?php get_sidebar(); ?>
				<div class=clr></div>
			</main>
<?php endif;
get_sidebar();?>
<?php get_footer()?>