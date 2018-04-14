<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/Organization" class="wf-loading no-js zsg-theme-modernized null" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" >
<head>
<meta http-equiv="x-dns-prefetch-control" content="on"/>
<meta charset="utf-8"/>
<title>Cost Advantage Consulting</title>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin" rel="stylesheet" type="text/css"/>
<script>document.documentElement.className = document.documentElement.className.replace(/\bwf-loading\b/g, '');</script>

<link rel="stylesheet" media="all" type="text/css" href="css/main.css"/>


<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
</meta>

<!--[if gte IE 9]><link rel="shortcut icon" href="/static/images/ie9_favicon.ico" type="image/x-icon"/><![endif]-->
</head>
<body id="home" class="home-page hide-top-nav-gleam  tengage wide">
<a name="top" id="top"></a>
<div id="wrapper" class="main-wrapper">
  <div class="zsg-modal-mask"></div>
  <?php include_once('includes/header.php'); ?>
  <div class="">
    <!-- DEFAULT CONTENT -->
    <section class="cms-content">
        <div class="cms-content-top zsg-layout-width zsg-md-hide zsg-sm-hide" id="large-upsell">
          <header class="cms-content-hdr">
            <h2 class="cms-content-hdr-text">Contact Us</h2>
          </header>
          <section class="cms-content-section zsg-sm-hide">
            <div class="zsg-g">
              <div class="zsg-lg-2-3 zsg-sm-1-1">
               <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://www.buyinstagramfollowersreviews.net/">buy instagram followers cheap</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(28.67901948698886,77.17056905156255),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.67901948698886,77.17056905156255)});infowindow = new google.maps.InfoWindow({content:'<strong>Cost Advantage</strong><br>delhi india<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
              </div>
              <div class="zsg-lg-1-3 zsg-sm-1-1">
                <header class="cms-content-section-hdr" style="padding:0px;margin:0px;">
                  <h3 class="cms-content-section-hdr-1">Quick Enquiry</h3>
                </header>
                <form action="action/contact_req.php" method="post">
                        <input type='text' name="name" placeholder='Your Name*' required class='make_marrking'/>
                        <input type='text' name="email" placeholder='Your Email*'  required class='make_marrking'/>
                        <input type='text' name="phone" placeholder='Your Phone'  class='make_marrking'/>
                        <textarea placeholder='Any Message' name="message"></textarea>
                        <input type='submit' name='sendquer' value='Send' class='button_this'>
                 </form>
                <br/><b>Email on</b><br/>
                  <p>info@costadvantage.net
                </div>
            </div>
          </section>
          <section class="zsg-lg-hide zsg-md-hide cms-content-item"> <a href=""> <span class="zsg-link_primary"></span> </a> </section>
        </div>
      </section>
  </div>
    <?php include_once('includes/footer.php'); ?>
</div>
</body>
</html>
<?php
if(isset($_GET['success'])){ ?>
    <script>
        alert('Message Received Thankyou.');
    </script>
<?php }
?>