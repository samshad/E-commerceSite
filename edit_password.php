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
            <form action="includes/signup.inc.php" method="POST">
                <fieldset>
                    <legend>Edit Password</legend>
                    
                    <label>Current Password:</label>
                    <input type="Password" name="password1" maxlength="50"/>
                    <hr>
                    
                    <label>New Password:</label>
                    <input type="Password" name="new_password1" maxlength="50"/>
                    <hr>
                    
                    <label>Confirm New Password:</label>
                    <input type="Password" name="confirm_password2" maxlength="50"/>
                    <hr>
                    
                    <input type="Submit" name="submit" value="Update"/>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>