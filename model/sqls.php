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

function editUserDOB($customer){
	$sql = "UPDATE customer SET DOB='$customer[dob]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserMobile($customer){
	$sql = "UPDATE customer SET Phone='$customer[mobile]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserGender($customer){
	$sql = "UPDATE customer SET Gender='$customer[gender]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserEmail($customer){
	$sql = "UPDATE customer SET Email='$customer[email]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserFname($customer){
	$sql = "UPDATE customer SET First_name='$customer[fname]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserLname($customer){
	$sql = "UPDATE customer SET Last_name='$customer[lname]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}


?>