<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("Top.php");?>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="Wrapper">
    	<center>
		<div id="login-form">
			<form method="post" action="verwerk.php">
				<table class="loginform">
					<tr>
						<td><input class="log" type="text" name="login-email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input class="log" type="password" name="login-pass" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-login">Log In</button></td>
					</tr>
					<tr>
                        <td class="logTxt"><a href="register.php"><p>Sign up</p></a></td>
					</tr>
					<tr>
						<td class="logTxt"><a href="forgotpassword.php"><p>Forgotten password</p></a></td>
					</tr>
        </table>
        </form>
        </div>
        </center>
    </div>
</body>