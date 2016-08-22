<?php
$federation = new federation();
get_header(); ?>
<main xmlns="http://www.w3.org/1999/html">
		<?php get_template_part("_content")?>
		<div class=clr></div>
	</div>
    <div class="w16 gap dba">
   	<div class=subj><h3 class=blue>اطلاعیه‌ها</h3></div>
   	    <div class="bxshd notif">
    		<?php get_template_part("_Announcement")?>
    	    </div>
    </div>
    <?php get_template_part("_league")?>
	<div class=clr></div>
	<!---------------------------------------------------->
	<div class=w46>
		<?php dynamic_sidebar( 'big_ad_1' ); ?>
		<div class=subj><h3 class=orange>آخرین اخبار</h3></div>
		<div class=bxshd>
			<?php get_template_part("_lastnews"); ?>
		</div>
		<div class=subj><h3 class=blue>آلبوم تصاویر</h3></div>
		<?php get_template_part("_photo-gallery")?>
		<div class=clr></div>
    		<?php get_template_part("_articles")?>
    		<div class=clr></div>
	</div>
	<?php get_sidebar()?>
	<div class=clr></div>
	<!---------------------------------------------------->
</main>
<script src="<?php bloginfo('template_directory'); ?>/jquery.min.js"></script>

<?php get_footer() ?>



