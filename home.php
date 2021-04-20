<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="" content="Accra Shopping Center">

		<title>Accra Shopping Center Home Page</title>
		<h1><br>
        Welcome <?php echo $_SESSION['username']; ?>
            Thank You For Logging In. Please Enjoy your day</h1>

            <style type="text/css">
                body{
                    background-image: url('background.jpg');
                    background-size: cover;
                    background-attachment: fixed;
                }
                
                </style>
            </head>  <body>
                <a href="logout.php">LOGOUT</a>
            </body>
            </html>
            