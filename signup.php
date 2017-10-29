<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr>
		<?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr>
		<?php include_once "includes/headerMenu.inc.php"; ?>
    </tr>

    <tr>
        <td align="center" colspan="3" height="350px">
            <form action="includes/signup.inc.php" method="POST">
                <fieldset>
                    <legend>Registration</legend>
                    
                    <label>Name:</label>
                    <input type="text" name="firstname" placeholder="First Name" maxlength="25"/>
                    <input type="text" name="lastname" placeholder="Last Name" maxlength="25"/>
                    
                    <hr>
                    
                    <label>Email Address:</label>
                    <input type="text" name="email" maxlength="50"/>
                    
                    <hr>
                    
                    <label>User Name:</label>
                    <input type="text" name="username" maxlength="20"/>
                    
                    <hr>
                    
                    <label>Password:</label>
                    <input type="Password" name="password1" maxlength="50"/>
                    
                    <hr>
                    
                    <label>Confirm Password:</label>
                    <input type="Password" name="password2" maxlength="50"/>
                    
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
                    <table>
                        <tr>
                            <th align = "center"><input name = "day" maxlength="2"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "month" maxlength="2"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "year" maxlength="4"/></th>
                        </tr>
                    </table>
                    
                    <hr>
                    
                    <input type="Submit" name="submit" value="Sign Up"/>
                    <input type="Reset" value="Reset"/>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>