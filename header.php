<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:900,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <!-- div#container -->
        <div id="container">
            <!-- header -->
            <header id="header">
                <!-- navheader -->
                <nav id="navheader">
                    <?php wp_nav_menu( array( 'html5blank' => 'header-menu' ) ); ?>
                </nav>
                <!-- /navheader -->
            </header>
                <!-- /header -->