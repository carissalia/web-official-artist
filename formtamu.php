<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
<html>
</head>


             
	

<body background="bg.jpg"  style="background-repeat: repeat-x" style="background-position:center">
<p>



	</p>
  <marquee bgcolor="#FFEFC6">
  <font color="#000000">Please Sign Up to Enter Site. Thank you :) </font>
  </marquee>
  <center>
</p>
<p>&nbsp; </p>
<div align="center">

	 <p style="color:red;">
              	

 <center></center>
		<table>
		<form method='post' action=input.php>
		 <table style=color:inherit border=0>
          <tr>
		<tr>
		<th width=534 align=center valign=top scope=row><h1><b><font color=#FFFFFF>SIGN UP</font></b></h1>
		<table>
		<tr>
		<th>Username</th>
		<td><input type=text name=username></td></tr>
		<tr>
		</tr>
		<th>Fname</th>
		<td><input type=text name=fname ></td></tr>
		<tr>
		<th>Lname</th>
		<td><input type=text name=lname ></td></tr>
		<tr>
		<th>Gender</th>
		<td><input type=text name=gender >L/P</td></tr>
		<tr>
		<th>Email</th>
		<td><input type=text name=email >
		</td></tr>
		<tr>
		<th>Password</th>
		<td><input type=password name=password ></td></tr>
		        
                <tr><td align=center colspan=2>
                 <p style="color:red;">
               <?php
   function validateEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
   }
?>
</p>		
                <input type=submit name=Kirim value=SIGNUP></tr>
   				
          
   
                
		</table>
		</form><form action='entersite.php' method='post'> <align=center colspan=2><input type=submit name=Kirim value=BACK></form>
		
        
        
			</table><br>
</div>
</body>
</html>