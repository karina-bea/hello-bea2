
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


  <!-- prettiful orange accent -->

      <div id="accent">
        </div>

  
        <header> <!-- html5, hayyyyyy-->
          <!-- start first row -->
          <div class="row">
            <div class="twelve columns">
              <!-- greeting for politeness-->
              <div class="greeting">
              <p> AI SF Designs</p>
               <a href="http://aisfdesigns.com" target="_blank" class="launch-btn">Launch Site</a>
              </div>
              <!-- super sweet css arrow, css3 is the shit -->
              <div class="arrow-down">
                </div>
            </div> <!-- /greeting-->

              <div class="twelve columns">
                <div class="row">


                
  <div>
<?php include 'home.php'; ?>
</div>
               
                  </div>
                </div>
            </div>


          </div> <!-- end row-->

        </header> <!-- yyyy gurl, hay! /header-->
          <!-- prettiful orange accent -->


          </div> <!-- end row-->

        </header> <!-- yyyy gurl, hay! /header-->

 

  <section class="project" style="padding-top:15px;">
    <div class="row">
      <div class="twelve columns">
        <div class="row">
          <div class="onboarding">
          <p>AI SF Designs is a website created to be a resource to The Art Institute of California—San 

    Francisco students in the design majors. It’s meant to showcase work of previous and current 

    students and give an easy workflow for the advisors.</p>
          </div>
        </div>
      </div>
    </div>

      <section style="background-color:#fff;">

         <div class="row">
          <div class="jumbo-mock">
            <img src="images/ai_imac.png">
          </div>
        </div>




        <div class="row">
          <div class="jumbo-mock">
            <img src="http://cdn1.dribbble.com/users/69586/screenshots/960690/attachments/109657/graduates_fullpixels.png">
          </div>
        </div>




          </div>
 

        <div class="row">
          <div class="jumbo-mock">
             <div data-configid="1728216/5624319" style="width: 100%; height: 500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
          </div>
        </div>

       

    </section>
  <footer>
<?php include 'footer.php'; ?>
</footer>




        </div>
     </div>

    </div>
   

  </section>

  







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