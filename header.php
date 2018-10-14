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
        <h1 class='text-uppercase'><a class='header_title_text' href="<?php echo home_url(); ?>"><?php bloginfo('title'); ?></a></h1>
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
        
            <!-- <ul class="nav navbar-nav navbar-center">
                <li class="list-inline-item"><a href="/alpha">Home</a></li>
                <li class="list-inline-item"><a href="/alpha">About</a></li>
                <li class="list-inline-item"><a href="/alpha">Blog</a></li>
                <li class="list-inline-item"><a href="/alpha">Contact</a></li>
            </ul> -->
        </div>
    </div>
</nav>
<!-- end main menu -->