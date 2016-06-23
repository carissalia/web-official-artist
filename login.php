<?php
 //start the session
 session_start();

?>
<!DOCTYPE html>
<html>
	<head>
    <style type="text/css">
body {
	background-color: #000;
}
body,td,th {
	font-size: larger;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
}
#Submit {
	color: #000;
}
</style>
	</head>
    <body background="bg.jpg"  style="background-repeat: repeat-x" style="background-position:center">
<p>
  <marquee bgcolor="#FFEFC6">
  <font color="#000000">Please Login to Enter Site. Thank you :) </font>
  </marquee>
  <center>
</p>
<p>&nbsp; </p>
<div align="center">
		<div id="loginF">
			<form method ="post" action ="doLogin.php">
				<table align="center">
					<tr>
                    <td>
						<th><label for="username" align="center"  ><font color="#FFFFFF" size="5"/><b>Username</b></label></th></font></td>
						<td>:</td>
						<td><input type="text" name="txtUser"></td>
					</tr>
					<tr>
                    <td>
						<th><label for="password"><font color="#FFFFFF" size="5"/><b>Password</b></label></th></font></td>
						<td>:</td>
						<td><input type="password" name="txtPass"></td>
					</tr>
					<tr>
						<td colspan="3" align="center" style="color :red">
					<p style="color:red;">
					<?php
							// buat tampilin messagge error
							if (isset($_REQUEST['msg']))
							{
								echo $_REQUEST['msg'];
							}
							
					?>
            
		</p>
							<input type="submit" value="Login">
						</td>
					</tr>
				</table>
			</form>	
		</div>
    </div>
    </body>
</html>
