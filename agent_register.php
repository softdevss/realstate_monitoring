<?php

	
				if(isset($_POST['submit']))
							{
								$conn = mysqli_connect("localhost","root","","real") or die(mysqli_error($conn));
						
								$l_username = $_POST['username'];
								$email = $_POST['email'];
								$fName = $_POST['fname'];
								$phonenumber = $_POST['phone'];
								$gender = $_POST['gender'];
								$location = $_POST['location'];
								$password = md5($_POST['password']);
								
								
								
								
								
								$qr = "INSERT INTO agent (l_username, email,fName,phonenumber, gender,location,password) 
													VALUES ('$l_username','$email','$fName','$phonenumber','$gender','$location','$password')";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res>0){
									echo "<script type = \"text/javascript\">
											alert(\"agent Registered successfully\");
											window.location = (\"agent_reg.php\")
											</script>";
									}
								
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try again.\");
											window.location = (\"agent_reg.php\")
											</script>";
								}
							}
						?>