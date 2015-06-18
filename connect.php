<?php 
$con=mysqli_connect("tcdropbox.db.8816127.hostedresource.com","tcdropbox","PASSWORD","tcdropbox");

if (mysqli_connect_errno())
  {
  echo "Did not connect to DB: " . mysqli_connect_error();
  }  
 else { echo "";
 }
	 
 $thefile = basename( $_FILES['File']['name']);
 $thedescription = "$_POST[Description]";
 $thetitle = "$_POST[Title]";
 $thedate = date("m.d.y");
 $theextendeddate = date("m.d.y-h:i:s");


 if (strpos($thefile,'pdf') !== false) {


function sanitizeFilename($f) {

 $replace_chars = array(
     'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
     'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
     'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
     'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
     'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
     'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
     'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
 );
 $f = strtr($f, $replace_chars);
 $f = preg_replace(array('/[\&]/', '/[\@]/', '/[\#]/'), array('-and-', '-at-', '-number-'), $f);
 $f = preg_replace('/[^(\x20-\x7F)]*/','', $f); 
 $f = str_replace(' ', '-', $f);
 $f = str_replace('\'', '', $f); 
 $f = preg_replace('/[^\w\-\.]+/', '', $f); 
 $f = preg_replace('/[\-]+/', '-', $f); 
 return strtolower($f);
}

$str = basename( $_FILES["File"]["name"]);
$newstr =  sanitizeFilename($str);

 
 
mysqli_query($con,"INSERT INTO pdf_content (File, Title, Description, Date, ExtendedDate)
VALUES ('$newstr', '$thetitle', '$thedescription', '$thedate', '$theextendeddate')"); 


$target_path = "img/";

$target_path = $target_path . $newstr; 

if(move_uploaded_file($_FILES['File']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['File']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";

  }
  echo "<a href='$target_path'>" . "Download This File" . "</a>";




mysqli_close($con);
?>

<script type="text/javascript">
<!--
window.location = "http://iamtomcallahan.com/wp-content/themes/tc_custom/list.php"
//-->
</script>


<?php }

else
{ echo "The file you selected was not a PDF, Please try again.";
}
?>