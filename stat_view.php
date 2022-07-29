
<?php 
	include("blocks/db.php");
	$id=$_GET['id'];
	$rez=mysqli_query($db,"SELECT * FROM stat WHERE id='$id'");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Информация</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1000" align="center" bgcolor="#FFFFFF" class="main_border">
  
    <?php include("blocks/header.php");?>
    <tr>
      <td>
      	
      	<table width="100%" border="0">
  <tbody>
    <tr>
      <?php include("blocks/menu.php");?>
      <td>
      	
      	<?php 
		 	$mas=mysqli_fetch_array($rez);
			  printf("<table  align='center' class=stat><tbody><tr><td class=stat_head><p>%s</p> <p>Автор: %s</p><p>Дата:%s</p></td></tr><tr><td><p>%s</p></td></tr></tbody></table>",$mas['title'],$mas['author'],$mas['date'],$mas['text']);
			  
		  
		  
		  ?>

      	
      </td>
    </tr>
  </tbody>
</table>

      </td>
    </tr>
    <?php include("blocks/footer.php");?>
 
</table>

</body>
</html>