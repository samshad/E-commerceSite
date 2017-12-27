<div class="right-bar">
	
	<div>
		<img src="../raw/defaultPic.png" alt="Profile Picture" height="100" width="100"> <br>
		<a href="changeProfilePic.php">Change Profile Picture</a>
	</div>
	<hr>
	<div style="float: left">
		<label style="font-weight: 1000">First Name: </label>
		<hr>
		
		<label style="font-weight: 600">Last Name: </label>
		<hr>
		
		<label style="font-weight: 600">User Name: </label>
		<hr>
		
		<label style="font-weight: 600">Date Of Birth:</label>
		<hr>
		
		<label style="font-weight: 600">E-mail Address:</label>
		<hr>
		
		<label style="font-weight: 600">Mobile:</label>
		<hr>
		
		<label style="font-weight: 600">Address:</label>
	</div>
	
	<div>
		<label id="fname"> <?php echo $_SESSION['currUser']['First_name']; ?> </label>
		<hr>
		
		<label id="lname"> <?php echo $_SESSION['currUser']['Last_name']; ?></label>
		<hr>
		
		<label id="username"> <?php echo $_SESSION['currUser']['Username']; ?></label>
		<hr>
		
		<label id="dob"> <?php echo $_SESSION['currUser']['DOB']; ?></label>
		<hr>
		
		<label id="email"> <?php echo $_SESSION['currUser']['Email']; ?></label>
		<hr>
		
		<label id="mobile"> <?php echo $_SESSION['currUser']['Phone']; ?></label>
		<hr>
		
		<label id="address"> banasree</label>
  
	</div>
	<hr>
	
	<a href="editProfile.php">Edit Profile</a>

</div>