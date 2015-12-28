<?php
/*
Template Name: activities
*/

get_header(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/intern.css">
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/template.js"></script>
  <div class='main'>
    <div class="menu"></div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      init();
      registEven();
    });

    function init(){
      var data,
          url = "<?php bloginfo( 'template_directory' ); ?>/data/intern.json";
      loadData(url);
    }

    function loadData(url){
      $.ajax({
        url: url,
        dataType: 'json',
        success: function(res){
          console.log('New Json data loaded.');
          renderData(res);
        },
        error: function(){
          console.log('Faild to load the data.');
        }
      });
    }

    function renderData(res){
      var fragInfo = '',
          fragWork = '',
          fragOther = '',
          data = res || '';
      // console.log(data);
      if(data != ''){
        fragInfo += renderInfo(data.info);
        fragWork += renderWorks(data.works);
        fragOther += renderOthers(data.others);
      }
      $('.info-block-p').html(fragInfo);
      $('.big-info-block-p').html(fragInfo);
      $('.works').html(fragWork);
      $('.others').html($('.others').html + fragOther);
    }

    function renderInfo(info){
      var fragment = '';
      if(info != '')
          fragment += template('info_tpl', info);
      return fragment;
    }

    function renderWorks(works){
      var fragment = '';
      if(works != '')
        works.forEach(function(value, i){
          fragment += template('work_item_tpl', value);
        })
      return fragment;
    }

    function renderOthers(others){
      var fragment = '';
      if(others != '')
        others.forEach(function(value, i){
          fragment += template('other_item_tpl', value);
        })
      return fragment;
    }

    function registEven () {
      $(".banner .read-more").click(function(){
        $(".simple-info").animate({opacity: 0}, 500, function(){
          $(".simple-info").css("display", "none");
          $(".more-info").css("display", "block").animate({opacity: 1}, 500);
        });
      });
      $(".banner .read-less").click(function(){
        $(".more-info").animate({opacity: 0}, 500, function(){
          $(".more-info").css("display", "none")
          $(".simple-info").css("display", "block").animate({opacity: 1}, 500);
        });
      });
    }
</script>

<?php get_footer(); ?>