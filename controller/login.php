<?php
require_once "session.php";

$uname = ""; $pass = "";

if(isset($_REQUEST['uname'])) $uname = htmlentities(trim($_REQUEST['uname']), ENT_QUOTES);
if(isset($_REQUEST['pass'])) $pass = htmlentities(trim($_REQUEST['pass']), ENT_QUOTES);

$un = false; $p = false;

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
		echo '<script> alert("Registration Failed! Try Again!"); </script>';
	}
}

?>