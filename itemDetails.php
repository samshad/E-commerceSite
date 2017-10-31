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
		<td align = "center" colspan = "3" height = "100px">
			<img src ="raw/t-shirt.png">
			<h3>Details</h3>
			<p>bla bla bla</p>
			<br>
			<h3>Price:799</h3>
			<h4>Size: X|XL|XXL</h4>
		</td>
	</tr>
	
	<tr>
		<?php require "includes/footer.inc.html"; ?>
	</tr>
</table>
</html>