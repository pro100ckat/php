<?php 
 include("blocks/db.php");
$result = mysqli_query($db,"SELECT * FROM settings WHERE page='videos'");
	$myrow=mysqli_fetch_array($result);
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
                   	  <h2 align="center"><p>Свежие Видео</p></h2>
                   	  <p>
                         <?php 
		  
		  $result = mysqli_query($db, "SELECT id, tittle, author, discription, date FROM videos");
		  $myrow = mysqli_fetch_array($result);
		 		
		  
		do { 
   printf("<p><a href='view_videos.php?id=%s'>%s</a></p><p>Дата публикации:%s</p><p>Автор:%s</p><p>Описание: %s</p> ",$myrow['id'], $myrow['tittle'], $myrow['date'], $myrow['author'], $myrow['discription']);
			printf("<p><br><br></p>");
			
		}
				  
		  
	while ($myrow = mysqli_fetch_array($result));
?>
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
                      <p>&nbsp;</p>
                      <p><a href="news.php" class="link1">Посмотреть все новости</a></p>
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