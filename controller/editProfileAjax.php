<?php
require_once "session.php";
require_once "validation.php";

$email = ""; $fname = ""; $lname = ""; $mobile = ""; $address = ""; $gender = ""; $dob = "";

if(isset($_REQUEST['email'])) $email = htmlentities(trim($_REQUEST['email']), ENT_QUOTES);
if(isset($_REQUEST['fname'])) $fname = htmlentities(trim($_REQUEST['fname']), ENT_QUOTES);
if(isset($_REQUEST['lname'])) $lname = htmlentities(trim($_REQUEST['lname']), ENT_QUOTES);
if(isset($_REQUEST['mobile'])) $mobile = htmlentities(trim($_REQUEST['mobile']), ENT_QUOTES);
if(isset($_REQUEST['address'])) $address = htmlentities(trim($_REQUEST['address']), ENT_QUOTES);
if(isset($_REQUEST['gender'])) $gender = htmlentities(trim($_REQUEST['gender']), ENT_QUOTES);
if(isset($_REQUEST['dob'])) $dob = htmlentities(trim($_REQUEST['dob']), ENT_QUOTES);

if(!empty($fname)){
	if(!isValidName($fname)){
		echo "Invalid First Name";
	}
}

if(!empty($lname)){
	if(!isValidName($lname)){
		echo "Invalid Last Name";
	}
}

if(!empty($email)){
	if(!isValidEmail($email) and $email != $_SESSION['currUser']['Email']){
		echo "Invalid Email Address or Already Registered";
	}
}

if(!empty($mobile)){
	if(!isValidMobile($mobile)){
		echo "Please insert valid mobile number";
	}
}

if(!empty($dob)){
	if(!isValidDOB($dob)){
		echo "Please insert valid birth date";
	}
}

?>