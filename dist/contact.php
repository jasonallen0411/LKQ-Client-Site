<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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

<h1 id="header">Contact</h1>





<div class="container">
  <div class="row">
    <div class="col">
		<h3 class="contactSubheader">Contact Us: Nashville</h3>
		<h5 class="contactSubheader">(800) 962- 2277</h5>
		<form action="confirmation.php" method="post" id="contactForm">
				<div class="row">
					<div class="col-sm-8">
					<input name="firstname" type="text" class="form-control contactFormInput" placeholder="First Name">
					</div>
					<div class="col-sm-8">
					<input name="lastname" type="text" class="form-control contactFormInput" placeholder="Last Name">
					</div>
					<div class="col-sm-8">
      				<input name="subject" type="text" class="form-control contactFormInput" placeholder="Subject">
    				</div>
					<div class="col-sm-8">
					<input type="text" class="form-control contactFormInput" placeholder="Phone">
					</div>
					<div class="col-sm-8">
					<input name="email" type="email" class="form-control contactFormInput" placeholder="Email">
					</div>
					<div class="col-sm-8">
					<textarea name="message" rows="4" cols="50" type="text" class="form-control contactFormInput" placeholder="Type your message..."></textarea>
					</div>
				</div>
				<button id="contactFormBtn" type="submit" class="btn col-sm-4">
  						Send
				</button>
		</form>
    </div>
    <div class="col">
		<h3 class="col-sm contactSubheader">Directions: Nashville</h3>
		<iframe class="col-sm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3219.4779488774498!2d-86.77511958489373!3d36.20357628007586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886467909888ef35%3A0x1dc91f932f947046!2sLKQ%20Pick%20Your%20Part%20-%20Nashville!5e0!3m2!1sen!2sus!4v1573760844964!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
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