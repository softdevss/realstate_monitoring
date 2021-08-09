<?php 
	require("includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>real estate management system.</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="css/stylingsheet.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
	
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">RCY REAL HOMES</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">LANDS</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="" data-toggle="modal" data-target="#exampleModal">SIGN IN</a></li>
      </ul>
    </nav>

	

	
	<div class="grid">
	<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM properties";
						$rs = $connection->query($sel);
						while($rws = $rs->fetch_assoc()){
							
			?>
	
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="house_images/<?php echo $rws['image'];?>" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header"><?php echo 'Property Type: '.$rws['house_type'];?></h1>
			<p><?php echo ''.$rws['rent_cost'];?></p>
			
			<br>
			<span><?php echo $rws['location'];?></span>
            <p class="card-text">
			<?php echo 'Property Description:</font> '.$rws['location_description'];?>
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
	  <?php
				}
			?>
    </div>
	
	
	
</body>
</html>