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


	<p style="margin-top:50px;" align="center"> Please enter a short description about your upload (must be PDF):</p>

		<form style="margin-top:-10px;" action="connect.php" method="post" form enctype="multipart/form-data">

		<div id="uploadform" style="width:47%; display:inline-block; line-height:2; ">
			Title:<br /> <input type="text" name="Title" style="width:200px;"><br />
			Description:<br /> <input type="text" name="Description" style="width:300px;"><br />
			File:<br /> <input type="file" name="File">
		</div>

			<div style="width:45%; display:inline-block; vertical-align:top; margin-top:55px;">
				<input class="button" type="submit"> 
			</div>

		</form>


	</div>


</body>
</html>
