<div class="left-bar">
	<div style=" margin:5px; margin-left:90px">
		<!--<img class="img-circle" src="../raw/propic.jpg" style="margin:15px"> -->
	</div>
	<h1 style="color: antiquewhite"><?php echo $_SESSION['currUser']['First_name'] . " " . $_SESSION['currUser']['Last_name']; ?></h1>
	<hr>
	<nav>
		<ul style="background-color:#444141;">
			<li ><a href="viewProfile.php"><i class="fa fa-user" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">View Profile</font></i></a>
			<li ><a href="trackCart.php"><i class="fa fa-bell-o" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">Track Cart</font></i></a>
			<li ><a href="cartHistory.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">Cart History</font></i></a>
			<li ><a href="editProfile.php"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">Edit Profile</font></i></a>
			<li ><a href="changePassword.php"><i class="fa fa-pencil-square" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">Change Password</font></i></a>
			<li ><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="margin:10px"><font face="Arial" style="margin:10px">Logout</font></i></a>
		</ul>
	</nav>
</div>