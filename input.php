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
  <font color="#000000">Anda berhasil terdaftar,silahkan coba untuk Login </font>
  </marquee>
  <center>
</p>

<body>

   
<div align="center">
  <?php
	include "koneksi.php";
	$username	= $_POST['username'];
	$fname	= $_POST['fname'];
	$lname	= $_POST['lname'];
	$gender	= $_POST['gender'];
	$email	= $_POST['email'];
	$password	= $_POST['password'];
    $sql	= "INSERT INTO tamu (username,
									fname,
									lname,
									gender,
                                     email,
                                     password) 
                            VALUES	('$_POST[username]',
									'$_POST[fname]',
									'$_POST[lname]',
									'$_POST[gender]',
                                   '$_POST[email]',
                                   '$_POST[password]')";

function validateEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);}
mysql_query($sql)
or die ("Gagal Perintah SQL".mysql_error());
echo"
<strong><h1>Anda telah terdaftar</h1></strong> <br>
</tr>
<strong><h1>Silahkan <a href='login.php'><font color='white'>login</font></a></h1></strong> <br>
</tr>
";
?>




</div>
</body>
</html>