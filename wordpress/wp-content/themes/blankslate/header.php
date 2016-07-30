<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <div id="branding" class="MainHeader">
            <a href="<?php echo home_url( '/' ); ?>"><img alt="" src="wp-content/uploads/TPGLogo.gif" class="mainLogo"/>
            <div class="TitleBox">
                <span class="Title"><strong>TPG |</strong> TELE<strong>MANAGEMENT</strong></span>
            </div></a>
            <div id="searchBox">
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div>
                        <input type="text" value="" name="s" id="s" />
                        <input type="submit" id="searchsubmit" value=" " />
                    </div>
                </form>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-links' ) ); ?>
        </div>
<nav>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>

<div id="container">