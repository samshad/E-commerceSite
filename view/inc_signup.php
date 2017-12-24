<section>
	<div class="wrapper">
		<div class="form">
			<form action="controller/registration.php" method="POST">
				<fieldset id="signup-form">
					<legend>Registration</legend>
                    <span id="firstnameerror" class="error"></span>
					<input type="text" name="firstname" placeholder="First Name" maxlength="30"/>
                    <span id="lastnameerror" class="error"></span>
					<input type="text" name="lastname" placeholder="Last Name" maxlength="30"/>
					
					<hr>
                    <span id="emailerror" class="error"></span>
					<input type="text" name="email" maxlength="50" onblur="checkSubmit(this.value)" placeholder="Email Address"/>
					
					<hr>
                    <span class="error" id="usernameerror"></span>
					<input type="text" name="username" maxlength="30" placeholder="User Name"/>
					
					<hr>
                    <span id="passwordoneerror" class="error"></span>
					<input type="Password" name="password1" maxlength="50" placeholder="Password"/>
					
					<hr>
                    <span id="passwordtwoerror" class="error"></span>
					<input type="Password" name="password2" maxlength="50" placeholder="Confirm Password"/>
					
					<hr>
					
					<button type="submit" name="signup" onclick="return checkall()">Sign Up</button>
					<button type="reset">Reset</button>
				</fieldset>
			</form>
		</div>
	</div>
</section>