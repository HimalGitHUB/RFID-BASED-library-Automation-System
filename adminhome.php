<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			
            display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;

			margin: auto;
			padding: 0%;
			overflow: hidden;
			background-color: #05233D;
			width: 35%;
		}

		ul.topnav li {float: center;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 40px 50px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #09C77A;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>

		AdminHome : TCC Project 4th Sem Project -
		Team System Trons</title>
	</head>
	
	<body>


		<div style="background-image: url('wallpaper.png');">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 style= "color:white;"> Welcome to Library Autometed System With RFID </h1> <hr>
		<h2 style= "color:white; font-size: 32px;">Technology Challenge Competition Project 4th Sem Project <br> <br>---Team System Trons---</h2> <br> <br>
		<ul class="topnav">
			
			<li><h4><a href="borrow.php"><b>Borrow</h4></b></a></li>
			<hr>
			<li><h4><a href="Lending.php"><b>Lending</h4></a></b></li>
			<hr>
				<li><h4><a href="user data.php"><b>User Details</h4></a></b></li>
				<hr>
				<li><h4><a href="book details.php"><b>Book Details</h4></a></b></li>
				

			</ul>
		<br>
		<hr>
		<br>
		<h3 style= "color:white;"><marquee> - GROUP PROJECT BY - 2024 SLTC STUDENTS - School of Computing and IT - Sri Lanka Technological Campus</marquee>
		</h3>
		<hr>


		
		<img src="system tron.png" alt="" style="width:60%;"><br>
		<img src="system tron2.png" alt="" style="width:60%;">
		<br>
		<br>   
<


	</body>
</html>