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