<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elo
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/index.css">

<div class="wel-pic" id="wel_pic">
  <div class="welcome-title">
    <p>
      TECHNOLOGY<BR>
      CREATIVITY
    </p>
  </div>
  <img class="banner-head" src="<?php bloginfo( 'template_directory' ); ?>/src/banner_head.png" alt="head">
</div>

<div class="pre-pro-nav">
  <div class='pre-title'>
    <p id="preProNav">Project Selection</p>
  </div>
  <div class='pre-img'>
    <img src="<?php bloginfo( 'template_directory' ); ?>/src/bottomArrow.png" alt="more">
  </div>
</div>

<div class="pro-block">
  <div class="sample index1">
    <a class="hyperlink" href="http://www.harrybaa.com/intern"></a>
  </div>
  <div class="sample index2">
    <a class="hyperlink" target="_blank" href="http://pasa.ucmerced.edu"></a>
  </div>
  <div class="sample index3">
    <a class="hyperlink" href="http://www.harrybaa.com/projects"></a>
  </div>
  <div class="sample index4">
    <a class="hyperlink" href="http://www.harrybaa.com/activities"></a>
  </div>
</div>

<!-- SCRIPTS -->

<script type="text/javascript">
  var isShow = false;
  var wheight = document.documentElement.clientHeight;
  var wWidth = document.documentElement.clientWidth;

  $(document).ready(function(){
    resize();
  });
  function resize(){
    if(wheight > 450){
      wheight -= 60;
      $(".wel-pic").css("height", wheight+"px");
    }
    if(wWidth > 480 && isShow){
      changeMobileMenuStatu(isShow);
    }
  }
  window.onresize = resize;

  //mobile menu
  $("#mobileMenu").click(function(){
    changeMobileMenuStatu(isShow);
  });
  function changeMobileMenuStatu(flag){
    if(flag){
      $(".mobile-menu").animate({top: "-255px"}, 500);
      isShow = false;
    } else {
      $(".mobile-menu").animate({top: "50px"}, 500);
      isShow = true;
    }
  }

  $("#preProNav").click(function(){
    scrollTo(0, wheight);
  })
</script>

<!-- END OF SCRIPTS -->


<?php get_footer(); ?>
