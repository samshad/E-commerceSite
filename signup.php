<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr name="header">
		<?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr name="Third_Top_List">
        <td align="center" colspan="3" height="30px">
            <a href="">WOMEN</a>
            <text>|</text>
            <a href="">MEN</a>
            <text>|</text>
            <a href="">TSHIRT</a>
            <text>|</text>
            <a href="">SHIRT</a>
            <text>|</text>
            <a href="">PANT</a>
            <text>|</text>
            <a href="">CUSTOM</a>
        </td>
    </tr>

    <tr name="Middle_List">
        <td align="center" colspan="3" height="350px">
            <form action="">
                <fieldset>
                    <legend>Registration</legend>
                    
                    <label>Name:</label>
                    <input type="text" name="firstname" placeholder="First Name"/>
                    <input type="text" name="lastname" placeholder="Last Name"/>
                    
                    <hr>
                    
                    <label>Email Address:</label>
                    <input type="text" name="email"/>
                    
                    <hr>
                    
                    <label>User Name:</label>
                    <input type="text" name="username"/>
                    
                    <hr>
                    
                    <label>Password:</label>
                    <input type="Password" name="password1"/>
                    
                    <hr>
                    
                    <label>Confirm Password:</label>
                    <input type="Password" name="password2"/>
                    
                    <hr>
                    
                    <label>Mobile:</label>
                    <input type="text" name="mobile" value="+88"/>
                    
                    <hr>
                    
                    <label>Address:</label>
                    <textarea name="address" cols="30" rows="3"></textarea>
                    
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
                            <th align = "center"><input name = "day"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "month"/></th>
                            <th align = "center">/</th>
                            <th align = "center"><input name = "year"/></th>
                        </tr>
                    </table>
                    
                    <hr>
                    
                    <input type="Submit" value="Sign Up"/>
                    <input type="Reset" value="Reset"/>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr name="Bottom">
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>