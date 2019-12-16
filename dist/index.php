<!DOCTYPE html>
<html>
<head>
	<title>LKQ Client Site</title>
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

<!-- <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="width: 400px; height:400px; margin: 0 auto">
  <ol class="carousel-indicators">
    <li class="carousel-indicators2" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li class="carousel-indicators2" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="carousel-indicators2" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img id="slide1" src="./images/2005NissanAltima.png" width="300px" height="300px" class="d-block" alt="">
    </div>
    <div class="carousel-item">
    <img id="slide2" src="./images/2005FordMustang.png" width="300px" height="300px" class="d-block" alt="">
    </div>
    <div class="carousel-item">
    <img id="slide3" src="./images/2003FordRanger.png" width="300px" height="300px" class="d-block" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

<img id="enginePic" src="./images/enginePic.jpg" alt="car engine" />
<div class="homeHeader">
  <h1 id="headline">LKQ Pick Your Part - Nashville<br>Thousands of Parts, One Location</h1>
  <a href="partSearch.php"><button class="btn" id="jumbotronBtn">Click here to see our selection!</button></a>
</div>

<div class="container">
	<div class="col">
		<div class="row">
			<h2 class="col-sm-12" id="subheader">Quality Parts</h2>

			<p class="col-sm-12" id="homeText">
				LKQ Pick Your Part - Nashville has a salvage yard with 1400+ cars and trucks available for you to find 
				the auto parts you need. With new vehicles being purchased and set every single day, there is always 
				fresh inventory to pull auto parts from. LKQ Pick Your Part - Nashville’s everyday low prices and 
				30-Day MONEY BACK guarantee on every single auto part sold, gives you the confidence that you can 
				save money and be worry-free about your purchase.
			</p>
		</div>
	</div>
</div>

<?php
  include "partials/footer.php";
?>




<script type="text/javascript" src="http://www.carqueryapi.com/js/jquery.min.js"></script>
<script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>
<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/TweenMax.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/skrollr.min.js"></script>
<script src="scripts/index.js"></script>
</body>
</html>