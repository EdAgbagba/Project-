<?php include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="" content="Accra Shopping Center">

		<style type="text/css">
		body{
			background-image: url('background.jpg');
			background-size: cover;
			background-attachment: fixed;
		}
		
		</style>

		<title>Accra Shopping Center LogIn Page</title>
		<h1>
			<center><b><i>ACCRA SHOPPING CENTER</i></b></h1></center>
			<br>
		<h2>
			<center>Welcome Dear Customer</center></h2>
		<h3>
			<center>Please Input Your Username And Password Below To Continue Shopping</center></h3>
	</head>
	<body><form action="validation.php" method="POST">
		<center><h4>
			<i>Enter Your Username :</i></h4>
			<input type="text" placeholder= "Username" required>
			<br>
			<h4>
				<i>Enter Your Password :</i></h4>
			<input type="Password" placeholder="Password" required>
			<br><button>Login</button>
			

		</center></form>
		<center><h5>No Account?
		<a href="index2.php" ><i>Sign up here</i></a>
		 </h5></center>
		<br><br><br>
		<h5>Need Help? Contact Us.<br>030 123 3532
			<br>Accra shopping center P.O. Box AF1234,Accra Ghana.
		</h5>
			
			<h5><b>Find Us on:</b>
				<br>
			<a href="https://en-gb.facebook.com/login/"target="blank"><img src="facebook.png" width="15"><i> Facebook</i></a>
			<br>
			<a href="https://www.instagram.com/accounts/login/"target="blank"><img src="instagram.png" width="15"><i>Instagram</i></a>
			<br>
			<a href="https://twitter.com/login "target="blank"><img src="twitter.png" width="15"><i>Twitter</i></a>
			</h5>
	</body>
	

</html>