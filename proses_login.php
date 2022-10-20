<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    include "koneksi.php";

    $q = mysqli_query($conn, "select * from user where username='" . $username . "' and password='" . md5($password) . "'");
    $r = mysqli_fetch_array($q);
    if (mysqli_num_rows($q) > 0) {
        $_SESSION['id'] = $r['id'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['password'] = $r['password'];
        $_SESSION['role'] = $r['role'];
        $_SESSION['status_login'] = true;
        if ($r['role'] == "admin") {
            header('location:./admin/home.php');
        }
        else if ($r['role'] == "petugas") {
            header('location:./petugas/home.php');
        }
        else if ($r['role'] == "pelanggan") {
            header('location:./pelanggan/home.php');
        } 
        else {
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
        }
    }