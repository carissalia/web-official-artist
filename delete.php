
<?php
include('koneksi.php');

$id=$_GET['id'];
$query1=mysql_query("delete from tamu where id_tamu='$id'");
header('location:view.php');


?>
