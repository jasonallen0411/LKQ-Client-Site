<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

<h1 id="header">Login</h1>


<div class="container">
	<div class="col">
		<form id="notLoggedIn">
				<div class="form-group row">
					<div id="notLoggedIn" class="col-sm-4">
					<input type="email" class="form-control" id="emailInput" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<div id="notLoggedIn" class="col-sm-4">
					<input type="password" class="form-control" id="passwordInput" placeholder="Password">
					</div>
				</div>
				<div class="form-group row">
					<div id="notLoggedIn" class="col-sm-4">
					<!-- <button id="modalLocationSearchBtn" type="button" class="btn">Register</button> -->
					<button id="loginBtn" type="button" class="btn logBtn">Log In</button><br>
					</div>
				</div>
  
		</form>

		<div id="loggedIn">
			<h1 class="loggedInText">Welcome</h1>
			<h2 class="loggedInText" id="userText"></h2>
			<div id="logoutBtn1" class="col-sm-10">
			<button id="logoutBtn" type="button" class="btn logBtn">Log Out</button>
			</div>
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- <script defer src="https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/4.8.1/firebase-auth.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script>
  // Your web app's Firebase configuration
  var config = {
    apiKey: "AIzaSyArDAjlBvJ0iAuqwggrfnf9ipO-SdOC-q8",
    authDomain: "lkqlogin.firebaseapp.com",
    databaseURL: "https://lkqlogin.firebaseio.com",
    projectId: "lkqlogin",
    storageBucket: "lkqlogin.appspot.com",
    messagingSenderId: "582789881524",
    appId: "1:582789881524:web:7254c1106834e31cab41e1",
    measurementId: "G-2M9PQ2DNCV"
  };
  // Initialize Firebase
  firebase.initializeApp(config);
</script>


<script src="scripts/index.js"></script>

</body>
</html>