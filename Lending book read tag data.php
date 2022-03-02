<?php
    require 'database.php';
    $Bookid = null;
    if ( !empty($_GET['Bookid'])) {
        $Bookid = $_REQUEST['Bookid'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM book_details where Bookid = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($Bookid ));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
	
	$msg = null;

	
    
	if ( null==$data)
     
	 {
		$msg = "The ID of your Card / KeyChain is not registered !!!";
		
		$data['Bookid']=$Bookid;
		$data['Bookname']="--------";
		$data['Author']="--------";
		$data['Publisher']="--------";
		$data['Category']="--------";
		$data['Borrow_Date']="--------";
        $data['Due_Date']="--------";
	} else {
		$msg = null;
	}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<style>
		td.lf {
			padding-left: 15px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
	</style>
</head>
 
	<body>	
		<div>
			<form>
				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#10a0c5"><font  color="#FFFFFF">
						<b>User Data</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">BookID</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Bookid'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Bookname</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Bookname'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Author</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Author'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Publisher</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Publisher'];?></td>
								</tr>

								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Due_Date</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo (date("Y/m/d"));?></td>
								</tr>

								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Lend_Date</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo (date("Y/m/d", strtotime((date("Y/m/d")) . "+2 week")));?></td>
								</tr>

								

							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p style="color:red;"><?php echo $msg;?></p>
	</body>
</html>