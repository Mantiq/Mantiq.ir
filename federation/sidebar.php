<div class="w26 gap <?php if(is_single()) echo "dba"; ?>">
    <?php if(is_single()) {
        //echo pvc_get_post_views('7');
        //$ddd=$wpdb->get_col("SELECT * FROM `wp_post_views` WHERE id='7' AND period='total'", 3);
//    $ddd=$wpdb->get_results("SELECT * FROM `".$wpdb->prefix."post_views` WHERE period='total'");
//    foreach ($ddd as $key){
//        echo $key->id;
//    }
        ?>
        <div class=subj><h3 class=orange>مطالب مرتبط</h3></div>
        <?php get_template_part("_related");
    } ?>
    <div class=subj><h3 class=blue>تبلیغات</h3></div>
        <div class=side-ad>
        <?php dynamic_sidebar( 'ad_right_1' ); ?>
        <?php dynamic_sidebar( 'ad_left_1' ); ?>
    </div>
        <div class=clr></div>
    <div class=subj><h3 class=blue>پربیننده‌ترین مطالب</h3></div>
    <?php get_template_part("_most-view"); ?>
    <div class=subj><h3 class=blue>خبرنامه</h3></div>
    <div style="align-content: stretch">
    <?php dynamic_sidebar( 'news_letter_1' ); ?>
    </div>
    <div class=subj><h3 class=blue>اعضای تیم ملی</h3></div>
    <?php get_template_part("_members"); ?>
</div>