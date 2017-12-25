<?php
require_once "session.php";
require_once "../model/sqls.php";

$uname = ""; $pass = "";

if(isset($_REQUEST['login_uname'])) $uname = htmlentities(trim($_REQUEST['login_uname']), ENT_QUOTES);
if(isset($_REQUEST['login_pass'])) $pass = htmlentities(trim($_REQUEST['login_pass']), ENT_QUOTES);

$un = false; $p = false;

if(!empty($uname) and !empty($pass)){
	$user = array( 'uname' => $uname, 'pass' => $pass );
	//var_dump($user);
	if(authenticate($user)){
		$user = getCustomerByUsername($user['uname']);
		$_SESSION['currUser'] = $user;
		header("location: ../index.php");
	}
	else{
		echo "Incorrect User Name or Password";
	}
}

/*if($fn == true and $ln == true and $em == true and $un == true and $p1 == true and $p2 == true){
	$customer['fname'] = $fname;
	$customer['lname'] = $lname;
	$customer['email'] = $email;
	$customer['uname'] = $uname;
	$customer['pass'] = $pass1;
	$customer['doj'] = date("d.m.Y");
	
	if(addCustomer($customer)){
		echo '<script> alert("Logged in Successfully");
					location.replace("../index.php"); </script>';
	}
	else{
		echo '<script> alert("Login Failed! Try Again!"); </script>';
	}
}*/

?>