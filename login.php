<!DOCTYPE html>
<html>
<head>
	<title>student login</title>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="bgdes">
	
<div class="container col-md-offset-3">
	<div class="well">
		<div class="img">
		<img src="pictures/images.png" class="img-circle " width="100px" height="100px">
		</div>
		<div class="container-fluid">
			<h3 class="hs">ENTER YOUR LOGIN DETAILS </h3>
		</div>
		<hr>
		<div class="clearfix"></div>
		<form role="form" class="inline-form" method="GET">
		
		<div class="form-group">
			<input type="text"  name="name" placeholder="enter your name">
		</div>
		<div class="form-group">
			<input type="password" name="admission" placeholder="enter your admission number">
		</div>
		
		<button class="btn btn-success btn-block" name="button">log in</button>
		<?php 
		$button = $_GET['button'];
		if ($button==true) {
			# code...
			href("grades.php");
		}
		 ?>
	</form>
	</div>
	
</div>
</body>
</html>