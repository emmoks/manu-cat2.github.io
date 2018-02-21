<!DOCTYPE html>
<html>
<head>
	<title>GRADE CALCULATIONS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
  
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<h2>GRADE CALCULATOR</h2>
<body style="text-align: center; background-image: url(Images/school.jpg);background-repeat:no-repeat;background-size: 100%;text-align: center;color:darkblue;">
	<div class="container">
		
	<form method="_GET">
		Maths:<br>
		<input class="form-control" type="text" name="mao" placeholder="Enter  score" required="">
		<br>
		English:<br>
		<input class="form-control" type="text" name="ngoso" placeholder="Enter score" required="">
		<br>
		Kiswahili:<br>
		<input class="form-control" type="text" name="swa" placeholder="Enter  score" required="">
		<br>
		Chemistry:<br>
		<input class="form-control" type="text" name="chem" placeholder="Enter  score" required="">
		<br>
		Physics:<br>
		<input class="form-control" type="text" name="phyc" placeholder="Enter  score" required="">
		<br>
		History:<br>
		<input class="form-control" type="text" name="histo" placeholder="Enter  score" required="">
		<br>
<br>
<br>
<button class="btn-success" type="submit">SUBMIT</button>
<button class="btn-danger" type="reset">RESET</button>
<?php 
$Maths=$_GET['mao'];
$English=$_GET['ngoso'];
$Kiswahili=$_GET['swa'];
$Chemistry=$_GET['chem'];
$Physics=$_GET['phyc'];
$History=$_GET['histo'];

$total=$Maths+$English+$Kiswahili+$Chemistry+$Physics+$History;
$meanscore=$total/6;

if (isset($_GET['grade']))	 {
	# code...

	$grade=$_GET['grade'];
} 

if ($meanscore>=90) {
 	# code...
 	echo "<strong>You scored grade A</strong>";

 } 
elseif ($meanscore>=80) {
	# code...
	echo " <strong>You scored grade A-</strong>";
}

elseif ($meanscore>=70) {
	# code...
	echo "<strong>You Scored grade B+</strong>";

}

elseif($meanscore>=60) {
	# code...
	echo "<strong>You scored grade B</strong>";

}

elseif($meanscore>=50) {
	# code...

	echo "<strong> You scored grade B-</strong>";

}

elseif ($meanscore>=40) {
	# code...
	echo "<strong>You scored grade C</strong>";
}



 else {

 	# code...
 	echo "Work Harder next Time";

 }

 ?>



	</form>

</div>
</body>
</html>