<?php
ob_start();
$value = $_POST['txtPassword'];
$ref = $_POST['ref'];
$goto = "list";

if ($value == "dropbox") {

setcookie("listCookie", "thecookie", time()+3600);  /* expire in 1 hour */
echo "success";

} else {
echo "you fool wrong password!";
}

 header("Location: http://iamtomcallahan.com/wp-content/themes/tc_custom/list.php");

?>