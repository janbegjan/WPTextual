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
<header class="header">
    <div class="logo text-center">
        <h1><a href="index.html"> <img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt="Textual"></a></h1>
        <p>A Content base Handcrafted Bootstrap Theme</p>
    </div>
</header>
<!-- start main menu -->
<nav class="navbar main-menu">
    <div class="container">
        <div class="navigation">
            <ul class="nav navbar-nav navbar-center">
                <li class="list-inline-item"><a href="/alpha">Home</a></li>
                <li class="list-inline-item"><a href="/alpha">About</a></li>
                <li class="list-inline-item"><a href="/alpha">Blog</a></li>
                <li class="list-inline-item"><a href="/alpha">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end main menu -->