<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'project');
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];

$s = "select * from usertable where username = '$username'";
$result = mysqli_query($con,$s);
//$num = mysqli_num_row($result);
/*if($num ==1 ){

    echo "Username Taken";
}
else{
    $reg=" insert into usertable(username,firstname,lastname,password,email,address,number) values('$username','$firstname','$lastname','$password','$email','$address','$number')";
    mysqli_query($con,$reg);
   
       
   // echo" Registration successful" ;
}*/
if(!empty($username))
{
    $reg=" insert into usertable(username,firstname,lastname,password,email,address,number) values('$username','$firstname','$lastname','$password','$email','$address','$number')";
    mysqli_query($con,$reg);
    header("Location: index.php");
    die;
}
?>