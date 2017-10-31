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
					<legend>Edit Profile</legend>

                    <label>Name:</label>
                    <input type="text" name="firstname" placeholder="First Name" maxlength="25"/>
                    <input type="text" name="lastname" placeholder="Last Name" maxlength="25"/>

                    <hr>
					
					<label>User Name:</label>
					<input type="text" name="username" maxlength="20"/>
     
					<hr>
					
					<label>E-mail Address:</label>
					<input type="text" name="email" maxlength="50"/>
     
					<hr>
					
					<label>Mobile:</label>
					<input type="text" name="mobile" value="+88" maxlength="15"/>
     
					<hr>
					
					<label>Address:</label>
					<textarea name="address" cols="30" rows="3" maxlength="100"></textarea>

                    <hr>

                    <label>Gender:</label>
                    <select name = "gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    <hr>

                    <label>Date of Birth:</label>
                    <table>
                        <tr>
                            <th align = "center"><input name = "day" maxlength="2"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "month" maxlength="2"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "year" maxlength="4"/></th>
                        </tr>
                    </table>

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