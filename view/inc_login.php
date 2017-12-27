<section>
	<div id="" style="width: 50%; height: 50%; position: relative; left: 400;">
		<form method="post" action="controller/login.php">
			<fieldset class="editField">
				<legend>Login</legend>
				<div id="" style="text-align: center">
					<input type="Text" id="login_uname" name="login_uname" placeholder="User Name"/><br><br>
					
					<input type="Password" id="login_pass" name="login_pass" placeholder="Password"/><br><br>
                    
                    <span id="login_error" class="error"> <?php if(isset($_REQUEST['er'])) echo $_REQUEST['er']; ?> </span>
                    <br>
                    
					<a href="forgetPassword.php">Forgot Password?</a><br><br>
					
					<button type="submit" name="signin" onclick="return login()">Sign in</button>

                    <a href="signup.php">Sign Up</a>
				</div>
			</fieldset>
		</form>
	</div>
</section>