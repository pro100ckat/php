<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Добавить видео</title>
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
      <form name="form1" action="add_video.php" method="POST">
      		Заголовок <br>
      		<input type="text" name="tittle" id="tittle"><br>
      		Теги <br>
      		<input type="text" name="meta_d" id="meta_d"><br>
      		Ключевые поля <br>
      		<textarea type="text" cols ="40" name="meta_k" id="meta_k"></textarea><br>
      		Дата <br>
      		<input type="date" name="date" id="date"><br>
      		Краткое описание <br>
			<textarea cols="40" type="text" name="discription" id="discription"></textarea><br>
      		Автор <br>
      		<input type="text" name="author" id="author"><br>
      		Текст новости <br>
      		<textarea cols="40" type="text" name="text" id="text"></textarea><br>
      		<input type="submit" class="submit" id="submit" value="Добавить видео"><br>
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