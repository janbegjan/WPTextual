<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <!-- Document Settings -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Title -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- pre-loader -->
<div id="st-preloader">
    <div class="st-preloader-circle"></div>
</div>
<!-- header -->
<header class="header" style="background: url(<?php echo get_header_image(); ?>) no-repeat scroll 50% 50%/cover;">
    <div class="logo text-center">

        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
            echo '<a class="" href="' .get_home_url(). '">'.'<img src="'. esc_url( $logo[0] ) .'"></a>';
          }else {
            echo '<h1 class="text-uppercase"><a class="header_title_text" href="' .get_home_url(). '">' .get_bloginfo( 'title' ). '</a></h1>';
          }
        ?>
        <p><?php bloginfo('description'); ?></p>
    </div>
</header>
<!-- start main menu -->
<nav class="navbar main-menu">
    <div class="container">
        <div class="navigation">

        <?php
          /**
          *Adding theme Top Menu
          */
          wp_nav_menu(array(
            'theme_location'		=>	'Top_menu',
            'menu_id'						=>	'Top_menu',
            'menu_class'				=>	'nav navbar-nav navbar-center',
            ));
        ?>
        </div>
    </div>
</nav>
<!-- end main menu -->

