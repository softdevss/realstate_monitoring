<?php
 if(isset($_POST['login'])){
include 'includes/config.php';

$l_username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM agent where l_username='$l_username' and password='$password'";
$rs =mysqli_query($connection,$sql) or die(mysqli_error($connection));
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();
		if($num > 0)		{ 
	session_start();
	$_SESSION['l_username']= $l_username;
echo "<script type = \"text/javascript\">
	alert(\"Login Successful.................\");
	window.location = (\"agent/index.php\")
	</script>";
    }
 else {
	 ?>
    <script>
	window.alert("Account not found in the database");
	window.location.href="agentlogin.php";
	</script>
	<?php
}
} ?>