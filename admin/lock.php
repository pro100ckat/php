<?php
/* Установка внутренней кодировки в UTF-8 */
mb_internal_encoding("UTF-8");
include("blocks/db.php");
if (isset($_SERVER['PHP_AUTH_USER']))

{
header("WWW-Authenticate: Basic realm=\"Admin page\"");
header("HTTP/1.0 401 Unauthorized");
exit();

}

else {

if (get_magic_quotes_gpc()) {
$_SERVER['PHP_AUTH_USER'] = mysqli_escape_string($_SERVER['PHP_AUTH_USER']);
$_SERVER['PHP_AUTH_PW'] = mysqli_escape_string($_SERVER['PHP_AUTH_PW']);
}

$query = "SELECT pass FROM userlist WHERE user='".$_SERVER['PHP_AUTH_USER']."'";
$lst = @mysqli_query($query);

if (!$lst)
{
header("WWW-Authenticate: Basic realm=\'Admin Page\"");
header("HTTP/1.0 401 Unauthorized");
exit();
}

if (mysqli_num_rows($lst) == 0)
{
header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
header ("HTTP/1.0 401 Unauthorized");
exit();
}

$pass = @mysqli_fetch_array($lst);
if ($_SERVER['PHP_AUTH_PW']!= $pass['pass'])
{
header("WWW-Authenticate: Basic realm=\"Admin Page\"");
header("HTTP/1.0 401 Unauthorized");
exit();
}


}?>