<?php
include_once "includes/session.inc.php";
if(!isset($_SESSION['currUser'])){
	header("Location: /e-commerceSite/login.php");
	exit();
}
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
	<tr>
		<?php include_once "includes/headerHandler.inc.php"; ?>
	</tr>

    <tr>
		<?php include_once "includes/headerMenu.inc.php"; ?>
    </tr>
	
	<tr>
		<td colspan="1">
			<h3 align="center">Profile</h3>
			<hr>
			<ul>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changeprofilepic.php">Change Profile Picture</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</td>
		
		<td align="center" colspan="3" height="350px">
			<fieldset>
				<legend>Change Profile Picture</legend>
				<img src="raw/defaultPic.png" alt="Profile Picture" height="250" width="250"> <br>
				<label>Change Profile Picture</label>
				<input type="File" name="upload" value="Change Profile Picture"/>
			</fieldset>
		</td>
	</tr>
	
	<tr>
		<?php require "includes/copyright.inc.html"; ?>
	</tr>
</table>
</html>