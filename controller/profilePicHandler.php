<?php
require_once "session.php";
require_once "../model/sqls.php";

$target_dir = "../Profile Pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



$tmp_name =$_SESSION['currUser']['Username'];


$tmp_name=$tmp_name.".jpg";

if(isset($_POST["submit"])) {
	
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	
	if($check !== false) {
		$x = "File is an image - " . $check['mime'] . ".";
		//header("location: ../changeProfilePic.php?er=$x");
		
		$uploadOk = 1;
	}
	
	else {
		header("location: ../changeProfilePic.php?er=File is not an image.");
		
		$uploadOk = 0;
	}
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../Profile Pictures/".$tmp_name)) {
	
	$x = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	
	$result = uploadpic($_SESSION['currUser']['Username']);
	echo '<script> alert("Uploaded Successfully");
					location.replace("../viewProfile.php"); </script>';
}

else {
	header("location: ../changeProfilePic.php?Sorry, there was an error uploading your file.");
}
?>