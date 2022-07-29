<?php
include ("blocks/db.php");
if (isset($_REQUEST['id'])) {$id=$_REQUEST['id'];}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Удаения</title>
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
		  
		  if($id!='')
			  
		  {
			  $myrow=mysqli_query($db,"DELETE FROM news WHERE id='$id'");
			  
			  if($myrow==1)
			 
			 {
				  echo "Новость удалена";
			  }
			  else
			  {
				  echo "Ошибка удаления";
			  }
		 }
		  else{
			  echo "ID parametr error";
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