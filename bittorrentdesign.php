
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
              <p> BitTorrent</p>
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
<nav>
  <ul>   
    <li><a href="#" class="nav-headline">Projects</a>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">User Experience</a></li>
      </ul>
    </li>
  </ul>
</nav>
               
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
            <h3>Page Design</h3>
            <img src="images/bang_monitor.png">
          </div>
        </div>

        <div class="row">
          <div class="jumbo-mock">
            <h3>Visual studies for redesign</h3>
            <img src="images/ut-visual1.jpg">
            <img src="images/ut-visual2.jpg">
            <img src="images/ut-visual3.jpg">
          </div>
        </div>

        <div class="row">
          <div class="sketches-section">
            <h3>Diagram</h3>
            <div class="twelve columns"><img src="images/CE_diagram.jpg"></div>

          </div>
        </div>


        <div class="row">
          <div class="sketches-section">
            <h3>Illustrations</h3>
            <div class="row" style="padding-bottom:50px;">
              <div class="four columns"><img src="images/bt-illus1.png"></div>
              <div class="four columns"><img src="images/bt-illus2.png"></div>
              <div class="four columns"><img src="images/bt-illus3.png"></div>
          </div>
          <div class="row">
            <div class="four columns"><img src="images/bt-illus4.png"></div>
            <div class="four columns"><img src="images/bt-illus5.png"></div>
            <div class="four columns"><img src="images/bt-illus6.png"></div>
          </div>

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