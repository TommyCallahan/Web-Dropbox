<?php 
$con=mysql_connect("localhost","admin_brunswick","pr0p3l");


$hiddenx = "x";
$hidebydate = "$_POST[Xdate]";
 







if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "UPDATE pdf_content
        SET Hidden=''
        WHERE Hidden ='x'";

mysql_select_db('admin_brunswick_propel');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($con);

echo $hidebydate;

header("Location: /list.php");

?>


