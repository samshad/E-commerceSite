<?php
ob_start();
if(!session_id()) session_start();
if(!isset($_SESSION['user'])){
	$_SESSION['user'] = array();
}
?>