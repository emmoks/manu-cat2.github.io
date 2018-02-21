<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<style type="text/css">
		body{background-image: url(
			images/dub.jpg);background-repeat: no-repeat;background-size: 100%;text-align: center;color: darkblue;}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<a href="#" class="navbar-brand">JIKAZE SCHOOL</a>
    		</div>
    		<ul class="nav navbar-nav">
    			<li><a href="homepage.php">homepage</a></li>
    			<li><a href="sign up.php">sign up</a></li>
    			<li><a href="grades.php">grade calculator</a></li>
    		</ul>
    	</nav>
	<div class="container-fluid">
		<h1>Sign up for grade assesment</h1>
	<form method="_GET">
	First name <span class="glyphicon glyphicon-user"></span>:<br>
	<input type="text" name="First name"  required="">
	<br>
	<br>
	Surname <span class="glyphicon glyphicon-user"></span>:<br>
	<input type="text" name="Surname" value="Enter surname" required="">
	<br>
	<br>
	stream:<br>
	<input type="text" name="Enter your stream"  required="">
	<br>
	<br>
	Year of study:<br>
	<input type="number" name="YOS"  required="">
	<br>
	<br>
	Password:<br>
	<input type="Password" name="psd" placeholder="
	Enter Password">
	<br>
	<br>
	Confirm Password:<br>
	<input type="Password" name="psdtwo" placeholder="Confirm Password">
	<br>
	<br>
	<button class="btn-success"><a href="grades.php" type="submit"></a>SUBMIT</button>
	<button class="btn-danger" type="reset">RESET</button>
    <?php 
       $ri=$_GET['psd'];
       $a=$_GET['psdtwo'];
        if ($ri===$a) {
        	# code...
        	echo "";
        } else {
        	# code...
        	echo "Password Mismatch";
        }
        
		 ?>
</form>


<a href="grades up.php"><p>Proceed to school grade calculator</p></a>
<div class="well well-sm">Moving forward with you</div>
</body>
</html>