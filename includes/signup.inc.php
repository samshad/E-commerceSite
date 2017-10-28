<?php
	include_once "session.inc.php";
	
	if(isset($_POST['submit'])){
		$userName = $_POST['username'];
		$pass1 = $_POST['password1'];
		$pass2 = $_POST['password2'];
		
		if(empty($userName) or empty($pass1) or empty($pass2)){
			header("Location: /e-commerceSite/signup.php?signup=empty");
			exit();
		}
		else{
			$user = array('userName'=>$userName, 'password'=>$pass1);
			$_SESSION['user'][count($_SESSION['user'])] = $user;
			header("Location: /e-commerceSite/login.php");
			exit();
		}
	}
	else{
		header("Location: /e-commerceSite/index.php");
		exit();
	}