<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="bgdes">
<div class="container-fluid" id="">
	<div class="well col-md-offset-3 ">
	<div class="center-block img" id="images">
		<img src="pictures/reg.png" width="100px" height="100px" class="img-circle">
	</div>

	<div class="container-fluid">
		 <h3>register for this years intake</h3>
	</div>
	 
		<form role="form" class="inline-form" method="GET">
			<div class="form-group">
				<label for="fname">first name:</label>
				<input type="text" name="firstname" placeholder="enter firstname" >
			</div>
			<div class="form-group">
				<label for="sname">second name:</label>
				<input type="text" name="sname" placeholder="enter-second name">
			</div>
			<div class="form-group">
				<label for="fsch">former school:</label>
				<input type="text" name="fsch" placeholder="enter former school">
			</div>
			<label for="sex">Sex:</label><input type="radio" name="sex">male <input type="radio" name="sex">female
			<div class="form-group">
				<label for="pass">password</label>
				<input type="password" name="pas"><br>
				<?php 
				$pas=0;
				$pas=$_GET['pas'];
				echo $pas;
				if (strlen($pas)<=6) {
					# code...
					echo "password too short";
				}
				echo strlen($pas);

				 ?>
			</div>
			<div class="form-group">
				<label for="confpas">confirm password</label>
				<input type="password" name="confpass">
				<?php
				$cofpas=0;
				$cofpas=$_GET['confpass'];
				echo $cofpas;
				if ($cofpas==$pas) {
				  	# code...
				  	echo "passwords do not match";
				  }  
				 ?>
				 <br><button type="submit" class="btn btn-info btn-lg btn-block">submit</button><br><br>
				 <a href="login.php" class="pull-left">log in using existin account</a>
			
			</div>
			
			
		</form>
		
	</div>

</div>
</body>
</html>