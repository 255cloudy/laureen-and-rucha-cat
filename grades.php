<!DOCTYPE html>
<html>
<head>
	<title>grades</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div >
		<div class="well col-md-offset-3">
			<div class="header-brand">
				<h4 class="hs">enter yor grades to finish the verification process</h4> 
				<hr>
			</div>
			<form class="inline-form" method = "GET" role="form">
				<div class="form-group">
					<label for="math">math</label>
					<input type="number" name="math">
				</div>
					<div class="form-group">
					<label for="english">English</label>
					<input type="number" name="eng">
				</div>
					<div class="form-group">
					<label for="kiswahili">kiswahil</label>
					<input type="number" name="kis">
				</div>	<div class="form-group">
					<label for="phyc">physics</label>
					<input type="number" name="phy">
				</div>	<div class="form-group">
					<label for="chemistry">chem</label>
					<input type="number" name="chem">
				</div>
					<div class="form-group">
					<label for="art">art</label>
					<input type="number" name="art">
				</div>
				<button type="submit" class="btn btn-primary">culculate</button>
				<?php
					$math = $_GET['math'];
					$eng = $_GET['eng'];
					$kis = $_GET['kis'];
					$phy = $_GET['phy'];
					$chem = $_GET['chem'];
					$art = $_GET['art'];
					$sum =$math+$eng+$kis+$phy+$chem+$art;
					$grade=$sum/6;

					echo "<br>"."the average of your subjects is:".$grade."yourgrade is:";
					 if ($grade>=90) {
  	# code...
  	echo "A";
  }
  elseif ($grade>=70) {
  	# code...
  	echo "B";
  }
  elseif ($grade>=60) {
   	# code...
   echo "C";
   } 
   elseif ($grade>=50) {
   	# code...
   	echo"D";
   }
  else {
  	# code...
  	echo "E";
  } 
				 ?>
				 
			</form>
		</div>
	</div>


</body>
</html>