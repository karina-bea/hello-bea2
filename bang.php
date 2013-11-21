
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Karina Baylocq Portfolio | Interaction Designer</title>

<script type="text/javascript" src="//use.typekit.net/odl0tpz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" media="screen and (max-width: 600px)" href="css/600.css" />
  <link rel="stylesheet" media="screen and (min-width: 900px)" href="css/900.css" />
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/fonts.css">

  
  <script src="javascripts/modernizr.foundation.js"></script>	
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="source/jquery.fancybox.js"></script>

  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

  </head>
<body>




        <header> <!-- html5, hayyyyyy-->
          <!-- start first row -->
          <div class="row">
            <div class="twelve columns">
              <!-- greeting for politeness-->
              <div class="greeting">
              <p> Bay Area Nerd Girls</p>
               <a href="http://whatis.bayareanerdgirls.com" target="_blank" class="launch-btn">Launch Site</a>
              </div>
              <!-- super sweet css arrow, css3 is the shit -->
              <div class="arrow-down">
                </div>
            </div> <!-- /greeting-->

              <div class="twelve columns">
                <div class="row">


                <div class="six columns">
                  <a href="index.html"><h1 class="inner-fullname">karina baylocq</h1></a>
                </div>
               
                  </div>
                </div>
            </div>


          </div> <!-- end row-->

        </header> <!-- yyyy gurl, hay! /header-->
          <!-- prettiful orange accent -->


  <section class="project" style="padding-top:15px;">
    <div class="row">
      <div class="twelve columns">
        <div class="row">
          <div class="onboarding">
              <p>BitTorrent’s corporate website showcasing different products like BitTorrent downloader client, 

uTorrent client, BitTorrent Sync, & BitTorrent Bundles. Visual assets created for the website like 

infographics and nav styling.</p>
          </div>
        </div>
      </div>
    </div>

      <section style="background-color:#fff;">

         <div class="row">
          <div class="jumbo-mock">
            <img src="images/bang_imac.png">
          </div>
        </div>




        <div class="row">
          <div class="jumbo-mock">
            <img src="images/bang_dynamic.png">
          </div>
        </div>

        <div class="row">
          <div class="sketches-section">
            <h3>Example Persona</h3>
            <div class="three columns"><img src="http://baylocqkd.aisites.com/entertainment/young_adult.png"></div>
            <div class="nine columns"><blockquote>Paige is a dorky young adult freshly moved to the Bay Area looking to find new friends. She’s currently working a retail job 30 hours a week and shares a home with three roommates in the Sunset District. She attends classes at CCSF in her spare time, still trying to find her passion professionally.She talks to her close friends back in her hometown frequently via chat clients and her only physical friend in SF is her boyfriend.</blockquote>
              <div class="four columns"><h4>Background</h4> High School graduate, some college, completed or in process to getting a degree.</div>
              <div class="four columns"><h4>Behavior</h4> Media hungry, avid fangirl, frequents social media sites like reddit, pinterest, and tumblr.</li> <li>Interested in gaming, boardgames, movies, tabletop RPG.</li></div>
              <div class="four columns"><h4>Motivation</h4> To find friends because of moving to a new city or in search of better friends. Frustrations: Infrequency</div></div>
            </div>


          </div>
   <div class="row">
          <div class="jumbo-mock">
             <h3>Wireframe</h3>

            <img src="http://baylocqkd.aisites.com/entertainment/bang_wireframe.jpg">
          </div>
        </div>

    </section>




        </div>
     </div>

    </div>
   

  </section>


  <footer>
<?php include 'footer.php'; ?>
</footer>





<div id="toTop"><i class="foundicon-home"></i> Back to Top</div>




<!--back to top script-->
<script type="text/javascript">
$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();	
    } else {
      $('#toTop').fadeOut();
    }
  });

  

  $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
  });	
  

}


});
</script>





</body>
</html>