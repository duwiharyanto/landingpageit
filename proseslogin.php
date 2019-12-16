<?php 
session_start();
$defaultemail='itsuportrsuii@gmail.com';
$defaultpassword='r5u11bantul;';
$username = $_POST['email'];
$password = $_POST['password'];
if(($username==$defaultemail) && ($password==$defaultpassword)){
	
	$_SESSION['username'] = $username;
	$_SESSION['statuslogin'] = true;
	header("location:_content/index.php");
}else{
	$_SESSION['error'] = true;
	header("location:index.php");	
	
}

?>