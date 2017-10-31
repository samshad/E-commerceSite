<?php
    include_once "includes/session.inc.php";
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
        <td align = "center" colspan = "3" height = "350px">
            <img src="raw/t-shirt.png" alt = "Item1">
            <img src="raw/phonecase.png" alt = "Item2">
            <img src="raw/poster.png" alt = "Item3">
        </td>
    </tr>

    <tr>
		<?php require "includes/footer.inc.html"; ?>
    </tr>
</table>
</html>