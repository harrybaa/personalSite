<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Elo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--<?php wp_head(); ?>-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>

<!-- costomed style -->

  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/index.css">

  <!-- Isn't addapted to phone right now
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 980px)" href="<?php bloginfo( 'template_directory' ); ?>/css/index_980.css"/>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php bloginfo( 'template_directory' ); ?>/css/index_480.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  -->
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/ready.js"></script>


</head>

<body <?php body_class(); ?>>

<!-- for loading -->
<div class="loading-wrapper">
  <div class="loading">
    <span>
      <img class="load-pic" src="<?php bloginfo( 'template_directory' ); ?>/src/load_pic.png"/>
      <h1 class="load-title">My zealous hear is<br> <span class="firing">FIRING...</span></h1>
    </span>
  </div>
</div>

	<div class="container">
		<div class="wrapper">

			<!-- top nav begin of original
			<nav id="navigation" class="navbar-custom navbar-fixed-top">
				<div class="wrap-top-nav clearfix">
					<div class="logo left">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
					<div class="search-form-wrap">
						<?php get_search_form(); ?>
					</div>
					<div class="menu-button right">
						<a id="trigger-overlay" href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-toggle-menu.png" alt="menu"></a>
					</div>
				</div>
			</nav>
			top nav end -->


<div class="nav-block">
  <ul class="top-nav">
    <li class="nav-index" >
      <a href="http://www.harrybaa.com">
        <span><img src="<?php bloginfo( 'template_directory' ); ?>/src/load_pic.png"></span>
        <span id="navIndexTitle">&nbsp;Harry's <br>&nbsp;Dream Home</span>
      </a>
    </li>
    <li class="nav-item"><a href="http://www.harrybaa.com/intern">Intern</a></li>
    <li class="nav-item"><a href="http://www.harrybaa.com/projects">Projects</a></li>
    <li class="nav-item"><a href="http://www.harrybaa.com/activities">Activities</a></li>
    <li class="nav-item"><a href="http://www.harrybaa.com/blog">Blog</a></li>
    <li class="nav-item"><a href="http://www.harrybaa.com/about">About</a></li>
  </ul>
  <div class="top-mobile-menu" id="mobileMenu">
    <p>MENU</p>
  </div>
</div>

<div class="mobile-menu">
  <ul class="mobile-nav">
    <li class="mobile-nav-item"><a href="./constructing.html">Intern</a></li>
    <li class="mobile-nav-item"><a href="./constructing.html">Projects</a></li>
    <li class="mobile-nav-item"><a href="./constructing.html">Activities</a></li>
    <li class="mobile-nav-item"><a href="./constructing.html">Essays</a></li>
    <li class="mobile-nav-item"><a href="./constructing.html">About</a></li>
  </ul>
</div>


