<?php
    include_once "session.inc.php";
?>

<html>
<head>
    <title>E-CommerceSite</title>
</head>
</html>

<?php
    if(!isset($_SESSION['user'])){
        echo '<td align = "right" colspan = "3" height = "30px">
                    <a href="index.php">HOME</a>
                    <text>|</text>
                    <a href="login.php">LOGIN</a>
                    <text>|</text>
                    <a href="aboutus.php">ABOUT US</a>
                </td>';
    }
?>

<?php
    /*<td align = "right" colspan = "3" height = "30px">
        <a href="index.php">HOME</a>
        <text>|</text>
        <a href="login.php">LOGIN</a>
        <text>|</text>
        <a href="cart.php">CART</a>
        <text>|</text>
        <a href="aboutus.php">ABOUT US</a>
    </td>*/
?>
