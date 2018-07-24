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
        <h1 class="h2">Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Barang</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary">
                    <th class="text-white text-center">Kode Barang</th>
                    <th class="text-white text-center">Nama Barang</th>
                    <th class="text-white text-center">Jenis Barang</th>
                    <th class="text-white text-center">Harga</th>
                    <th class="text-white text-center">Aksi</th>
                </tr>
            </thead>
           <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_barang";
            $tampil = mysql_query($query);
            while($data = mysql_fetch_array($tampil)){

            ?>
            <tbody class="text-center">
                <tr>
                    <td class="text-center"><?php echo $data['kode_barang']?></td>
                    <td class="text-center"><?php echo $data['nama_barang']?></td>
                    <td class="text-center"><?php echo $data['jenis_barang']?></td>
                    <td class="text-center"><?php echo $data['harga']?></td>
                    <td>
                        <a href="?&aksi=ubah&kode_barang=<?php echo $data['kode_barang']?>" onclick="return confirm('Apakah Anda Yakin untuk MengUbah ini?')" class="btn btn-secondary btn-sm"><i class="fa fa-pencil"></i> </a>
                        <a href="?&aksi=hapus&kode_barang=<?php echo $data['kode_barang']?>" onclick="return confirm('Apakah Anda Yakin untuk Menghapus ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
              		</td>
                </tr>
            </tbody>
          <?php
        }
          ?>

        </table>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>
