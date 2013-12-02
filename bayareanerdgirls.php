<?php include 'headerr.php'; ?>
<section class="inner-page">
<header>
  <div class="row">
    <!-- Monitor Image -->
    <div class="col-md-10"> <img src="images/bang_imac.png"/ class="img-responsive"></div>
    <!-- Le sidebar -->
    <div class="col-md-2" style="padding:0;">
      <aside>
        <h3>Bay Area Nerd Girls</h3>
        <p>Meetup group promo site for like-minded girls to find friends in the Bay Area.</p>
        <button type="button" class="btn btn-info btn-lg">Launch Site</button>
        <button type="button" class="btn btn-default btn">Process Work</button>
      </aside>
    </div>
  </div>
</header>

<!-- Start Browser Frame -->
<?php include 'browsertop.php'; ?>

            <a href="#"><img src="images/content.png" class="img-responsive"/></a>
          </div>
          <div class="ac-grid">
            <a href="#"><img src="images/content.png" class=""/></a>
            <a href="#"><img src="images/content2.png" class=""/></a>
            <a href="#"><img src="images/content.png" class=""/></a>
            <a href="#"><img src="images/content2.png" class=""/></a>
            <a href="#"><img src="images/content.png" class=""/></a>
            <a href="#"><img src="images/content.png" class=""/></a>
            <a href="#"><img src="images/content.png" class=""/></a>
            <a href="#"><img src="images/content.png" class=""/></a>
          </div>
 <?php include 'browserbottom.php'; ?>

 <!-- End Browser Frame 
=======================================-->

<!-- Start document snippet section with tabbable subsections -->
<div class="row">
  <div class="col-md-12">

    <ul class="nav nav-tabs" id="myTab">
      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
      <li><a href="#profile" data-toggle="tab">Profile</a></li>
      <li><a href="#messages" data-toggle="tab">Messages</a></li>
      <li><a href="#settings" data-toggle="tab">Settings</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="home">...</div>
      <div class="tab-pane" id="profile">Something here </div>
      <div class="tab-pane" id="messages">Something there </div>
      <div class="tab-pane" id="settings">lflsdjf</div>
    </div>
 </div>
</div>
</section>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

 <!-- End document snippet section -->





<?php include 'footerr.php'; ?>