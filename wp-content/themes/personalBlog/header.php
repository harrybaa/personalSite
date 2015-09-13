<?php
/**
 * Header template just for the harrybaa.com
 *
 * @author harrybaa
 */
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php
    // Print the <title> tag based on what is being viewed.
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
      echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

    ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/index.css">

  <!-- don't addapt to phone right now
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 980px)" href="css/index_980.css"/>
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="css/index_480.css"/>
  -->
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/ready.js"></script>
</head>

<body>
<div id="page" class="hfeed">


  <div id="main">
