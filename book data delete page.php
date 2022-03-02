<?php
    require 'database.php';
    $Bookid = 0;
     
    if ( !empty($_GET['Bookid'])) {
        $Bookid = $_REQUEST['Bookid'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $Bookid = $_POST['Bookid'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM book_details  WHERE Bookid = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($Bookid));
        Database::disconnect();
        header("Location:book details.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<title>Delete : TCC Project 4th Sem Project - Team System Trons</title>
</head>
 
<body>
	<h2 align="center">Technology Challenge Competition Project 4th Sem Project</h2>

    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h3 align="center">Delete User</h3>
			</div>

			<form class="form-horizontal" action="book data delete page.php" method="post">
				<input type="hidden" name="Bookid" value="<?php echo $Bookid;?>"/>
				<p class="alert alert-error">Are you sure to delete ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Yes</button>
					<a class="btn" href="book details.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>