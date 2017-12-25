<?php
require_once "controller/session.php";
session_destroy();
header("location: index.php");
?>