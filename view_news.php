<?php 
	include("blocks/db.php");
if (isset($_GET['id'])) {$id=$_GET['id'];}

	$result = mysqli_query($db,"SELECT * FROM news WHERE id='$id'");
	$myrow=mysqli_fetch_array($result);	
$myrow2=mysqli_fetch_array($result);
$result2 = mysqli_query($db,"SELECT id, tittle FROM news");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name = "description" content"<?php echo $myrow['meta_d']; ?> ">
<meta name = "keywords" content "<?php echo $myrow['meta_k'];   ?> ">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $myrow['title'];?> </title>
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
              	  <div class="meta1">
                  	<div class="box1">
                   	  <h2><p><?php echo $myrow['tittle']; ?></p></h2>
                   	  <p>
                   	  	 <td valign="top">
      
      <p><?php echo $myrow['date']; ?></p>
      <p><?php echo $myrow['text']; ?></p>
      </td>
                   	  </p>
                  	</div>
                  </div>
              	  <div class="meta2">
                  	<div class="box1">
                   	  <h2>Свежие новости</h2>
                      <ul class="list1">
                      	<li>
                      		<?php 
		  
	while($myrow2=mysqli_fetch_array($result2))
			  {
	printf("<p><a href=view_news.php?id=%s>%s</a></p>",$myrow2['id'],$myrow2['tittle']);
		}
		  ?>
                      	</li>
                      </ul>
                      <a href="news.php" class="link1">Посмотреть все новости</a>                    </div>
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