<?php
  include 'navbar.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ubah Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "koneksi.php";
    $qry_get_user = mysqli_query($conn, "select * from user where id = '".$_GET['id']."'");
    $dt_user = mysqli_fetch_array($qry_get_user);
    ?>
    <div class="container">
    <h1>Ubah Pelanggan</h1>
    <form action="proses_ubah_pelanggan.php" method="post">
        <div class="mb-3">
          <input type="hidden" class="form-control" id="id" name="id" value="<?= $dt_user['id'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $dt_user['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dt_user['alamat'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="telepon" class="form-label">Telepon</label>
          <input type="number" class="form-control" id="telp" name="telp" value="<?= $dt_user['telp'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= $dt_user['username'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="<?= $dt_user['password'] ?>" required>
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary w-100">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>