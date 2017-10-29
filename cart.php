<?php
    include_once "includes/session.inc.php";
    if(!isset($_SESSION['currUser'])){
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
	    <?php include_once "includes/headerMenu.inc.php"; ?>
    </tr>

    <tr>
        <td align="center" colspan="3">
            <form>
                <fieldset>
                    <legend>CART</legend>
                    <table width="900px" border=1 cellspacing=0 cellpadding=0 align="center">
                        <tr>
                            <td>
                                <img src="raw/product.png">
                            </td>

                            <td>
                                <h3>Product Details</h3>
                                <label>Description</label>
                            </td>

                            <td>
                                <h3>Product Price</h3>
                                <label>Bdt.799</label>
                            </td>
                            <br>
                        </tr>

                        <tr>
                            <td>
                                <img src="raw/product.png">
                            </td>

                            <td>
                                <h3>Product Details</h3>
                                <label>Description</label>
                            </td>

                            <td>
                                <h3>Product Price</h3>
                                <label>Bdt.899</label>
                            </td>
                            <br>
                        </tr>

                        <tr>
                            <td>
                                <img src="raw/product.png">
                            </td>

                            <td>
                                <h3>Product Details</h3>
                                <label>Description</label>
                            </td>

                            <td>
                                <h3>Product Price</h3>
                                <label>Bdt.999</label>
                            </td>
                            <br>
                        </tr>
                    </table>

                    <tr>
                        <td align="center" colspan="3">
                            <h3>Total Item</h3>
                            <p>Price:2697.bdt</p>
                            <input type="Button" value="Proceed to checkout"/>
                        </td>
                    </tr>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>