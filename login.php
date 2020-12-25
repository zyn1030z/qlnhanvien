<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
	
	<!-- main -->
	<div class="main">
		<?php require 'connect.php'; ?>
		<!--signin-form-->
		<div class="w3"   style="margin-left: 211px; "	>
			<div class="signin-form profile">
				<h1>Login</h1>
				
				<div class="login-form">
					<form action="" method="post">
						<input type="text" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<div class="tp">
							<input type="submit" name="submit" value="LOGIN NOW">
						</div>
					</form>
				</div>
								<p><a href="register.php"> Don't have an account? Registerrr???</a></p>
			</div>
		</div>
		<?php 
		if(isset($_POST["submit"])){
			$email = $_POST["email"];
			$password = $_POST["password"];
			 $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
			 $query = mysqli_query($conn, $sql);
			 $row=mysqli_fetch_assoc($query);
			 if(mysqli_num_rows($query) == 0)
			 {
			 header("location: fail.php");
			 }
			 else {
				if($row["type"] == 1){
					$_SESSION['user'] = $email;
					header('location: '. 'admin/add.php');
				}
				else{
					$_SESSION['user'] = $email;
			 	header('location: '. 'admin/list.php');
				}

			 	
			 	
			 }

			}
		 ?>
		
		
		<div class="clear"></div>
		<!--//signin-form-->	
	</div>
					
</body>
</html>