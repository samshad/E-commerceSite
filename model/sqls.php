<?php
require_once "db_connect.php";

function isUniqueEmail($email){
	$sql = "SELECT * FROM customer WHERE Email = $email LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

function isUniqueUserName($name){
	$sql = "SELECT * FROM customer WHERE Username = $name LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

?>