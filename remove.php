<?php 
ob_start();

$con=mysql_connect("tcdropbox.db.8816127.hostedresource.com","tcdropbox","PASSWORD","tcdropbox");


$hiddenx = "x";
$hidebydate = "$_POST[Xdate]";
 







if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "UPDATE pdf_content
        SET Hidden='x'
        WHERE ExtendedDate ='$hidebydate'";

mysql_select_db('tcdropbox');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($con);

echo $hidebydate;

header("Location: http://iamtomcallahan.com/wp-content/themes/tc_custom/list.php");

?>


