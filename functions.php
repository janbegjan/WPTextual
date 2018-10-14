<?php
/**
* wptextual theme bootstrap
*/
function wptextual_bootstrapping(){
  load_theme_textdomain( 'wptextual' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menu('Top_menu', __('Top menu', 'wptextual'));
  register_nav_menu('Footer_menu', __('Footer menu', 'wptextual'));
}
add_action('after_setup_theme', 'wptextual_bootstrapping');

/**
* wptextual theme assets
*/
function wptextual_assets(){
  // wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  wp_enqueue_style('font-awesome-css', get_theme_file_uri('/assets/css/font-awesome.min.css'), null);
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), null);
  wp_enqueue_style('wptextual_main-css', get_theme_file_uri('/assets/css/main.css'), null);
  wp_enqueue_style('wptextual_stylesheet-css', get_stylesheet_uri(), null, time());



  wp_enqueue_script('wptextual-mainjs', get_theme_file_uri('/assets/js/main.js' ), array('jquery'), null, true);
  wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wptextual_assets');