<section>
	<div class="wrapper">
		<div class="form">
			<form action="controller/registration.php" method="POST">
				<fieldset id="signup-form">
					<legend>Registration</legend>
                    <span id="firstnameerror" class="error"></span>
					<input type="text" id="firstname" name="fname" onblur="checkFirstName(this.value)" placeholder="First Name" maxlength="30"/>
                    <span id="lastnameerror" class="error"></span>
					<input type="text" name="lname" id="lastname" onblur="checkLastName(this.value)" placeholder="Last Name" maxlength="30"/>
					
					<hr>
                    <span id="emailerror" class="error"></span>
					<input type="text" name="email" id="email" maxlength="50" onblur="checkEmail(this.value)" placeholder="Email Address"/>
					
					<hr>
                    <span class="error" id="usernameerror"></span>
					<input type="text" name="uname" id="username" onblur="checkUserName(this.value)" maxlength="30" placeholder="User Name"/>
					
					<hr>
                    <span id="passwordoneerror" class="error"></span>
					<input type="Password" name="pass1" id="password1" onblur="checkPass1(this.value)" maxlength="50" placeholder="Password"/>
					
					<hr>
                    <span id="passwordtwoerror" class="error"></span>
					<input type="Password" name="pass2" id="password2" onkeyup="checkPass2(this.value)" maxlength="50" placeholder="Confirm Password"/>
					
					<hr>
                    <span id="registrationFailed" class="error"></span>
					<button type="submit" name="signup">Sign Up</button>
					<button type="reset">Reset</button>
				</fieldset>
			</form>
		</div>
	</div>
</section>