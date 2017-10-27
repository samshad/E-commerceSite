<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr name="header">
	    <?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr name="Third_Top_List">
        <td align="center" colspan="3" height="30px">
            <a href="">WOMEN</a>
            <text>|</text>
            <a href="">MEN</a>
            <text>|</text>
            <a href="">TSHIRT</a>
            <text>|</text>
            <a href="">SHIRT</a>
            <text>|</text>
            <a href="">PANT</a>
            <text>|</text>
            <a href="">CUSTOM</a>
            <text>|</text>
        </td>
    </tr>

    <tr name="Middle_List">
        <td align="center" colspan="3" height="350px">
            <form action="">
                <fieldset style="width:350px">
                    <legend>Login</legend>
                    <label>User Name:</label>
                    <input type="Text" name="username"/><br>
                    <label>Password:</label>
                    <input type="Password" name="password"/>
                    <hr>
                    <input type="Checkbox"/><label>Remember Me</label>
                    <a href="">Forgot Password?</a><br>
                    <input type="Submit" value="Sign in"/>
                    <Button type="Submit" formaction="signup.php"><a href="signup.php">Sign Up</a></Button>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr name="Bottom">
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>