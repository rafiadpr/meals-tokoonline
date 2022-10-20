<?php
session_start();
include "navbar.php";
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Histori</title>
  <link rel="stylesheet" href="../assets/css/style-history2.css">
</head>

<body>
  <!-- Histori Section -->  
  <section class="history">
    <!-- Container -->
    <div class="container">
    <?php
      include "koneksi.php";
      $sql = mysqli_query($conn, "SELECT p.nama_produk, p.foto_produk, t.tgl_transaksi, p.harga, d.qty, d.subtotal, t.id_transaksi, t.status FROM transaksi t JOIN detail_transaksi d ON t.id_transaksi=d.id_transaksi JOIN produk p ON d.id_produk=p.id_produk WHERE t.id='$id' order by id_transaksi desc");
      $no = 0;

      $pan = mysqli_query($conn, "select * from transaksi where id = '$id' ");
      $f = mysqli_num_rows($pan);
      if ($f == 0) {
        echo "<div class='history-empty'><h3>tidak ada barang yang dibeli</h3></div>";
      } elseif ($f > 0) {
        while ($histori = mysqli_fetch_array($sql)) {
          $no++;
          $hapus = "<a href='hapushistori.php?id_transaksi=$histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='btn btn-danger'>X</a>";
        //   Cek Diterima
          $qry_cek_diterima=mysqli_query($conn,"select * from transaksi where status = '".$histori['status']."'");
          $dt_diterima=mysqli_fetch_array($qry_cek_diterima);
            if($dt_diterima['status'] == 'Barang Sudah diterima Pelanggan'){
                $button_diterima = "<a href='diterima.php?id=".$histori['id_transaksi']."' onclick='return confirm(\"Produk berhasil diterima\")'>Diterima</a>"; 
            }
            else{
              $button_diterima = "";
            }
      ?>
        <div class="history-wrapper">
            <div class="history-img">
                <img src="../assets/img/<?= $histori['foto_produk'] ?>">
            </div>
            <div class="history-title">
                <h3><?= $histori['nama_produk']?> </h3>
            </div>
            <div class="history-date">
                <h6><?= $histori['tgl_transaksi'] ?></h6>
            </div>
            <div class="history-qty">
                <h6><?= $histori['qty'] ?></h6>
            </div>
            <div class="history-price">
                <h6>Rp <?=$histori['harga']?></h6>
            </div>
            <div class="history-total-price">
                <h6>RP <?=$histori['subtotal']?></h6>
            </div>
            <div class="history-status">
                <h4><?=$histori['status']?></h4>
            </div>
            <div class="history-delete">
                <?=$button_diterima?>
            </div>
        </div>
        <?php
        }
    }
    ?>
    </div>
  </section>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>