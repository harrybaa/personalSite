<?php
/*
Template Name: activities
*/

get_header(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/activities.css">
  <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/template.js"></script>
  <div class='main'>
    <!-- For menu -->
    <div class="tab-menu">
      <ul class="menu-frame">
        <li class="menu-item choir active">SNAIL CHOIR</li>
        <li class="menu-item su">STUDENTS UNION</li>
      </ul>
    </div>

    <div class="tab-container">
      <div class="tab-frame tab-choir active">
        <div class="tab-main">
          <div class="section">
            <div class="choir-info-container left">
              <div class="c-i-c-text">
                <p>
                <span style="font-size:28px;"><b>The Snail Choir </b><br>
                International School of Software, Wuhan University</span><br>
                <b>Leader (in 2012-2013)</b>,  joined between 2011-2015<br><br>
                WE LOVE MUSIC, WE LOVE BEING IN THIS BIG FAMILY. Snail Choir is a student group totally managed by our students. Though we are amatuars, it can't hedge us singing sweet and difficult songs, building a good team and giving great works.
                <br><br>
                </p>
              </div>
            </div>
            <div class="choir-video-container left">
              <iframe class="c-v-c-content" width="560" height="315" src="https://www.youtube.com/embed/tQq3Yo_RWuI" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="clear"></div>
          </div>
          <div class="section gallery">
            <div>
              <img class="gallery-content" src="http://www.harrybaa.com/src/choir_gallery.png">
            </div>
          </div>
          <div class="section role">
            <p class="c-r-header">ROLE AS A LEADER</p>
            <ul class="c-r-list">
              <li class="c-r-l-item">Organized regular rehearsal and training. Made propaganda and recruitments to grow.</li>
              <li class="c-r-l-item">Choose songs fit our ability, interests and performance.</li>
              <li class="c-r-l-item">Organized activities to unit members. Took part in performances to gain experience.</li>
              <li class="c-r-l-item">Won second prize in Autumn Chorus Competition held by Wuhan University, which was the best achievement ever.</li>
            </ul>
          </div>
          <div class="section hr"></div>
          <div class="section ucchuros">
            <p>
              <span style="font-size:28px;"><b>UC MERCED CHUROS</b><br>
              University of California, Merced</span><br>
              Joined between Aug./2015-Dec./2015<br><br>
              I also joined UC Merced Chorus when I studied in UCM. Different churos in different culture have different customs. It's also a great fun of attending churos in America.<br>
              After all, I got an A in this class.
            </p>
          </div>
          
        </div>
      </div>

      <div class="tab-frame tab-su">
        <div class="tab-main">
          <div class="section">
            <div class="su-info-container left">
              <span style="font-size:28px;"><b>The Students Union</b>, Wuhan University<br>
              Vice Minister of Secretary Department</span><br>
              2011 – 2013<br><br>
              Role:<br>
              On watch in students union’s office, be responsible for the reception of guests, management of documents, answering official phone.<br>
              Co-organized activities and services for students of the whole school, including Sakura Festival services, Top 10 popular teacher selection, New Year’s Day celebration, etc.
            </div>
            <div class="su-photo-container left">
              <img src="">
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      registEven();
    });

    function registEven () {
      $(".menu-item.choir").click(function(){
        $(this).addClass("active");
        $(".tab-choir").addClass("active");
        $(".menu-item.su").removeClass("active");
        $(".tab-su").removeClass("active");
      });
      $(".menu-item.su").click(function(){
        $(this).addClass("active");
        $(".tab-su").addClass("active");
        $(".menu-item.choir").removeClass("active");
        $(".tab-choir").removeClass("active");
      });
    }
</script>

<?php get_footer(); ?>