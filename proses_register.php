<?php
if($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama_pelanggan, alamat, telp, username, password) value ('".$nama_pelanggan."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='register.php';</script>";
        }
    }
?>