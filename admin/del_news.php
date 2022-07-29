<?php include ("blocks/db.php"); 
$result=mysqli_query($db,"SELECT id, tittle FROM news");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Удаление новости</title>
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
      
      <form action="drop_news.php" method="post">
      <p>Выберите пункт для удаления</p>
     <?php 
		  
	while($myrow=mysqli_fetch_array($result))
			  {
	printf("<p> <input name = 'id' type='radio' value='%s'>%s</p>", $myrow['id'], $myrow['tittle']);
		}
		  ?>
		  
		 <p> <input type="submit" name="submiy" value="Удалить новость"></p>
		  
		  </form>
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