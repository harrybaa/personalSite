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
    <p class="pro-title">Intern@<br>Dolphin</p>
    <ul class="pro-sam-list">
      <li><a>Customer Service System</a></li>
      <li><a>Crush Analysis Site</a></li>
      <li><a>Uninstall Query System</a></li>
      <li><a>International APP Store</a></li>
      <li><a>More...</a></li>
    </ul>
  </div>
  <div class="sample index2">
    <img src="<?php bloginfo( 'template_directory' ); ?>/src/cool.png">
    <h1>Cool.list</h1>
    <h3>2013 practical training</h3>
  </div>
  <div class="sample index3">
    <h3>2014 Inter Imagine Cup</h3>
    <h1>SPOT LBS System</h1>
    <span id="spot_logo_block">
      <img id="spot_logo" src="<?php bloginfo( 'template_directory' ); ?>/src/spot_logo.png">
    </span>
  </div>
  <div class="sample index4">
    <h1 id="choir-title" class="pro-title">Activity@<br>Choir</h1>
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
