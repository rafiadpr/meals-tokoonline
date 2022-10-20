<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, alamat, telp, username, password, role) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
?>