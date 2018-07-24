<?php
include "koneksi.php";
$kode_barang = $_GET['kode_barang'];
$query = mysql_query("DELETE FROM tb_barang WHERE kode_barang='$kode_barang'");

if ($query) {
  header("location:index.php");
}
?>
