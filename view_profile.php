<?php
    include_once "includes/session.inc.php";
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
        <td align="center" colspan="3" height="350px">
                <fieldset>
                    <legend>Your Profile</legend>
                    <img src="Profile Pics/pro.png" alt="Profile Picture" height="100" width="100"> <br>
                    <label for="upload">Change Profile Picture</label>
                    <input type="File" name="upload" value="Change Profile Picture"/>
                    <hr>
                    
                    <label>First Name:</label>
                    <hr>
                    
                    <label>Last Name:</label>
                    <hr>
                    
                    <label>User Name:</label>
                    <hr>
                    
                    <label>Date Of Birth:</label>
                    <hr>
                  
                    <label>E-mail Address:</label>
                    <hr>
                    
                    <label>Mobile:</label>
                    <hr>
                    
                    <label>Address:</label>
                    <hr>
            </fieldset>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>