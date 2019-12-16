<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'LKQVehicleInventory';
    $db = new mysqli($servername, $username, $password, $dbname);

    if($db->connect_error){
        die("Connection failed" . $db->connect_error);
    }
?>

<?php
$sql      = "SELECT * FROM Vehicles";
$featured = $db->query($sql);

?>







<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Inventory</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/animate.css">
</head>
<body>


<?php
  include "partials/navbar.php";
  ?>

<?php
  include "partials/modal.php";
?>
<!-- <img id="HMenuBtn" data-toggle="modal" data-target="#LKQModalCenter" src="./images/HMenu2.png" alt="Hamburger Menu" /> -->

<div class="container">
	<div class="col">
		<div class="row">
			<h1 class="col-sm-12" id="header">Vehicle Inventory: Nashville</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
<?php
    while ($vehicle = mysqli_fetch_assoc($featured)):
?>


		<div class="card col-md-3 mt-4">
			<div style="height: 170px; overflow: hidden;">
				<img src="<?= $vehicle['Image']; ?>" alt="<?= $vehicle['Image']; ?>" class="card-img-top">
			</div>
				<div class="card-body">
					<h5 class="card-title">Year: <?= $vehicle['Year']; ?></h5>
					<h5 class="card-title">Make: <?= $vehicle['Make']; ?></h5>
					<h5 class="card-title">Model: <?= $vehicle['Model']; ?></h5>
					<h5 class="card-title">Available on: <?= $vehicle['Available on']; ?></h5>
				</div>
		</div>
	



<?php
  endwhile;
?>
	</div>
	
</div>

<?php
  include "partials/footer.php";
?>



<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/TweenMax.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/skrollr.min.js"></script>
<script src="scripts/index.js"></script>
</body>
</html>