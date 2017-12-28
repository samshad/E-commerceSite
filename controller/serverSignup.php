<?php
require_once "session.php";
require_once "validation.php";

$email = ""; $fname = ""; $lname = ""; $uname = ""; $pass1 = ""; $pass2 = "";

if(isset($_REQUEST['email'])) $email = htmlentities(trim($_REQUEST['email']), ENT_QUOTES);
if(isset($_REQUEST['fname'])) $fname = htmlentities(trim($_REQUEST['fname']), ENT_QUOTES);
if(isset($_REQUEST['lname'])) $lname = htmlentities(trim($_REQUEST['lname']), ENT_QUOTES);
if(isset($_REQUEST['uname'])) $uname = htmlentities(trim($_REQUEST['uname']), ENT_QUOTES);
if(isset($_REQUEST['pass1'])) $pass1 = htmlentities(trim($_REQUEST['pass1']), ENT_QUOTES);
if(isset($_REQUEST['pass2'])) $pass2 = htmlentities(trim($_REQUEST['pass2']), ENT_QUOTES);

$fn = false; $ln = false; $un = false; $em = false; $p1 = false; $p2 = false;

if(!empty($fname)){
	if(isValidName($fname)){
		$fn = true;
	}
	else{
		$fn = false;
		header("location: ../signup.php?er=Invalid First Name");
		//echo "Invalid First Name";
	}
}

if(!empty($lname)){
	if(isValidName($lname)){
		$ln = true;
	}
	else{
		$ln = false;
		header("location: ../signup.php?er=Invalid Last Name");
		//echo "Invalid Last Name";
	}
}

if(!empty($email)){
	if(isValidEmail($email)){
		$em = true;
		//echo "";
	}
	else{
		$em = false;
		header("location: ../signup.php?er=Invalid Email Address or Already Registered");
		//echo "Invalid Email Address or Already Registered";
	}
}

if(!empty($uname)){
	if(isValidUserName($uname)){
		$un = true;
	}
	else{
		$un = false;
		header("location: ../signup.php?er=Invalid User name or Its Taken");
		//echo "Invalid User name or Its Taken";
	}
}

if(!empty($pass1)){
	if(isValidPassword($pass1)){
		$p1 = true;
	}
	else{
		$p1 = false;
		header("location: ../signup.php?er=Password should be at least 6 characters long and contain at least 1 special character");
		//echo "Password should be at least 6 characters long and contain at least 1 special character";
	}
}

if(!empty($pass2)){
	if($pass1 != $pass2){
		$p2 = false;
		header("location: ../signup.php?er=Passwords didn't matched");
		//echo "Passwords didn't matched";
	}
	
	else{
		$p2 = true;
	}
}

if($fn == true and $ln == true and $em == true and $un == true and $p1 == true and $p2 == true){
	$customer['fname'] = $fname;
	$customer['lname'] = $lname;
	$customer['email'] = $email;
	$customer['uname'] = $uname;
	$customer['pass'] = $pass1;
	$customer['doj'] = date("d.m.Y");
	
	if(addCustomer($customer)){
		echo '<script> alert("Registration Successful");
					location.replace("../index.php"); </script>';
	}
	else{
		header("location: ../signup.php?er=Required all fields");
	}
}

?>