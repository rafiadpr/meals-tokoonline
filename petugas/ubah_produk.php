<?php
  include 'navbar.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ubah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "koneksi.php";
    $qry_get_produk = mysqli_query($conn, "select * from produk where id_produk = '" . $_GET['id_produk'] . "'");
    $dt_produk = mysqli_fetch_array($qry_get_produk);
    ?>
    <div class="container">
    <h1>Ubah produk</h1>
    <form action="proses_ubah_produk.php" method="post">
        <div class="mb-3">
          <input type="hidden" class="form-control" id="id_produk" name="id_produk" value="<?= $dt_produk['id_produk'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk</label>
          <input type="text" class="form-control" id="nama" name="nama_produk" value="<?= $dt_produk['nama_produk'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $dt_produk['deskripsi'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?= $dt_produk['harga'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="foto_produk" class="form-label">Foto Produk</label>
          <input type="text" class="form-control" id="foto_produk" name="foto_produk" value="<?= $dt_produk['foto_produk'] ?>" required>
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary w-100">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>