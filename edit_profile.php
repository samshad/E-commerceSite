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
                    <legend>Edit Profile</legend>
                    
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
                    
                </fieldset>
                <br>    
                <input type="Submit" name="submit" value="Update"/>
            </form>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>