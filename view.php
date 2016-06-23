<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel = "stylesheet" href="style1.css"type = "text/css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment</title>
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
  <div align="right"><a href="doLogout.php"><img src="logout_button_black.png" /></a>
  </div>
  <p><a href="https://twitter.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/twitter-white.png" alt="socmed" /></a><a href="https://www.facebook.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/facebook-white.png" alt="socmed" /></a><a href="https://instagram.com/beyonce/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/instagram-white.png" alt="socmed" /></a> <a href="http://iam.beyonce.tumblr.com/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/tumblr-white.png" alt="socmed" /></a> <a href="https://www.youtube.com/user/beyonce" target="_blank"> <img src="http://tokimonsta.com/assets/images/icons/youtube-white.png" alt="socmed" /></a></p>
<p><img src="45Capture.PNG" width=100% height="450"div align="center" style="left: 0; right: 0;" /></p>
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
		<form method=post action=input.php>
		<tr>
			<td colspan=6 align=center><h3>Daftar Member</h3></td>
		</tr>
		<tr>
			<th width=20 align=center>Username</th>
			<th width=20 align=center>Fname</th>
			<th width=20 align=center>Lname</th>
			<th width=20 align=center>Gender</th>
			<th width=20 align=center>Email</th>
			<th width=20 align=center>Password</th>
			<th width=20 align=center>Settings</th>
		</tr>
		";
$sql=mysql_query("SELECT * FROM tamu ORDER BY id_tamu");
  while ($r=mysql_fetch_array($sql)){		
echo"	<tr>	
			<td>$r[username]</td>
			<td>$r[fname]</td>
			<td>$r[lname]</td>
			<td>$r[gender]</td>
			<td><a href=''>$r[email]</a></td>
			<td>$r[password]</td>
			<td><a href='delete.php?id=".$r['id_tamu']."'>delete</a> <a href='form_edit.php?id=".$r['id_tamu']."'>edit</a></td>
		";}
echo"	
		</tr>
		</table><br>";

		
?>
 
</form>