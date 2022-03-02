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
			padding: 40px 60px;
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
			
			<li><a href="book details.php">Book details</a></li>
			<li><a class="active" href="Book-registration.php">Add a Book </a></li>
		</ul>


		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDBbooks.php" method="post" >

					<div class="control-group">
						<label class="control-label">Bookid</label>
						<div class="controls">
							<textarea name="Bookid" id="getUID" placeholder="Please Scan your Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Bookname</label>
						<div class="controls">
							<input id="div_refresh" name="Bookname" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Author</label>
						<div class="controls">
							<input id="div_refresh" name="Author" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Publisher</label>
						<div class="controls">
							<input name="Publisher" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"> Category</label>
						
						<div class="controls">
							
							<select name="Category">
								<option value="IT and Computing">IT and Computing </option>
								<option value="Business Management">Business Management</option>
								<option value="Technology">Technology</option>
								<option value="Engineering">Engineering</option>
								<option value="Agriculture">Agriculture</option>
								<option value="TextBooks">TextBooks</option>

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