<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
      
		$Bookid = $_POST['Bookid'];
		$Bookname = $_POST['Bookname'];
		$Author = $_POST['Author'];
		$Publisher = $_POST['Publisher'];
        $Category = $_POST['Category'];
        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO book_details (Bookid,Bookname,Author,Publisher,Category) values(?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Bookid,$Bookname,$Author,$Publisher,$Category));
		Database::disconnect();
		header("Location:book details.php");
    }
?>