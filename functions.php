<?php
/**
* wptextual theme bootstrap
*/
function wptextual_bootstrapping(){
  load_theme_textdomain( 'wptextual' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'audio', 'video','image' ) );
  register_nav_menu('Top_menu', __('Top menu', 'wptextual'));
  register_nav_menu('Footer_menu', __('Footer menu', 'wptextual'));
}
add_action('after_setup_theme', 'wptextual_bootstrapping');

/**
* wptextual theme assets
*/
function wptextual_assets(){
  // stylesheets
  wp_enqueue_style('font-awesome-css', get_theme_file_uri('/assets/css/font-awesome.min.css'), null);
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), null);
  wp_enqueue_style('wptextual_main-css', get_theme_file_uri('/assets/css/main.css'), null);
  wp_enqueue_style('wptextual_stylesheet-css', get_stylesheet_uri(), null, time());
  //scripts
  wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true);
  wp_enqueue_script('wptextual-mainjs', get_theme_file_uri('/assets/js/main.js' ), array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'wptextual_assets');

/**
* Adding B4 list-inline-item Class to menus.
*/
function wptextual_menu_item_class($classes, $item){
$classes[] = 'list-inline-item';
return $classes;
}
add_filter( 'nav_menu_css_class', 'wptextual_menu_item_class', 10, 2 );

/**
* Add Right sidebar register.
*/
function wptextual_register_sidebar() {
  register_sidebar( array(
  'name'          => __( 'Right Sidebar', 'wptextual' ),
  'id'            => 'sidebar_right',
  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wptextual' ),
  'before_widget' => '<aside id="%1s" class="widget %2s"><div class="social-share">',
  'after_widget'  => '</div></aside>',
  'before_title'  => '<h3 class="widget-title text-uppercase">',
  'after_title'   => '</h3>',
  ));
}
add_action( 'widgets_init', 'wptextual_register_sidebar' );
