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
                <h3 align='center'>Data Produk</h3>
                    <form method="post" action="tampil_produk.php" class="d-flex">
                        <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type ="submit">Search</button>
                    </form>
        <table class="table table-hover table-striped"><br>
        <?php
        include "koneksi.php";
        $qry_produk = mysqli_query($conn, "select * from produk");
        $no = 0;
        $data_produk = mysqli_fetch_array($qry_produk); {
        $no++; ?>
        <a href="./tambah_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" class="btn btn-success">Tambah Produk</a>
    <?php
    }
    ?>
            <thead>
                <tr>
                    <th>NO</th><th>NAMA PRODUK</th><th>DESKRIPSI</th><th>HARGA</th><th>FOTO PRODUK</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "koneksi.php";
            if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $qry_produk=mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or deskripsi like '%$cari%' or harga like '%$cari%'");
            }
            else{
                $qry_produk = mysqli_query($conn, "select * from produk");
            }
            $no = 0;
            while ($data_produk = mysqli_fetch_array($qry_produk)) {
                $no++; 
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_produk['nama_produk']?></td> 
                    <td><?=$data_produk['deskripsi']?></td> 
                    <td><?=$data_produk['harga']?></td>
                    <td><img src="../assets/img/<?=$data_produk['foto_produk']?>" style="width:100px"></td>
                    <td>
                            <a href="ubah_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" class="btn btn-success">Ubah</a> |
                            <a href="hapus_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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