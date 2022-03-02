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
			padding: 0;
			overflow: hidden;
			background-color: #05233D;
			width: 40%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 40px 40px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #09C77A;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>User Data :  TCC Project 4th Sem Project - Team System Trons</title>
	</head>
	
	<body>
		<h2>Technology Challenge Competition Project 4th Sem Project <br>---Team System Trons---</h2>
		<ul class="topnav">
			<li><a href="adminhome.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>User Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="Green" color="#FFFFFF">
                      <th>id</th>
                      <th>Indexno</th>
                      <th>Name</th>
					  <th>Gender</th>
					  <th>Email Address</th>
                      <th>Batch</th>
					  <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM table_input_data ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['indexno']  . '</td>';
                            echo '<td>'. $row['name']. '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
							echo '<td>'. $row['emailaddress'] . '</td>';
							echo '<td>'. $row['batch'] . '</td>';

							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>