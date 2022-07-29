<?php include ("blocks/db.php"); 
$result=mysqli_query($db,"SELECT id, title FROM settings");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Редактирование страниц</title>
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
		  if(!isset($_GET['id']))
		  {
			
			  while($myrow=mysqli_fetch_array($result))
			  {
				  printf("<p><a href=edit_text.php?id=%s>%s</a></p>",$myrow['id'],$myrow['title']);
			  }
			  
		  }
		  else{
			  $id=$_GET['id'];
			  $result=mysqli_query($db,"SELECT * FROM settings WHERE id='$id'");
			  $myrow=mysqli_fetch_array($result);
print<<<HERE
<form name="form1" action="update_text.php" method="POST">
      		Название страницы <br>
      		<input value="$myrow[title]" type="text" name="title" id="title"><br>
      		Краткое описание <br>
      		<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d"><br>
      		Ключевые поля <br>
      		<textarea type="text" cols ="40" name="meta_k" id="meta_k">$myrow[meta_k]</textarea><br>
      		Текст страницы с тэгами <br>
      		<textarea cols="40" type="text" name="text" id="text">$myrow[text]</textarea><br>
			<input name="id" type="hidden" value="$myrow[id]">
      		<input type="submit" class="submit" id="submit" value="Сохранить изменения"><br>
      	</form>
HERE;
}?>
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