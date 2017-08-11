<?php

add_action( 'wp_enqueue_scripts', 'my_custom_styles' );
//add_filter('show_admin_bar', '__return_false');
function my_custom_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'meanmenu', get_stylesheet_directory_uri().'/css/meanmenu.min.css');
  
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.js');
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery-ui.min.js');
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/css/style.css',
        array( $parent_style ),wp_get_theme()->get('Version')   );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'footer Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

?>
