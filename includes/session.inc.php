<?php

ob_start();
if(!session_id()) session_start();
if(!isset($_SESSION['user'])){
	$_SESSION['user'] = array();
}
var_dump($_SESSION['user']);

//echo $_SERVER['SCRIPT_NAME']; // #/e-commerceSite/index.php