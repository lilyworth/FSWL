<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('From Syria with Love'); ?> <?php wp_title(); ?></title> 
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

<?php wp_head(); ?> 
</head>
<body>
<div class="pagewrapper">
    <header>
        <div id="logo"><a href="<?php home_url(); ?>">From Syria with Love</a></div>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
    </header>