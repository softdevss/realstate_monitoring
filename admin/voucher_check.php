<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToEdit(id){
			if(confirm("Are you sure you want to Edit this request?")){
				window.location.href ='edit1.php?id='+id;
			}
		}
		function sureToDelete(id){
			if(confirm("Are you sure you want to Delete this request?")){
				window.location.href ='delete1.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Requests
			<center><h1><font color="green"><a href="studes.php"><u><b>Voucher Check Details.</b></u></a></font></h1></center>
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Voucher Check Record</h2>
					</div>

                    <a href="add_voucher.php">Add new voucher</a>
				
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Bank Name</th>
					<th>Date Issue</th>
					<th>Checked Date</th>
					<th>Voucher no.</th>
					<th>Checked no.</th>
					<th>Particulars</th>
					<th>Remarks</th>          
				</tr>
			</thead>
			<tbody>

           <?php 
		   
			include "../includes/config.php";
			$query = "SELECT * FROM check ";
			$select_view = mysqli_query($connection, $query);
			
			while($row = mysqli_fetch_assoc($select_view)){
				
			$id         = $row['id'];
			$bankName    = $row['bank_name'];  
			$dateIssue     = $row['date_issue'];
			$checkedDate    = $row['checked_date'];
			$voucherNum      = $row['voucher_no'];          
			$checkNum     = $row['checked_number'];     
			$particular       = $row['particulars']; 
			$remarks       = $row['remarks'];      

			echo "<tr>";
				echo "<td>$id</td>";
				echo "<td>$bankName</td>";
				echo "<td>$dateIssue</td>";
				echo "<td>$checkedDate</td>";
				echo "<td>$voucherNum</td>";
				echo "<td>$checkNum</td>";
				echo "<td>$particular</td>";
				echo "<td>$remarks</td>";
				
			echo "<tr>";					
			}	

			
			?>
			</tbody>
			</table>
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> Real Estate Management System</span>
		<span class="right">
			Designed by Blair</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>