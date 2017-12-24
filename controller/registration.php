<?php
require_once "validation.php";

$email = htmlentities(trim($_REQUEST['email']), ENT_QUOTES);
$fname = htmlentities(trim($_REQUEST['fname']), ENT_QUOTES);
$lname = htmlentities(trim($_REQUEST['lname']), ENT_QUOTES);
$uname = htmlentities(trim($_REQUEST['uname']), ENT_QUOTES);
$pass1 = htmlentities(trim($_REQUEST['pass1']), ENT_QUOTES);
$pass2 = htmlentities(trim($_REQUEST['pass2']), ENT_QUOTES);

$fn = false; $ln = false; $un = false; $em = false; $p1 = false; $p2 = false;

if(!empty($fname)){
	if(isValidName($fname)){
		$fn = true;
	}
	
	else echo "Invalid First Name";
}

if(!empty($lname)){
	if(isValidName($lname)){
		$ln = true;
	}
	
	else echo "Invalid Last Name";
}

if(!empty($email)){
	if(isValidEmail($email)){
		$em = true;
	}
	
	else echo "Invalid Email Address";
}

if(!empty($uname)){
	if(isValidUserName($uname)){
		$un = true;
	}
	
	else echo "Invalid User name or Its Taken";
}

if(!empty($pass1)){
	if(isValidPassword($fname)){
		$p1 = true;
	}
	
	else echo "Password should be at least 6 characters long and contain at least 1 special character";
}

if(!empty($pass2)){
	if($pass1 != $pass2){
		echo "Passwords didn't matched";
	}
	
	else{
		$p2 = true;
	}
}

if($fn == true and $ln == true and $em == true and $un == true and $p1 == true and $p2 == true){
	//
	echo ' <script> alert("Registration Successful") </script>';
	header("location: ../index.php");
}

?>