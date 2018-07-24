<?php
include "koneksi.php";
error_reporting(0);
$kode_barang =$_GET['kode_barang'];
$query = "SELECT * FROM tb_barang WHERE kode_barang ='$kode_barang'";
$tampil = mysql_query($query);
$data = mysql_fetch_array($tampil);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DEKA - LSAPP </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Barang </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php" class="btn btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang"  value="<?php echo $data['kode_barang']?>">
        </div>
        <div class="form-group">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']?>">
        </div>
        <div class="form-group">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
              <input type="text" class="form-control" name="jenis_barang" value="<?php echo $data['jenis_barang']?>">
        </div>
        <label for="harga" class="form-label">Harga</label>
        <div class="form-group">
            <input type="text" class="form-control" name="harga" value="<?php echo $data['harga']?>">
        </div>
        <div class="form-group">
            <button type="submit" name="ubah" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</div>
<?php
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga = $_POST['harga'];

if (isset($_POST['ubah'])) {
      $update = mysql_query("UPDATE tb_barang SET nama_barang ='$nama_barang',
                                                jenis_barang ='$jenis_barang',
                                                harga='$harga'
                                                WHERE kode_barang='$_GET[kode_barang]'");

}
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
