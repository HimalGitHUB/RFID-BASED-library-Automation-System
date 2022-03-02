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
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family:Arial ;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {

			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #05233D;

			width:40% ;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 40px 40px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #09C77A ;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Registration :- TCC Project 4th Sem Project - Team System Trons</title>
	</head>
	
	<body>

		<h2 align="center">Technology Challenge Competition Project 4th Sem Project <br>---Team System Trons---</h2>
		<ul class="topnav">
			<li><a href="adminhome.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">indexno</label>
						<div class="controls">
							<input id="div_refresh" name ="indexno" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Rather not to say">Rather not to say</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="emailaddress" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"> Batch</label>
						
						<div class="controls">
							
							<select name="batch">
								<option value="6 th Batch">6 th Batch</option>
								<option value="7 th Batch">7 th Batch</option>
								<option value="8 th Batch">8 th 
								Batch</option>
								<option value="9 th Batch">9 th 
								Batch</option>
							</select>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Submit</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>