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
        <td align="center" colspan="3" height="30px">
            <a href="">WOMEN</a>|
            <a href="">MEN</a>|
            <a href="">TSHIRT</a>|
            <a href="">SHIRT</a>|
            <a href="">PANT</a>|
            <a href="">CUSTOM</a>
        </td>
    </tr>

    <tr>
        <td colspan="1">
            <h3 align="center">Profile</h3>
            <hr>
            <ul>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="changeprofilepic.php">Change Profile Picture</a></li>
                <li><a href="changepass.php">Change Password</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </td>

        <td align="center" colspan="2">
        
        </td>
    </tr>
    
    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>