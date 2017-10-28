<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr>
		<?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr>
        <td align="center" colspan="3" height="350px">
            <form action="verificationsent.php">
                <fieldset style="width:450px">
                    <label>Type your email address to get verification code</label><br>
                    <label>Email:</label>
                    <input type="Text" name="email" maxlength="50"/>
                    <hr>
                    <input type="Submit"/>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr>
        <?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>