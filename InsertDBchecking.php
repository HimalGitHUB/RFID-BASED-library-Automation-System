<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
      
        $indexno = $_POST['indexno'];
		$Bookid = $_POST['Bookid'];
		$Bookname = $_POST['Bookname'];
		$Author = $_POST['Author'];
		$Publisher = $_POST['Publisher'];
        $Category = $_POST['Category'];
        $Borrow_Date = $_POST['Borrow_Date'];
        $Due_Date = $_POST['Due_Date'];


        
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO exchange_details (indexno,Bookid,Bookname,Author,Publisher,Category,Borrow_Date,Due_Date) values(?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($indexno,$Bookid,$Bookname,$Author,$Publisher,$Category,$Borrow_Date,$Due_Date));
		Database::disconnect();
		header("Location:Check out and checking details.php");
    }
?>
