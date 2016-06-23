
<?php
include('koneksi.php');

$id=$_POST['id_tamu'];	
$Username=$_POST['Username'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

$query3=mysql_query("UPDATE tamu SET username='$Username', Fname='$Fname', Lname='$Lname', gender='$Gender', email='$Email', password='$Password' where id_tamu='$id'",$connection);



header('location:view.php');

?>
