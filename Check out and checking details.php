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
			<li><a href="Borrow.php">Borrow registration</a></li>
			<li><a class="active" href="Check out and checking details.php">Check-in and Checkout details</a></li>
			
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>Borrow Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="Green" color="#FFFFFF">

                      <th>indexno</th>	
                      <th>Bookid</th>
                      <th>Bookname</th>
                      <th>Author</th>
                      <th>Publisher</th>
					  <th>Category</th>
					  <th>Borrow Date</th>
					  <th>Due Date</th>
                      
					

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM exchange_details ORDER BY Bookname ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['indexno'] . '</td>';
                            echo '<td>'. $row['Bookid'] . '</td>';
                            echo '<td>'. $row['Bookname']. '</td>';
                            echo '<td>'. $row['Author'] . '</td>';
                            echo '<td>'. $row['Publisher'] . '</td>';
							echo '<td>'. $row['Category'] . '</td>';
                            echo '<td>'. $row['Borrow_Date'] . '</td>';
                            echo '<td>'. $row['Due_Date'] . '</td>';

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