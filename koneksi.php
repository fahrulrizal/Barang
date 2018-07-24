<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "barang";

mysql_connect($server,$user,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die("database tidak Terhubung");

 ?>
