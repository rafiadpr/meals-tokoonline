<?php
    include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-header">
                <h3 align='center'>Data Pelanggan</h3>
                    <form method="post" action="tampil_pelanggan.php" class="d-flex">
                        <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type ="submit">Search</button>
                    </form>
        <table class="table table-hover table-striped"><br>
        <a href="tambah_pelanggan.php" class="btn btn-success">Tambah Pelanggan</a>
            <thead>
                <tr>
                    <th>NO</th><th>NAMA PELANGGAN</th><th>ALAMAT</th><th>TELP</th><th>USERNAME</th><th>AKSI</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
            include "koneksi.php";
            if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $qry_pelanggan=mysqli_query($conn, "select * from pelanggan where id_pelanggan = '$cari' or nama_pelanggan like '%$cari%' or alamat like '%$cari%' or telp like '%$cari%' or username like '%$cari%'");
            }
            else{
                $qry_pelanggan = mysqli_query($conn, "select * from user where role = 'pelanggan'");
            }
            $no = 0;
            while ($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
                $no++; 
            ?>
                <tr>
                    <td><?=$data_pelanggan['id']?></td>
                    <td><?=$data_pelanggan['nama']?></td> 
                    <td><?=$data_pelanggan['alamat']?></td> 
                    <td><?=$data_pelanggan['telp']?></td>
                    <td><?=$data_pelanggan['username']?></td>
                    <td>
                        <a href="ubah_pelanggan.php?id=<?= $data_pelanggan['id'] ?>" class="btn btn-success">Ubah</a> |
                        <a href="hapus_pelanggan.php?id=<?= $data_pelanggan['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>    
                </tr>
                <?php
                }
                ?>
            </tbody>
        </div>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>