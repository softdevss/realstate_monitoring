<html>
<body>
<?php
require_once 'book_House.php';
include 'includes/config.php';
<?php $sel = "SELECT * FROM agent where l_username='$_GET[agent]'";
						$rs = $connection->query($sel);
						$rws = $rs->fetch_assoc();
?>
?>
<br>
	<?php echo $rws['fName'];?>
	<br>
	<b>
	<?php echo $rws['phonenumber'];?>
	<b>
	<br>
	<?php echo $rws['email'];?>
	
	
	</body>
	</html>
