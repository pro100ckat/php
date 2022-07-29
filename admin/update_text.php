<?php
include ("blocks/db.php");
if (isset($_REQUEST['title'])) {$title = $_REQUEST['title'];}
if (isset($_REQUEST['meta_d'])) {$meta_d = $_REQUEST['meta_d'];}
if (isset($_REQUEST['meta_k'])) {$meta_k = $_REQUEST['meta_k'];}
if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];}
if (isset($_REQUEST['text'])){$text = $_REQUEST['text'];}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Обработчик страниц</title>
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
      <td valign="top">
      
      <?php 
		  
		  if($title!='' and $meta_d!='' and $meta_k!='' and  $text!='' )
			  
		  {
			  $pr=mysqli_query($db,"UPDATE settings SET title='$title', meta_d='$meta_d', meta_k='$meta_k',  text='$text' WHERE id='$id'");
			  
			  if($pr==1)
			 
			 {
				  echo "Страница успешно обновлена";
			  }
			  else
			  {
				  echo "Ошибка обновления";
			  }
		 }
		  else{
			  echo "Заполнены не все поля!";
		  }
		  
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