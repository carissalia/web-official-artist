<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel = "stylesheet" href="style1.css"type = "text/css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Beyonce</title>
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
<?php
	session_start();
?>
</head>

<body>
<form>
  <div align="right"><a href="doLogout.php"><img src="logout_button_black.png" /></a> </div>
  <p><a href="https://twitter.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/twitter-white.png" alt="socmed" /></a><a href="https://www.facebook.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/facebook-white.png" alt="socmed" /></a><a href="https://instagram.com/beyonce/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/instagram-white.png" alt="socmed" /></a> <a href="http://iam.beyonce.tumblr.com/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/tumblr-white.png" alt="socmed" /></a> <a href="https://www.youtube.com/user/beyonce" target="_blank"> <img src="http://tokimonsta.com/assets/images/icons/youtube-white.png" alt="socmed" /></a></p>
<p><img src="45Capture.PNG"width=100% height="450"div align="center" style="left: 0; right: 0;" /></p>
<div align="center" style="alignment-adjust:central">
<nav>
  <ul>
	<li> <a href="admin.php">HOME</a></li>
      <li><a href="view.php">MEMBER</a></li>
        <li><a href="coment.php">Comment</a></li>
    </ul>
  </nav>
  </div>
<?php 
include"koneksi.php";
echo"   <table align=center border=1>
		<form method=post action=put.php>
		<tr>
		<td colspan=6 align=center><h3>Pesan</h3></td>
		</tr>
		<tr>
			<th width=20 align=center>Nama</th>
			<th width=20 align=center>Email</th>
			<th width=20 align=center>Pesan</th>
		</tr>
		";
$sql=mysql_query("SELECT * FROM bukutamu ORDER BY id_tamu");
  while ($r=mysql_fetch_array($sql)){		
echo"	<tr>	
			<td >$r[nama]</td>
			<td><a href=''>$r[email]</a></td>
			<td>$r[pesan]</td>
		";}
echo"	
		</tr>
		</table><br>
		";
		
?>
 
</form>