<?php
session_start();
include '../includes/config.php';
$l_username = $_SESSION['l_username'];
$query1 = mysqli_query($connection, "SELECT * FROM agent WHERE l_username = '$l_username'");
$result1 = mysqli_fetch_array($query1);

$fName = $result1['fName'];
$phonenumber = $result1['phonenumber'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>agent Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
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
			Add New Property
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Property</h2>
					</div>
					
					<form action="add_house.php" method="post" enctype="multipart/form-data">
						
						<div class="form">
  						
								<p>
									
									<label>Property Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="House_type" required="required" />
								</p>
								
								<p>
									<span class="req">Property Image</span>
									<label>House Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required="required" />
								</p>
								<p>
									
									<label>Property Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required="required" />
								</p>
								<p>
									
									<label>Property Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required="required" />
								</p>
								<p>
									
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" required="required" />
								</p>
								<p>
									
									<label>Property Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity"required="required" />
								</p>	
								<p>
									
									<label>agent Name<span>(Required Field)</span></label>
									<input type="text" value="<?php echo $fName ?>"  readonly="readonly"accept=" " class="field size1" name="name"required="required" />
								</p>	
								<p>
									
									<label>agent Contact<span>(Required Field)</span></label>
									<input type="number" value="<?php echo $phonenumber ?>"  readonly="readonly" class="field size1" name="phone"required="required" />
								</p>	
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../house_images/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								
								
								
								$house_type = $_POST['House_type'];
								
								$rent_cost = $_POST['hire_cost'];
								$location = $_POST['location'];
								$location_description = $_POST['desc'];
								$max_capacity = $_POST['capacity'];
								$name = $_POST['name'];
								$phone = $_POST['phone'];
								
								
								$qr = "INSERT INTO houses (house_type,image,rent_cost,location,location_description,max_capacity,name, contact,status) 
													VALUES ('$house_type','$image','$rent_cost','$location','$location_description','$max_capacity','$name','$phone','Added')";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res>0){
									echo "<script type = \"text/javascript\">
											alert(\"Property added successfully\");
											window.location = (\"add_house.php\")
											</script>";
									}
								}
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"Property not added. Try again.\");
											window.location = (\"add_house.php\")
											</script>";
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