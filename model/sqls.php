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

/*function addusers($users){
	$sql = "INSERT INTO users(Username, Password, Type, Status) VALUES('$users[username]', '$users[pass]', '$users[type]', 'valid')";
	
	$result = executeSQL($sql);
	
	if($result!=true)
	{
	else echo "<script>
                    alert('Failed From users');
                    
                 </script>";
	}
	
	return $result;
}

function addcustomer($customer){
	//$date = STR_TO_DATE('$customer[date]', '%d/%m/%Y');
	$sql = "INSERT INTO customer(First_name, Last_name, Email, Username, Password, Status) VALUES('$customer[fname]', '$customer[lname]', '$customer[email]', '$customer[username]', '$customer[pass]', 'valid'";
	
	
	$result = executeSQL($sql);
	
	if($result==true)
	{
		addusers($customer);
	}
	
	else echo "<script>
                    alert('Failed From Customer');
                    
                 </script>";
	
	return $result;
}*/

?>