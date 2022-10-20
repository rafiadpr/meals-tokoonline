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
                <h3 align='center'>Data transaksi</h3>
                <form method="post" action="tampil_transaksi.php" class="d-flex">
                        <input class="form-control" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type ="submit">Search</button>
                    </form>
        <table class="table table-hover table-striped"><br>
            <thead>
                <tr>
                    <th>NO TRANSAKSI</th>
                    <th>ID PELANGGAN</th>
                    <th>NAMA PELANGGAN</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "koneksi.php";
            if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $qry_transaksi=mysqli_query($conn, "select * from transaksi join user on user.id=transaksi.id where user.id = '$cari' or user.nama like '%$cari%' or transaksi.status like '%$cari%' or transaksi.id_transaksi like '%$cari%'");
            }
            else{
            $qry_transaksi = mysqli_query($conn, "select * from transaksi join user on user.id=transaksi.id order by id_transaksi desc");
            }
            $no = 0;
            while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
                $no++;
            ?>
                <tr>
                    <td><?=$data_transaksi['id_transaksi']?></td>
                    <td><?=$data_transaksi['id']?></td>
                    <td><?=$data_transaksi['nama']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td>
                        <form action="proses_ubah_status.php" method="post">
                            <input type="hidden" name="id_transaksi" value="<?= $data_transaksi['id_transaksi']?>">
                            <select name="status" onchange='if(this.value != 0) { this.form.submit(); }'>
                                <option value="Pilih Status">Pilih Status</option>
                                <option value="Barang Diconfirm oleh Petugas">Barang baru</option>
                                <option value="Barang Sedang Dikemas">Barang dikemas</option>
                                <option value="Barang Sedang Dikirim">Barang dikirim</option>
                                <option value="Barang Sudah diterima Pelanggan">Barang diterima</option>
                            </select>
                        </form>
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