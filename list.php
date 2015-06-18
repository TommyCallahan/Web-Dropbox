<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tom's Dropbox</title>
<link rel="stylesheet" type="text/css" href="styled.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


</head>

<body>
<div id="topbg">
</div>

<div id="logbox">
<div id="logboxtopbg">&nbsp;<a href="dropbox.html" id="home">Tom's Dropbox</a>
<a href="dropbox.html" id="logo">Tom's Dropbox</a>
</div>



<?php

$con=mysqli_connect("tcdropbox.db.8816127.hostedresource.com","tcdropbox","NYkn1cks2@","tcdropbox");
		
		$result = mysqli_query($con,"SELECT * FROM pdf_content ORDER BY ExtendedDate DESC");
			
		while($row = mysqli_fetch_array($result))
		  {
		 if ($row['Hidden'] != 'x') {	  
			  
	      echo "<div class='individual'>";		  
		  echo "<span class='titlestyle'>" . $row['Title'] . "</span>" . "<span class='datestyle'>" . $row['Date'] . "</span>" . "<br />";
		  echo "<span class='descriptionstyle'>" . "<p>" . $row['Description']  . "</p>" . "</span>" . "<br />";
		  echo '<span class="filelink">' . '<a href="' . "img/" . $row['File'] . '">Download This File</a>' . '</span>';
		  echo "<form method='post' action='remove.php'>" . "<input type='hidden' name='Xdate' value='" . $row["ExtendedDate"] . "'/>" . "<input type='image' src='x.png' alt='Delete' title='Delete' style='position:absolute;top:10px;right:10px;'/>" . "</form>";
		  echo "</div>";	
		  }	
}



?>



</div>


</div>


</body>
</html>
