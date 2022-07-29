<?php 
 include("blocks/db.php");
$result = mysqli_query($db,"SELECT * FROM settings WHERE page='news'");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Контакты </title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<body>
  
    <?php include("blocks/header.php");?>
 
      <?php include("blocks/menu.php");?>
        <!-- content begins -->
<div id="content_bg">
    <div id="column_box">
      <div id="bg_left"></div>
      <div id="bg_right"></div>
      <div class="clear"></div>
    </div>
   <div class="container">
    	<div class="box">
          	<div class="inside">
            	<div class="row-1 outdent">
              	<div class="wrapper">
              	  <div class="meta4" align="center">
                  	<div class="box2" align="center">
               	    <h2>Как нас найти</h2>
               	    <p>&nbsp;</p>
               	    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Наш офис находится на ул. Стромыка 20, <span itemprop="addressLocality">Москва</span></p>
               	    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">&nbsp;</p>
               	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.9675898673!2d37.69857841593211!3d55.79380068056436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5350a7e84ec7f%3A0x1239b17e58b30cc3!2z0YPQuy4g0KHRgtGA0L7QvNGL0L3QutCwLCAyMCwg0JzQvtGB0LrQstCwLCDigKIgMTA3OTk2!5e0!3m2!1sru!2sru!4v1513529626120" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               	    <p>&nbsp;</p>
               	    <p>За юридическими документами загляните в отдельный раздел.</p>
                  	</div>
                  </div>
              	</div>

              </div>
              <div class="row-2">
              	<div class="wrapper"></div>
              </div>
        </div>
      </div>
    </div>

</div>
<!-- content ends -->     
    <?php include("blocks/footer.php");?>
 

</body>
</html>