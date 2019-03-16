<?php
$server="localhost";
$ussername="root";
$password="";
$database="Arkademy";
mysql_connect($server,$ussername,$password) or die("koneksi gagal");
mysql_select_db($database) or die("database tidak ditemukan");
?>

