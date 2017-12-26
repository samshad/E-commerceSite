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

function isValidMobile($m){
	str_replace(" ", "", $m);
	str_replace("-", "", $m);
	if(preg_match('/^(0088|\+88)?(01)[156789]{1}[0-9]{8}$/', $m)){
		return true;
	}
	else {
		return false;
	}
}

function isValidDOB($dob){
	if(preg_match('/^\s*(3[01]|[12][0-9]|0?[1-9])\.(1[012]|0?[1-9])\.((?:19|20)\d{2})\s*$/', $dob)){
		$month = array(0,31,28,31,30,31,30,31,31,30,31,30,31);
		
		$ans = explode(".",$dob);
		
		$d = (int)$ans[0];
		$m = (int)$ans[1];
		$y = (int)$ans[2];
		
		if($m == 2 and $d == 29){
			if((($y % 4 == 0) && ($y % 100 != 0)) || $y % 400 == 0) return true;
			return false;
		}
		
		if($d <= $month[$m]){
			return true;
		}
		
		return false;
	}
	else{
		return false;
	}
}
?>