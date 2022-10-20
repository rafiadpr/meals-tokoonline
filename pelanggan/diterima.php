<?php
if($_GET){
    include "koneksi.php";
    $id_transaksi=$_GET['id'];
        $update=mysqli_query($conn,"update transaksi set status='Diterima' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
        echo "<script>alert('Barang Sukses Di Confirm');location.href='histori_pembelian.php';</script>";
    }
?>