<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malerejuvi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medical-health-website' ); ?></a>
 <header id="top-small-header">
      <div class="container">
    <div class="row">
      <div class="col-md-6">
        <ul class="top-info">
          <li><a href="tel:(815) 412-6160"><i class="fa fa-phone"></i>(815) 412-6160</a></li>
        </ul>
      </div>
      <div class="col-md-6 text-right">
         <?php
        wp_nav_menu( array(
          'menu_class' => 'top-social',
          'theme_location' => 'top-social-menu',
          'manu_id' => 'top-social-menu'
        ));
        ?>
      </div>
    </div>
  </div> 
    </header>
    <header id="masthead" class="site-header">

<nav class="navbar navbar-default menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
               <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
          </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'main-menu',
              'depth'             => 2,
              'container'         => 'nav',
              'container_id'      => 'navbar-collapse',
              'container_class'   => 'collapse navbar-collapse',
              'menu_class'    => 'nav navbar-nav navbar-right',
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'menu_id'     => 'main-menu',
              'walker'      => new wp_bootstrap_navwalker()
            )
          ); ?>
</div>
        </div><!-- .navbar -->
  </div><!-- .container -->
</nav><!-- .site-navigation -->



    </header><!-- #masthead -->

    <div id="content" class="site-content">
