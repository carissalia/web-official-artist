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
  <font color="#000000">Your Message has been sent :) </font>
  </marquee>
  <center>
</p>

<div align="center">
  <?php
	include "koneksi.php";
    $nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$pesan	= $_POST['pesan'];
    $sql	= "INSERT INTO bukutamu (nama,
                                     email,
                                     pesan) 
                            VALUES	('$nama',
                                   '$email',
                                   '$pesan')";

mysql_query($sql)
or die ("Gagal Perintah SQL".mysql_error());
echo"
<strong><h1>Message Send</h1></strong> <br>
</tr>
<strong><h1><a href='Home.php'><font color='white'>Back To Home</font></a></h1></strong> <br>
<strong><h1><a href='doLogout.php'><font color='white'>Logout</font</a></h1></strong> <br>
</tr>
";
?>

</html>