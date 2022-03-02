<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
      
		$id = $_POST['id'];
		$indexno = $_POST['indexno'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
        $emailaddress = $_POST['emailaddress'];
        $batch = $_POST['batch'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_input_data (id,indexno,name,gender,emailaddress,batch) values(? , ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($id,$indexno,$name,$gender,$emailaddress,$batch));
		Database::disconnect();
		header("Location: user data.php");
    }
?>