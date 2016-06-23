
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "liva";

// Koneksi dan memilih database di server
$connection = mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database,$connection) or die("Database tidak bisa dibuka");
?>
