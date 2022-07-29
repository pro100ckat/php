<?php
include ("blocks/db.php");
if (isset($_REQUEST['tittle'])) {$tittle = $_REQUEST['tittle'];}
if (isset($_REQUEST['meta_d'])) {$meta_d = $_REQUEST['meta_d'];}
if (isset($_REQUEST['meta_k'])) {$meta_k = $_REQUEST['meta_k'];}
if (isset($_REQUEST['date'])) {$date = $_REQUEST['date'];}
if (isset($_REQUEST['descriptions'])) {$descriptions = $_REQUEST['descriptions'];}
if (isset($_REQUEST['text'])) {$text = $_REQUEST['text'];}
if (isset($_REQUEST['author'])) {$author = $_REQUEST['author'];}
if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Обработчик</title>
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
		  
		  if($tittle!='' and $meta_d!='' and $meta_k!='' and $date!='' and  $descriptions!='' and  $text!='' and $author!='')
			  
		  {
			  $pr=mysqli_query($db,"UPDATE news SET tittle='$tittle', meta_d='$meta_d', meta_k='$meta_k', date='$date', descriptions='$descriptions', text='$text', author='$author' WHERE id='$id'");
			  
			  if($pr==1)
			 
			 {
				  echo "Новость обновлена";
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