<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register Login Widget Flat Responsive Widget Template :: w3layouts</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Register Login Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login Signup Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->

</head>
<body>
	<?php require 'connect.php'; ?>

	<!-- main -->
	<div class="main" style="margin-top: 15px;">
		
		<div class="agile" style="margin-left: 211px; float: left;">
			<div class="signin-form profile">
		<h1>REGISTER</h1>
				
				<div class="login-form">
					<form action="" method="post">
						<input type="text" name="username" placeholder="Username" required="">
						<input type="text" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						
						<input type="text" name="firstname" placeholder="Firstname" required="">
						<input type="text" name="lastname" placeholder="Lastname" required="">
						<input type="text" name="phone" placeholder="Phone" required="">
						<input type="text" name="address" placeholder="Address" required="">
						<h5 style="color: white;">Last login</h5>
						<input type="date" name="lastlogin" placeholder="Lastlogin" required="">
						<input type="submit" name="submit" value="REGISTER">
					</form>
				</div>
				<p><a href="login.php">Loginnnn</a></p>
			</div>
		</div>
		<div class="clear"></div>
		<?php 
		session_start();
		session_destroy(); ?>
		<?php 

if(isset($_POST["submit"])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["phone"]; 
	$address = $_POST["address"];
	$lastlogin = $_POST["lastlogin"];
		
	
		$sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `phone`, `lastlogin`) VALUES (NULL, '$username', '$email', '$password', '$firstname', '$lastname', '$phone', '$lastlogin')";
		 mysqli_query($conn, $sql);
		header('Location: login.php');



	}
 ?>
		<!--//signin-form-->	
	</div>
	<div class="copyright">
		<p><a href="login.php" target="_blank" ></a></p>
	</div>					
</body>
</html>