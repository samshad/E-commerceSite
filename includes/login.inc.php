<?php
	include_once "session.inc.php";

	if(isset($_POST['submit'])){
		$userName = $_POST['username'];
		$pass = $_POST['password'];
		
		if(empty($userName) or empty($pass)){
			header("Location: /e-commerceSite/login.php?login=empty");
			exit();
		}
		else{
			$userList = $_SESSION['user'];
			foreach($userList as $user){
				if($user['userName'] == $userName){
					if($user['password'] == $pass){
						$_SESSION['currUser'] = array('userName'=>$userName, 'password'=>$pass);
						header("Location: /e-commerceSite/index.php");
						exit();
					}
				}
			}
			header("Location: /e-commerceSite/login.php?login=failed");
			exit();
		}
	}
	else{
		header("Location: /e-commerceSite/index.php");
		exit();
	}