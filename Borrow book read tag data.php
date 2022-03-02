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
	$q->execute(array($Bookid));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
	
	$msg = null;
	if (null==$data['Bookname']) {
		$msg = "The BookID of your Card / KeyChain is not registered !!!";
		$data['Bookid']=$Bookid;
		$data['Bookname']="--------";
		$data['Author']="--------";
		$data['Publisher']="--------";
		$data['Category']="--------";
		
	
	} 
    
	else {
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
			<form class="form-horizontal" action="insertDBchecking.php" method="post" >
					<div class="control-group">

				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#10a0c5"><font  color="#FFFFFF">
						<b>Borrow registration</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">


                               <br>

                                  <div class="control-group">
						               <label class="control-label">indexno</label>

						                  <div class="controls">
							                    <input id="div_refresh"  name ="indexno" type="text"  placeholder="" required>
						                 </div>
					                  </div>

								<tr>

                                    <div class="control-group">
						            
						            <label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Bookid </label>
                                    <div class="controls"></td>
									<td style="font-weight:bold">:</td>
									<td align="left" > 
                                     
						          <input id="div_refresh"  name ="Bookid" type="text" value=" <?php echo $data['Bookid'] ;?>" placeholder="" required />
                                     
                                    </div>
					                </div> 

									</td>
									
								</tr>

								<tr bgcolor="#f2f2f2">
									<div class="control-group">
						            
						            <label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Bookname</label>
                                    <div class="controls"></td>	
									<td style="font-weight:bold">:</td>
									<td align="left">
									<input id="div_refresh"  name ="Bookname" type="text" value=" <?php echo $data['Bookname'] ;?>" placeholder="" required />
                                     
                                    </div>
					                </div> 

									</td>
									
								</tr>

								<tr bgcolor="#f2f2f2">
									<label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Author</label>
                                    <div class="controls"></td>	
									<td style="font-weight:bold">:</td>
									<td align="left">
									<input id="div_refresh"  name ="Author" type="text" value=" <?php echo $data['Author'] ;?>" placeholder="" required />
                                     
                                    </div>
					                </div> 

									</td>
								</tr>
								<tr>
									<label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Publisher</label>
                                    <div class="controls"></td>	
									<td style="font-weight:bold">:</td>
									<td align="left">
									<input id="div_refresh"  name ="Publisher" type="text" value=" <?php echo $data['Publisher'] ;?>" placeholder="" required />
                                     
                                    </div>
					                </div> 

									</td>
								</tr>


								<tr bgcolor="#f2f2f2">
									<label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Category</label>
                                    <div class="controls"></td>	
									<td style="font-weight:bold">:</td>
									<td align="left">
									<input id="div_refresh"  name ="Category" type="text" value=" <?php echo $data['Category'] ;?>" placeholder="" required />
                                     
                                    </div>
					                </div> 

									</td>
								</tr>



								<tr>
                                    <label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Borrow_Date</label>

									<div class="controls"></td>
									<td style="font-weight:bold">:</td>
                                    <td align="left">
                                    <input id="div_refresh"  name ="Borrow_Date" type="text" value=" <?php echo (date("Y/m/d"));?>" placeholder="" required />
                                    </div>
					                </div> 

									</td>
								</tr>


								<tr bgcolor="#f2f2f2">
									<label class="controls-label"> 
                                    <td width="113" align="left" class="lf">Due_Date</label>
                                    <div class="controls"></td>
									<td style="font-weight:bold">:</td>
									<td align="left">
                                     <input id="div_refresh"  name ="Due_Date" type="text" value="<?php echo (date("Y/m/d", strtotime((date("Y/m/d")) . "+2 week")));?>" placeholder="" required />
                                    </div>
					                </div> 

									</td>
								</tr>
                                   
                                 


									</table>
						</td>
					</tr>
				</table>


				<div class="form-actions">
						<button type="submit" class="btn btn-success">Submit</button>
                    </div>


			</form>
		</div>
		<p style="color:red;"><?php echo $msg;?></p>
	</body>
</html>