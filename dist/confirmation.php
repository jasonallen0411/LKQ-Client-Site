

  <!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
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

<?php
  include "partials/modal2.php";
?>
<!-- <img id="HMenuBtn" data-toggle="modal" data-target="#LKQModalCenter" src="./images/HMenu2.png" alt="Hamburger Menu" /> -->

			<h1 id="header">Confirmation</h1>

            <?php
            $name = $_POST['firstname']." ".$_POST['lastname'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            // $headers = "MIME-Version: 1.0" . "\r\n";
            // $headers .= "Content-type:text/html;charset=UTF-8";
            // mail("jaallen@nossi.edu", $name, $message);
            mail($email, $subject, $message);
            ?>



            <h3 class="col-sm-12" id="confirmed">Thank you <?php echo $_POST['firstname']; ?> <?php echo $_POST['lastname']; ?>, the user at <?php echo $_POST['email']; ?> has been emailed. Thank you for contacting us!</h3>
            <div id="confirmedBtn1">
                <a id="confirmedBtn" href="index.php"><button class="btn" id="confirmedBtn">Back</button></a>
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