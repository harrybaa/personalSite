<?php
/*
Template Name: intern
*/

get_header(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/intern.css">
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/template.js"></script>
  <div class='main'>
    <div class='banner'>
      <div class="content">
        <div class="simple-info">
          <a class="dolphin-logo img-wrapper" href="http://www.dolphin.com" target="_blank" alert="Dolphin Official Site">
            <img src="../src/intern_index0_content.png">
          </a>
          <div class="info-block">
            <p class="info-block-p"></p>
            <img class="read-more" src="../src/readMore.png"/>
          </div>
        </div>
        <div class="clear-float"></div>
        
        <div class="more-info">
          <p class="big-info-block-p"></p>
          <img class="read-less" src="../src/readLess.png"/>
        </div>
      </div>
      <div class="banner-footer">
        <div class="b-f-wave1"></div>
        <div class="b-f-wave2"></div>
      </div>
    </div>

    <div class='works'></div>

    <div class='other-title'><p>Add More...</p></div>
    <div class='others'></div>
    <div class='clear'></div>

    <!-- <div class='about'></div> -->

  </div>

  <script id="info_tpl" type="text/html">
    {{Position}}<br>
    {{Team}}<br>
    {{Time}}<br>
    {{Keywords}}<br>
  </script>

  <script id="work_item_tpl" type="text/html">
    <div class='work-item'>
        <div class='links left'>
          <div class='work-name shadow'>{{work_name}}</div>
          <div class='preview img-ver-wrapper'>
            <img class='shadow' src='{{icon_url}}'>
          </div>
          <a class='site-link' target='_blank' href='{{site_link_url}}'>{{site_link_name}}</a>
          <div class='basic-info bold'>
            <p class='b-i-item'><span class='item-name'>Date: </span>{{date}}</p>
            <p class='b-i-item'><span class='item-name'>Platform: </span>{{plantform}}</p>
            <p class='b-i-item'><span class='item-name'>Languages: </span>{{languages}}</p>
          </div>
        </div>

        <div class='contents left'>
          
          <div class='introduction'>
            <p class='intro-item'>{{introduction}}</p>
          </div>

          <div class='features-wrapper'>
          {{each features as value i}}
            <div class='feature'>
              <div class='feature-icon img-wrapper shadow'>
                <img src='"'{{icon_url}}'"'>
              </div>
              <p class='item-name bold'>{{value.feature_name}}</p>
              <p class='feature-content'>{{value.feature_content}}</p>
            </div>
          {{/each}}
            <div class='clear'></div>
          </div>
          
          <div class='role'>
            <p class='role-title'>Role In Team</p>
            {{each roles as value i}}
            <p class='role-item'><span class='item-name bold'>{{value.name}}: </span>{{value.content}}</p>
            {{/each}}
          </div>
        </div>
        <div class='clear'></div>
      </div>
  </script>

  <script id="other_item_tpl" type="text/html">
    <div class='other-item'>
      <p class='o-i-title'>{{name}}</p>
      <div class='o-i-preview img-wrapper'>
        <img class='o-i-p-i' src='{{pic}}' alt='preview picture'>
      </div>
      <a class='o-i-link' href='{{link_url}}'>{{link_name}}</a>
    </div>
  </script>

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
      $('.others').html(fragOther);
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