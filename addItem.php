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
            <form action = "">
                <fieldset style="width:350px">
                    <legend>Add Item</legend>
                    <img src="raw/image.png">
                    <br>
                    <input type="file" name="itemPic"/">
                    <br>
                    <label>Item type:</label>
                    <select>
                        <option value="shirt">Shirt</option>
                        <option value="pants">Pants</option>
                        <option value="t-shirt">T-Shirt</option>
                    </select>
                    <br>
                    <label>Size:</label>
                    <select>
                        <option value="small">small</option>
                        <option value="medium">medium</option>
                        <option value="large">large</option>
                    </select>
                    <br>
                    <label>Description:</label>
                    <input type="text" name="description">
                    <br>
                    <input type="submit" value="Add item">
                </fieldset>
            </form>
        </td>
	</tr>
	
	<tr>
		<?php require "includes/footer.inc.html"; ?>
	</tr>
</table>
</html>