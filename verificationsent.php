<?php
    include_once "includes/session.inc.php";
    
    if(!isset($_POST['submit'])){
	    header("Location: /e-commerceSite/index.php");
	    exit();
    }
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr>
		<?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr>
        <td align="center" colspan="3" height="350px">
            <label>A verification code has been sent to your email, Please check.</label>
            <a href="index.php">Return to home</a>
        </td>
    </tr>

    <tr>
		<?php require "includes/footer.inc.html"; ?>
    </tr>
</table>
</html>