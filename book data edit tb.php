<?php
    require 'database.php';
    $Bookid = null;
    if ( !empty($_GET['Bookid'])) {
        $Bookid = $_REQUEST['Bookid'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM book_details  where Bookid = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($Bookid));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
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
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Edit : TCC Project 4th Sem Project - Team System Trons</title>
		
	</head>
	
	<body>

		<h2 align="center">Technology Challenge Competition Project 4th Sem Project</h2>
		
		<div class="container">
     
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Edit User Data</h3>
					
				</div>
		 
				<form class="form-horizontal" action="book data edit tb.php?Bookid=<?php echo $Bookid?>" method="post">
					<div class="control-group">
						<label class="control-label">Bookid</label>
						<div class="controls">
							<input name="Bookid" type="text"  placeholder="" value="<?php echo $data['Bookid'];?>" readonly>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Bookname</label>
						<div class="controls">
							<input name="Bookname" type="text"  placeholder="" value="<?php echo $data['Bookname'];?>" required>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label">Author</label>
						<div class="controls">
							<input name="Author" type="text"  placeholder="" value="<?php echo $data['Author'];?>" required>
						</div>
					</div>
					

					<div class="control-group">
						<label class="control-label">Publisher</label>
						<div class="controls">
							<input name="Publisher" type="text"  placeholder="" value="<?php echo $data['Publisher'];?>" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Category</label>
						<div class="controls">
							<select name="Category" id="mySelect">

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
						<button type="submit" class="btn btn-success">Update</button>
						<a class="btn" href="book details.php">Back</a>
					</div>
				</form>
			</div>               
		</div> <!-- /container -->	
		
		
	</body>
</html>