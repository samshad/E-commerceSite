<div class="right-bar">
	<div class="form">
		<form action="#" method="POST">
			<fieldset class="editField">
				<legend>Edit Profile</legend>
				<label>Name:</label>
				<input type="text" name="firstname" placeholder="First Name" maxlength="30"/>
				<input type="text" name="lastname" placeholder="Last Name" maxlength="30"/>
				
				<hr>
				
				<label>E-mail Address:</label>
				<input type="text" name="email" maxlength="50"/>
				
				<hr>
				
				<label>Mobile:</label>
				<input type="text" name="mobile" value="+88" maxlength="15"/>
				
				<hr>
				
				<label>Address:</label>
				<textarea name="address" cols="30" rows="3" maxlength="100"></textarea>
				
				<hr>
				
				<label>Gender:</label>
				<select name = "gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
				
				<hr>
				
				<label>Date of Birth:</label>
				
				<hr>
				
				<button type="submit" name="submit">Update</button>
			</fieldset>
		</form>
	</div>
</div>