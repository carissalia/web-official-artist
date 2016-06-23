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
	//connection and session
	include ('connect.php');
	session_start();
	if (!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
?>
</head>

<body>
<form>
<p>
  <div align="right"><a href="doLogout.php"><img src="logout_button_black.png" /></a></div>
</p>
  <p><a href="https://twitter.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/twitter-white.png" alt="socmed" /></a><a href="https://www.facebook.com/beyonce" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/facebook-white.png" alt="socmed" /></a><a href="https://instagram.com/beyonce/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/instagram-white.png" alt="socmed" /></a> <a href="http://iam.beyonce.tumblr.com/" target="_blank"><img src="http://tokimonsta.com/assets/images/icons/tumblr-white.png" alt="socmed" /></a> <a href="https://www.youtube.com/user/beyonce" target="_blank"> 
  <img src="http://tokimonsta.com/assets/images/icons/youtube-white.png" alt="socmed" /></a></p>
<p><img src="45Capture.PNG" width=100% height="450"div align="center" style="left: 0; right: 0;" /></p>
<div align="center" style="alignment-adjust:central">
<nav>
  <ul>
	<li> <a href="Home.php">HOME</a></li>
	<li> <a href="album.php">ALBUM</a></li>
    <li> <a href="bio.php">PROFIL</a></li>
    <li><a href="galaru.php">GALLERY</a></li>
     <li><a href="video.php">VIDEO</a></li>
      <li><a href="contac.php">CONTACT</a></li>
    </ul>
  </nav>
  </div>
<marquee bgcolor="#FFEFC6"><font color="#000000">Welcome To <?php 
			//login name
			if (isset($_SESSION['username']))
			{
			
				echo $_SESSION['username'];
			}
			?> 
  In My Official Website</font></marquee>
<table width="1506" height="379" border="1" align="center">
  <tr>
    <td width="252">
    <img src="7753805772_be2a00d0f6.gif" width="219" height="199" />
    <P>
    </P
>
<iframe src="http://widget.websta.me/in/beyonce/?s=100&w=2&h=3&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:230px; height: 345px" ></iframe> <!-- websta - web.stagram.com -->
</td>
 <td width="110"><div align="center"><font size="45"style="font-family:Copperplate Gothic Bold" color="#FFFFFF">
 B<br />
   E<br />
   Y<br />
   O<br />
   N<br />
   C<br />
   E 
      </font>
</div></td>
        <td width="0"></strong>

    <td width="1190">
    <table>
  <p><div id="main_vid"

  </div>
  <video src="Beyoncé - Love On Top (live on the run tour) (1).mp4" width="620" height="440" controls="controls"
  autoplay="autoplay"
  </video></div>
</p>
</table>
  </tr>
</table>



<p>&nbsp;</p>




 
</form>



</body>
</html>
