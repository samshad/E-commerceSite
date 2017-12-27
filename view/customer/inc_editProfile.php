<div class="right-bar">
	<div class="form">
		<form action="controller/editProfileHandler.php" method="GET">
			<fieldset class="editField">
                <legend>Edit Profile</legend>
                <span id="firstnameerror" class="error"></span>
                <label>Name:</label>
                <input onkeyup="echeckFirstName(this.value)" type="text" name="fname" placeholder="First Name" value="<?php echo $_SESSION['currUser']['First_name']; ?>" maxlength="30"/>
                <span id="lastnameerror" class="error"></span>
                <input onkeyup="echeckLastName(this.value)" type="text" name="lname" placeholder="Last Name" value="<?php echo $_SESSION['currUser']['Last_name']; ?>" maxlength="30"/>
				
				<hr>
                
                <label>E-mail Address:</label>
				<input onkeyup="echeckEmail(this.value)" type="text" name="email" value="<?php echo $_SESSION['currUser']['Email']; ?>" maxlength="50"/>
                <span id="emailerror" class="error"></span>
				<hr>
				
				<label>Mobile:</label>
				<input onkeyup="checkMobile(this.value)" type="text" name="mobile" value="<?php echo $_SESSION['currUser']['Phone']; ?>" maxlength="15"/>
                <span id="mobileerror" class="error"></span>
				<hr>
				
				<label>Address:</label>
				<textarea name="address" cols="30" rows="3" maxlength="100"><?php echo $_SESSION['currUser']['Address']; ?></textarea>
				
				<hr>
				
				<label>Gender:</label>
				<select name = "gender">
					<option value="Male" <?php if($_SESSION['currUser']['Gender'] == 'Male') echo"selected"; ?> >Male</option>
					<option value="Female" <?php if($_SESSION['currUser']['Gender'] == 'Female') echo"selected"; ?> >Female</option>
					<option value="Other" <?php if($_SESSION['currUser']['Gender'] == 'Other') echo"selected"; ?> >Other</option>
				</select>
				
				<hr>
				
				<label>Date of Birth:</label>
                <input onkeyup="checkDob(this.value)" type="text" name="dob" value="<?php echo $_SESSION['currUser']['DOB']; ?>" maxlength="15"/>
                <span id="doberror" class="error"></span>
                <br>
                <span id="editprofileerror" class="error"><?php if(isset($_REQUEST['er'])) echo $_REQUEST['er']; ?></span>
				<hr>
				
				<button type="submit" name="submit" onclick="return checkEditProfile()">Update</button>
			</fieldset>
		</form>
	</div>
</div>