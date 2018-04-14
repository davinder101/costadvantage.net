<?php
function get_banners($page_name){ 
switch($page_name){
    case 'contactus': ?>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="plugins/slider/nivo-slider.css" type="text/css" media="screen" />
<div class="page-wrapper">
  <!-- Begin loading hero image as fast as possible -->
  <!-- Hero -->
  <!-- #Mobile -->
  <!-- /Mobile -->
  <!-- #Desktop -->
  <div class="marquee" role="listbox">
    <div class="marquee-fade">
      <div id="wrapper">
        <div class="slider-wrapper theme-default">

          <div id="slider" class="nivoSlider" style="margin-top:85px;"> 
         
      	<?php 
		for($i=1;$i<=6;$i++)
		{
		?>
          <img src="img/<?php echo $i;?>.jpg" data-thumb="img/<?php echo $i;?>.jpg" alt="" /> 
      <?php } ?>
      
          </div>
          
          <div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Desktop -->
  
  <style>
  .mascot
  {
  right:0;
	top:65%;
	display:block;
	position:fixed;
  z-index: 2;
	height:110px;
  }
  
  @media only screen and (min-width: 786px) {
    .mascot{
      top: 50%;
      bottom: 0;
      height:180px;
    }
  }
  </style>
  
 <img  src="img/mas.png" class="mascot"  />
  
  
  <div class="zsg-layout-width main-content">
    <main role="main" class="zsg-layout-content">
      <!-- Top section of page to be above the fold -->
      <div class="viewport-top">
        <div class="search-wrapper">
          <!-- Search -->
          
          
          
          <?php /*?><section class="search"> <br>
            <br>
            <br>
            <header class="search-hdr">
              <h1  class="search-hdr-text zsg-content_collapsed" >Enter Your text here..<sup>&reg;</sup></h1>
            </header>
            <p align="center"><a href="" style="padding:10px 20px; color:#FFFFFF; background:#006699; font-size:20px; border:1px #fff solid;">Read More</a></p>
          </section><?php */?>
          
          
       
          
        </div>
        
        <!-- DEFAULT CONTENT -->
      </div>
      
      
    </main>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="plugins/slider/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<?php break;
        
} }
function get_contactform($redirectto){ ?>
<form action="action/contact_req.php" method="post">
  <input type='text' name="name" placeholder='Your Name*' required class='make_marrking'/>
  <input type='text' name="email" placeholder='Your Email*'  required class='make_marrking'/>
  <input type='text' name="phone" placeholder='Your Phone'  class='make_marrking'/>
  <input type='hidden' name='url' value="<?=$redirectto?>" />
  <textarea placeholder='Any Message' name="message"></textarea>
  <input type='submit' name='sendquer' value='Send' class='button_this'>
</form>
<?php }
?>
