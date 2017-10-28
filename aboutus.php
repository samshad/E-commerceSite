<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr>
	    <?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>
    
    <tr>
        <td colspan="3" height="350px" valign="top">
            <h3><u>CONTACT US:</u></h3>
            <p align="middle">a distinct section of a piece of writing, usually dealing with a single theme and
                indicated by a new line, indentation, or numbering.</p>
            <br>
            <h3><u>ABOUT US:</u></h3>
            <p align="middle">a distinct section of a piece of writing, usually dealing with a single theme and
                indicated by a new line, indentation, or numbering.</p>
            <br>
            <h4><u>Have questions? Send a message to our customer care:</u></h4>
            <form>
                <label>Email:</label>
                <input type="text" name="email" maxlength="50"/>
                <br>
                <label>Message:</label>
                <textarea name="message" cols="50" rows="10" maxlength="500"></textarea>
                <br>
                <input type="Submit"/>
            </form>
            <h3><u>STAY CONNECTED</u></h3>
            <p align="middle">a distinct section of a piece of writing, usually dealing with a single theme and
                indicated by a new line, indentation, or numbering.</p>
        </td>
    </tr>

    <tr>
	    <?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>