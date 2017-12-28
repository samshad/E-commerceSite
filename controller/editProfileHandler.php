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
if(isset($_REQUEST['address'])) $address = htmlentities(trim($_REQUEST['address']), ENT_QUOTES);

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
	if(isValidEmail($email) or $email == $_SESSION['currUser']['Email']){
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

if(!empty($fname) and !empty($lname) and !empty($email) and !empty($mobile) and !empty($gender) and !empty($dob)  and !empty($address)){
	if(updateDOB($dob) and updateEmail($email) and updateFname($fname) and updateAddress($address) and updateGender($gender) and updateLname($lname) and updateMobile($mobile)){
		$_SESSION['currUser'] = getCustomerByUsername($_SESSION['currUser']['Username']);
		echo '<script> alert("Update Successful");
					location.replace("../viewProfile.php"); </script>';
	}
	else{
		echo '<script> alert("Somethings wrong"); </script>';
	}
}

else{
	//echo "All Fields Required";
	header("location: ../editProfile.php?er=All Fields Required");
}

function updateDOB($dob){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'dob' => $dob );
	return editUserDOB($user);
}

function updateMobile($mob){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'mobile' => $mob );
	return editUserMobile($user);
}

function updateEmail($email){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'email' => $email );
	return editUserEmail($user);
}

function updateFname($fname){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'fname' => $fname );
	return editUserFname($user);
}

function updateLname($lname){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'lname' => $lname );
	return editUserLname($user);
}

function updateGender($gender){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'gender' => $gender );
	return editUserGender($user);
}

function updateAddress($address){
	$user = array( 'username' => $_SESSION['currUser']['Username'], 'address' => $address );
	return editUserAddress($user);
}

?>