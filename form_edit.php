<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
include "koneksi.php";
$abc = $_GET ['id'];
$query1=mysql_query("select * from tamu where id_tamu = '$abc'",$connection) or die (mysql_error());
 while ($gym=mysql_fetch_array($query1)){ 
 $username = $gym['username'];
 $fname = $gym['fname'];
 $lname = $gym['lname'];
 $gender = $gym['gender'];
 $email = $gym['email'];
 $password = $gym['password'];
 $id_tamu = $gym['id_tamu'];
 }
?>
<form action="edit.php" method="POST">
<input type="hidden" value ="<?php echo $id_tamu; ?>" name = "id_tamu" />
<font face="Tahoma" color="green" size="3"><b><br>
Edit
 Member</b></font>
<table align="left">

<tr>
<td width="68"><font color="black" size="2" face="Tahoma">Username</font></td>
<td width="10">:</td>
<td width="176"><input value = "<?php echo $username; ?>" type="text" name="Username" id="Username" ></td>
</tr>
<tr>
<td height="24"><font color="black" size="2" face="Tahoma">Fname</font></td>
<td>:</td>
<td><input value = "<?php echo $fname; ?>" type="text" name="Fname" id="Fname" ></td>
</tr>
<tr>
      <td>Lname</td>
      <td>:</td>
      <td><label for="Lname"></label>
      <input value = "<?php echo $lname; ?>" type="text" name="Lname" id="Lname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>:</td>
      <td><label for="Gender"></label>
      <input value = "<?php echo $gender; ?>" type="text" name="Gender" id="Gender" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><label for="Email"></label>
      <input value = "<?php echo $email; ?>" type="text" name="Email" id="Email" /></td>
    </tr>

    <tr>
      <td height="31">Password</td>
      <td>:</td>
      <td><label for="Password"></label>
      <input value = "<?php echo $password; ?>" type="text" name="Password" id="Password" /></td>
    </tr>
    <tr>
<td height="40"></td><td></td>
<td><input type="submit" value="Edit">
<font face="Tahoma" color="green" size="2">
<a href="view.php" style="text-decoration:none">Back</font></a>
</td>
</tr>
</table>
</form>
</body>
</html>
</body>
</html>