<?php
require_once "session.php";
require_once "validation.php";

$email = ""; $fname = ""; $lname = ""; $gender = ""; $mobile = ""; $address = ""; $dob = "";

if(isset($_REQUEST['email'])) $email = htmlentities(trim($_REQUEST['email']), ENT_QUOTES);
if(isset($_REQUEST['fname'])) $fname = htmlentities(trim($_REQUEST['fname']), ENT_QUOTES);
if(isset($_REQUEST['lname'])) $lname = htmlentities(trim($_REQUEST['lname']), ENT_QUOTES);
if(isset($_REQUEST['mobile'])) $mobile = htmlentities(trim($_REQUEST['mobile']), ENT_QUOTES);
if(isset($_REQUEST['dob'])) $dob = htmlentities(trim($_REQUEST['dob']), ENT_QUOTES);
if(isset($_REQUEST['gender'])) $gender = htmlentities(trim($_REQUEST['gender']), ENT_QUOTES);

$fn = false; $ln = false; $em = false; $m = false; $d = false; $g = false;

if(!empty($fname)){
	if(isValidName($fname)){
		$fn = true;
	}
	else{
		$fn = false;
		header("location: ../editProfile.php?er=Invalid First Name");
		//echo "Invalid First Name";
	}
}

if(!empty($lname)){
	if(isValidName($lname)){
		$ln = true;
	}
	else{
		$ln = false;
		header("location: ../editProfile.php?er=Invalid Last Name");
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
		header("location: ../editProfile.php?er=Invalid Email Address or Already Registered");
		//echo "Invalid Email Address or Already Registered";
	}
}

if(!empty($mobile)){
	if(isValidMobile($mobile)){
		$m = true;
	}
	else{
		$m = false;
		header("location: ../editProfile.php?er=Invalid Mobile Number");
		//echo "Invalid User name or Its Taken";
	}
}

if(!empty($dob)){
	if(isValidDOB($dob)){
		$d = true;
	}
	
	else{
		header("location: ../editProfile.php?er=Insert valid birth date");
		//echo "Passwords didn't matched";
	}
}

if(!empty($dob)){
	if(isValidDOB($dob)){
		$d = true;
	}
	
	else{
		header("location: ../editProfile.php?er=Insert valid birth date");
		//echo "Passwords didn't matched";
	}
}

function updateDOB($dob){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'dob' => $dob );
	
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