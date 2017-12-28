<?php
require_once "session.php";
require_once "../model/sqls.php";

$uname = ""; $pass = "";

if(isset($_REQUEST['login_uname'])) $uname = htmlentities(trim($_REQUEST['login_uname']), ENT_QUOTES);
if(isset($_REQUEST['login_pass'])) $pass = htmlentities(trim($_REQUEST['login_pass']), ENT_QUOTES);

if(!empty($uname) and !empty($pass)){
	$user = array( 'uname' => $uname, 'pass' => $pass );
	if(authenticate($user)){
		$user = getCustomerByUsername($user['uname']);
		$_SESSION['currUser'] = $user;
		header("location: ../index.php");
	}
	else{
		header("location: ../signin.php?er=Incorrect User Name or Password");
	}
}

function authenticate($user){
	$ret = getCustomerByUsername($user['uname']);
	if(is_null($ret)) return false;
	return $ret['Password'] == $user['pass'];
}

?>