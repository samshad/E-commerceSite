<?php
    require_once "controller/session.php";
?>

<head>
    <title>E-CommerceSite</title>
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/Homedesign.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/style.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/test.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/header.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/signupValid.js"></script>
    <script src="js/loginValid.js"></script>
    <script src="js/editProfile.js"></script>
</head>

<?php
require_once "model/sqls.php";

if(!isset($_SESSION['currUser'])){
	echo '
    <header class="header">
        <div>
            
                <div style="text-align: left; position: relative; top: 20">
                    <p style="color: white"></p>
                </div>
                
                <div style="text-align: right">
                    <ul class="header_ul">
                    <li ><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color: white"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a></li>
                    
                    <li><a href="signin.php"><i class="fa fa-user" aria-hidden="true" style="color: white"></i></a>
                    </li>
                    <li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i></a></li>
                </ul>
                </div>
           
        </div>
    </header>';
}
else if($_SESSION['Type'] == "customer"){
    echo'
    <header class="header">
        <div>
            
            <div style="text-align: left; position: relative; top: 20">
                <p style="color: white">Logged In As: <a style="text-decoration: none; color: white" href="viewProfile.php">' . $_SESSION['currUser']['First_name'] . " " . $_SESSION['currUser']['Last_name'] . '</a></p>
            </div>
            
            <div style="text-align: right">
                <ul class="header_ul">
                <li ><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a></li>
                
                <li><a href="viewProfile.php"><i class="fa fa-user" aria-hidden="true" style="color: white"></i></a>
                </li>
                <li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: white"></i></a></li>
            </ul>
            </div>
           
        </div>
    </header>';
}

else if($_SESSION['Type'] == "admin"){
    echo'
    <header class="header">
        <div>
            
            <div style="text-align: left; position: relative; top: 20">
                <p style="color: white">Logged In As: <a style="text-decoration: none; color: white" href="viewProfile.php">' . $_SESSION['currUser']['First_name'] . " " . $_SESSION['currUser']['Last_name'] . '</a> . "ADMIN"</p>
            </div>
            
            <div style="text-align: right">
                <ul class="header_ul">
                <li><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true" style="color: white"></i></a></li>
                <li ><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a></li>
                
                <li><a href="viewProfile.php"><i class="fa fa-user" aria-hidden="true" style="color: white"></i></a>
                </li>
                <li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: white"></i></a></li>
            </ul>
            </div>
           
        </div>
    </header>';
}
?>