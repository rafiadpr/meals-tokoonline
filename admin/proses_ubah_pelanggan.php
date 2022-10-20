<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."', alamat='".$alamat."', username='".$username."' where id = '".$id."' ") or die(mysqli_error($conn));
            mysqli_error($conn);
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama ."', alamat='".$alamat."', username='".$username."', password='".md5($password)."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id=".$id."';</script>";
            }
        }
        
    } 
?>