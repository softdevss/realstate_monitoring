<?php 
   
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("includes/config.php");
	$id =$_SESSION['userid'];
	
	
	$result = mysqli_query($connection,"SELECT * FROM user WHERE user_id ='$id'")or die(mysqli_error($connection));
	$test = mysqli_fetch_array($result);
?>
<?php
			include('includes/config.php');	
			
						if(isset($_GET['id']) AND isset($_POST['save']))
						{
							
						   
						    //$id = $_GET['id'];
							include 'includes/config.php';
						    $name = $_POST['fname'];
							$houseid = $_POST['house'];				
							$location = $_POST['location'];
						
							$query1 = mysqli_query($connection,"SELECT * FROM userbook WHERE user_id =$id AND status='booked' ") or die(mysqli_error($connection));
							$result1 = mysqli_fetch_array($query1);
							

							if($result1)
							{
								?>
								<script>
									window.alert("You cant book now because You have a pending booking request.");
									window.location.href="index11.php";
								</script>
								<?php
							}
							else
							{
								$result = mysqli_query($connection,"INSERT INTO userbook (name,user_id,houseid,location,status)
							VALUES('$name','$id','$houseid','$location','booked')") or die(mysqli_error($connection));
							if($result)
							{
								$house_id = $_REQUEST['id'];
								$query=mysqli_query($connection,"UPDATE houses SET status='booked' WHERE house_id='$houseid'") or die(mysqli_error($connection));
							}
							if($query)
							{
								//$id=$_GET['id'];
								
								 ?>
								 
								 <script>
											window.alert("Successfully booked. \n We will contact you once your booking request is approved");
											window.location = "index11.php";
											</script>
											<?php
											
											
							} else{
								?>
								       <script>
										window.alert("Booking request failed. Try Again");
											window.location ="bookreq.php";
											</script>
											<?php
							}
							}
							
							
						}
						
					  ?>