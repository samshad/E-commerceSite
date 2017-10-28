<?php
    include_once "session.inc.php";
?>

<html>
<head>
    <title>E-CommerceSite</title>
</head>
</html>

<?php
    if(!isset($_SESSION['currUser'])){
        echo '<td align = "right" colspan = "3" height = "30px">
                    <a href="index.php">HOME</a>|
                    <a href="login.php">LOGIN</a>|
                    <a href="aboutus.php">ABOUT US</a>
                </td>';
    }
    
    else{
        $userName = $_SESSION['currUser']['userName'];
        
	    echo '<td align = "left" colspan = "1" height = "30px">
                    <label>Welcome </label>
                    <a href="profile.php">' . $userName . '</a>
                </td>';
	
	    echo '<td align = "right" colspan = "2" height = "30px">
                    <a href="index.php">HOME</a>|
                    <a href="cart.php">CART</a>|
                    <a href="logout.php">LOG OUT</a>|
                    <a href="aboutus.php">ABOUT US</a>
                </td>';
    }
?>
