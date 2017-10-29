<?php
    include_once "session.inc.php";
?>

<?php
    if(isset($_SESSION['currUser']) and $_SESSION['currUser']['userName'] == "pop"){
        echo '<td align = "center" colspan = "3" height = "30px">
                    <a href="">PRODUCTS</a>|
                    <a href="">EMPLOYEE INFO</a>|
                    <a href="">ACCOUNTS</a>|
                    <a href="">DELIVERY INFO</a>|
                    <a href="">ORDER INFO</a>|
                    <a href="addItem.php">ADD ITEM</a>|
                    <a href="">REGISTRATION INFO</a>
                </td>';
    }
    
    else{
        echo '<td align="center" colspan="3" height="30px">
                    <a href="">WOMEN</a>|
                    <a href="">MEN</a>|
                    <a href="">TSHIRT</a>|
                    <a href="">SHIRT</a>|
                    <a href="">PANT</a>|
                    <a href="custom.php">CUSTOM</a>
                </td>';
    }
?>
