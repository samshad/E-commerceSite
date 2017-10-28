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
        <td align="center" colspan="3">
            <form>
                <fieldset width="800px">
                    <legend>CART</legend>
                    <table width="900px" border=1 cellspacing=0 cellpadding=0 align="center">

                        <tr name="Middle_List">


                            <td>
                                <img src="raw/product.png">
                            </td>
                            <td>
                                <h3>Product Details</h3>
                                <p>Description</p>
                            </td>
                            <td>
                                <h3>Product Price</h3>
                                <p>Bdt.799</p>
                            </td>
                            <br>
                        </tr>

                        <tr name="Middle_List">


                            <td>
                                <img src="raw/product.png">
                            </td>
                            <td>
                                <h3>Product Details</h3>
                                <p>Description</p>
                            </td>
                            <td>
                                <h3>Product Price</h3>
                                <p>Bdt.899</p>
                            </td>
                            <br>
                        </tr>

                        <tr name="Middle_List">


                            <td>
                                <img src="raw/product.png">
                            </td>
                            <td>
                                <h3>Product Details</h3>
                                <p>Description</p>
                            </td>
                            <td>
                                <h3>Product Price</h3>
                                <p>Bdt.999</p>
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

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>