<!DOCTYPE html>
<html>
<head>
    <?php include("top.php");?>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="Wrapper">
        <center>
            <div id="login-form">
                <form method="post" action="registerscript.php">
		          <table class="register">
                      <tr>
                          <td><input type="text" name="register-username" placeholder="User Name" required /></td>
                      </tr>
                      <tr>
                          <td><input type="email" name="register-email" placeholder="Your Email" required /></td>
                      </tr>
                      <tr>
				        <td><input type="password" name="register-pass" placeholder="Your Password" required /></td>
			         </tr>
                      <tr>
				        <td><input type="text" name="register-postcode" placeholder="your Zip code" required /></td>
			         </tr>
                      <td><input type="text" name="register-huisnr" placeholder="Your House Number"></td>
                      <tr>
                          <td><input type="month" name="register-bdaymonth"/></td>
                      </tr>
			         <tr>
				        <td><button type="submit" name="btn-signup">Sign up</button></td>
			         </tr>
                      <tr>
                        <td><a href="login.php">Sign in</a></td>
                      </tr>
                    </table>
                </form>
            </div>	
        </center>	
    </div>
</body>
</html>