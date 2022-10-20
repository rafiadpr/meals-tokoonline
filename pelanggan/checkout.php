<?php
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(($cart)!=null){
        mysqli_query($conn,"insert into transaksi (id, tgl_transaksi, status) value('".$_SESSION['id']."','".date('Y-m-d')."', 'Menunggu Barang di Confirm')");
        mysqli_error($conn);
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            $subtotal = $val_produk['qty'] * $val_produk['harga'];
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi, id_produk, qty, subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$subtotal."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
    }
?>