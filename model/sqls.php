<?php
require_once "db_connect.php";

function isUniqueEmail($email){
	$sql = "SELECT * FROM customer WHERE Email = '$email' LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

function isUniqueUserName($name){
	$sql = "SELECT * FROM customer WHERE Username = '$name' LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

function addUsers($users){
    $sql = "INSERT INTO users(Username, Password, Type, Status) VALUES('$users[uname]', '$users[pass]', '$users[type]', 'valid')";
    
    $result = executeSQL($sql);
    
    if($result == true){
        return true;
    }
    
    return false;
}

function addCustomer($customer){
    $sql = "INSERT INTO customer(First_name, Last_name, Email, Username, Password, Status, DOJ) VALUES('$customer[fname]', '$customer[lname]', '$customer[email]', '$customer[uname]', '$customer[pass]', 'valid', '$customer[doj]')";
    
    $result = executeSQL($sql);
    
    $customer['type'] = "customer";
    
    if($result == true){
        if(addUsers($customer)){
			return true;
	    }
    }
    
    return false;
}

function getCustomerByUsername($customer){
	$sql = "SELECT * FROM customer WHERE Username = '$customer'";
	$result = executeSQL($sql);
	
	$customer=mysqli_fetch_assoc($result);
	
	return $customer;
}

function authenticate($user){
	$ret = getCustomerByUsername($user['uname']);
	if(is_null($ret)) return false;
	return $ret['Password'] == $user['pass'];
}

?>