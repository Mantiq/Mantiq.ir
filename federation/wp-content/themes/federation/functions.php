<?php
require_once ("inc/federation.php");

    register_nav_menus(
    array(
      'header-menu' => __( 'header Menu' ),
      'main-menu' => __( 'main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
add_theme_support( 'post-thumbnails' );

register_sidebar( array(
    'name' =>'header social area',
    'id' => 'header_social_area',
    'before_widget' => '<div class="header_social_area">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name'          => 'big_ad',
    'id'            => 'big_ad_1',
    'before_widget' => '<div class=big-ad>',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
) );

register_sidebar( array(
    'name'          => 'ad_right',
    'id'            => 'ad_right_1',
    'before_widget' => '<div class=w36>',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
) );

register_sidebar( array(
    'name'          => 'ad_left',
    'id'            => 'ad_left_1',
    'before_widget' => '<div class="w36 gap">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
) );

register_sidebar( array(
    'name'          => 'news_letter',
    'id'            => 'news_letter_1',
    'before_widget' => '<form class="news-letter c">',
    'after_widget'  => '</form>',
    'before_title'  => '',
    'after_title'   => '',
) );

function my_custom_members(){
    $labels=array(
        'name'=>'اعضای تیم ملی ایران ',
        'menu_name'=>__('اعضای تیم'),
        'all_items' => __( 'همه اعضا', 'federation' ),
        'view_item'=> __( 'دیدن اعضا', 'federation' ),
        'add_new'=> __( 'اضافه کردن', 'federation' ),
        'edit_item' => __( 'ویرایش', 'federation' ),
    );
    $args = array(
        'public' => true,
        'labels'  => $labels,
        'capability_type' => 'post',

        'rewrite'=> array( 'slug' => 'members' ),
        'menu_icon' =>'dashicons-admin-users',
        'supports'=> array( 'title', 'thumbnail')
    );
    register_post_type('members', $args );

}
add_action('init','my_custom_members');

?>