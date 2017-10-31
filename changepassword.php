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
			<form action="" method="POST">
				<fieldset>
					<legend>Edit Password</legend>
					
					<label>Current Password:</label>
					<input type="Password" name="currPassword" maxlength="50"/>
					
					<hr>
					
					<label>New Password:</label>
					<input type="Password" name="password1" maxlength="50"/>
					
					<hr>
					
					<label>Confirm New Password:</label>
					<input type="Password" name="password2" maxlength="50"/>
					
					<hr>
					
					<input type="Submit" name="submit" value="Update"/>
				</fieldset>
			</form>
		</td>
	</tr>
	
	<tr>
		<?php require "includes/footer.inc.html"; ?>
	</tr>
</table>
</html>