<?php

function getImgName(){
	$txt = $_SESSION['currUser']['Username'];
	
	$result = ispicuploaded($txt);
	
	if($result == "yes"){
		$name = $txt . ".jpg";
		return "Profile Pictures/$name";
	}
	
	else{
		return "raw/defaultPic.png";
	}
}

?>

<div class="right-bar">
	<div>
		<form action="controller/profilePicHandler.php" method="POST" enctype="multipart/form-data">
			<fieldset class="editField">
				<legend class="legend">Change Profile Picture</legend>
				<img src="<?php echo getImgName(); ?>" alt="Profile Picture" height="250" width="250"> <br>
				<label>Change Profile Picture</label>
				<input type="File" name="fileToUpload" value="Change Profile Picture" id="fileToUpload"/>
				<hr>
                <span id="profilepicerror" class="error"><?php if(isset($_REQUEST['er'])) echo $_REQUEST['er']; ?></span>
				<button type="submit" name="submit">Submit</button>
			</fieldset>
		</form>
	</div>
</div>