<?php include ("blocks/db.php"); 
$result=mysqli_query($db,"SELECT id, tittle FROM news");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Редактирование новости</title>
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
				  printf("<p><a href=edit_news.php?id=%s>%s</a></p>",$myrow['id'],$myrow['tittle']);
			  }
			  
		  }
		  else{
			  $id=$_GET['id'];
			  $result=mysqli_query($db,"SELECT * FROM news WHERE id='$id'");
			  $myrow=mysqli_fetch_array($result);
print<<<HERE
<form name="form1" action="update_news.php" method="POST">
      		Заголовок <br>
      		<input value="$myrow[tittle]" type="text" name="tittle" id="tittle"><br>
      		Теги <br>
      		<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d"><br>
      		Ключевые поля <br>
      		<textarea type="text" cols ="40" name="meta_k" id="meta_k">$myrow[meta_k]</textarea><br>
      		Дата <br>
      		<input value="$myrow[date]" type="date" name="date" id="date"><br>
      		Краткое описание <br>
			<textarea cols="40" type="text" name="descriptions" id="descriptions">$myrow[descriptions]</textarea><br>
      		Текст новости <br>
      		<textarea cols="40" type="text" name="text" id="text">$myrow[text]</textarea><br>
      		Автор <br>
      		<input value="$myrow[author]" type="text" name="author" id="author"><br>
			<input name="id" type="hidden" value="$myrow[id]">
      		<input type="submit" class="submit" id="submit" value="Сохранить"><br>
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