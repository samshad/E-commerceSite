<head>
    <title>E-CommerceSite</title>
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/Homedesign.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/style.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/test.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/header.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/E-commerceSite/css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/ajax.js"></script>
    <script src="js/signupValid.js"></script>
</head>

<?php
    require_once "model/db_connect.php";
?>

<header class="header">
    <div>
        <nav>
            <ul class="header_ul" >
                <li ><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a></li>

                <li><a href="viewProfile.html"><i class="fa fa-user" aria-hidden="true" style="color: white"></i></a>
                    <ul class="dropdown" id="User" >
                        <form>
                            <li style="text-align: center"><text id="Navfront"><font color="#444141">Login</font></text><hr></li>
                            <li><input type="text" placeholder="USERNAME" style="width: 80%"></li>
                            <li><input type="Password" placeholder="PASSWORD" style="width: 80%;"></li>
                            <li style="text-align: center"><a href="forgetPassword.php">Forgot Password?</a></li>
                            <div style="text-align: center">
                                <br>
                                <button type="Submit" name="signin" formaction="home.html">Sign in</button>
                                <br>
                                <p>Haven't registered? <a href="signup.php">Sign Up</a></p>
                            </div>
                        </form>
                    </ul>
                </li>
                <li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true" style="color: white"></i></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: white"></i></a></li>
            </ul>
        </nav>
    </div>
</header>