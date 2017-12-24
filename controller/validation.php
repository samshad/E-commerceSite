<?php
require_once "../model/db_connect.php";
require_once "../model/sqls.php";

function isValidEmail($email){
	if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/',$email)){
		return isUniqueEmail($email);
	}
    else{
		return false;
	}
}

function isValidPassword($p1){
	$len = strlen($p1);
	if($len<6){
		return false;
	}
	if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $p1)){
		return true;
	}
    else {
        return false;
    }
}

function isValidName($name){
	if(preg_match('/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/', $name)){
		return true;
	}
    else{
        return false;
    }
}

function isValidUserName($name){
	if(preg_match('/^[a-z0-9_-]{5,100}$/', $name)){
		return isUniqueUserName($name);
	}
    else {
        return false;
    }
}
?>