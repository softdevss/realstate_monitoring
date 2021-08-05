
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
	<style type="text/css">
		.blairman
		{
			float:right;
		}
	</style>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Voucher
		</div>
		
		<br />
			<div class="blairman">
						<a href="view_agents.php"><buttton><font color="blue"><b>VIEW agentS</b></font></buttton></a>
					</div>
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
			
				<div class="box">
					<div class="box-head">
						<h2>Add New voucher</h2>

					</div>
					
					<form action="add_voucher.php" method="post" enctype="multipart/form-data">
						<div class="form">
							<p>
								<label>Bank Name<span>(Required Field)</span></label>
								<input type="text" class="field size1" name="bank" required />
							</p>

							<p>
								<label for="event_date">Date Issue</label>
								<input type="date" class="form-control" name="dateIssue">
							</p>

							<p>
								<label for="event_date">Checked Date</label>
								<input type="date" class="form-control" name="checkDate">
							</p>

							<p>
								<label>Voucher Number<span>(Required Field)</span></label>
								<input type="text" class="field size1" name="voucher" required />
							</p>

							<p>
								<label>Checkerd Number<span>(Required Field)</span></label>
								<input type="text" class="field size1" name="checkNum" required />
							</p>

							<p>
								<label>Particulars<span>(Required Field)</span></label>
								<input type="text" class="field size1" name="particular" required />
							</p>

							<p>
								<label>Remarks <span>(Required Field)</span></label>
								<input type="text" class="field size1" name="remarks" required />
							</p>		
						</div>
						
						<div class="buttons">
							<input type="submit" class="button" value="submit" name="submit" />
						</div>
					</form>
					<?php

					include "../includes/config.php";

					if(isset($_POST['submit'])){

							$id            = $_POST['id']??"";
							$bank 		   = $_POST['bank'];
							$dateissue     = $_POST['dateIssue'];
							$checkdate 	   = $_POST['checkDate'];
							$voucher 	   = $_POST['voucher'];
							$checkNum	   = $_POST['checkNum'];
							$particular    = $_POST['particular'];
							$remarks 	   = $_POST['remarks'];
																																			
				$query = " INSERT INTO `check`(`id`, `bank_name`, `date_issue`, `checked_date`, `voucher_no`, `checked_number`, `particulars`, `remarks`) VALUES ('[$id]','[$bank]','[$dateissue]','[$checkdate]','[$voucher]','[$checkNum]','[$particular]','[$remarks]') ";

					$create_voucher_query = mysqli_query($connection, $query);

					if(!$create_voucher_query){

						die('QUERY FAILED' . mysqli_error($connection));
					}
					
				}
			?>
				</div>

			</div>
			
			<div id="sidebar">
				
				
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> Mount Kenya Real Estate Management</span>
		<span class="right">
			Designed by Blair</a>
		</span>
	</div>
</div>
	
</body>
</html>