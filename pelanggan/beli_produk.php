<?php
    include "koneksi.php";
    include "navbar.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-buyproducts.css">
</head>
<body>

    <!-- Buy Products -->
    <div class="buy-products">
        <div class="buy-content">
            <div class="buy-card">
                <div class="buy-desc">
                    <div class="products-img">
                        <img src="../assets/img/<?=$dt_produk['foto_produk']?>">
                    </div>
                    <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
                    <div class="addtocart">
                            <div class="products-desc">
                                <h2><?=$dt_produk['nama_produk']?></h2>
                                <h5>Served with Ice Tea</h5>
                                <p><?=$dt_produk['deskripsi']?></p>
                                <div class="input-price">
                                    <input type="number" name="jumlah_beli" value="1" id="input-buy" min="0">
                                    <h4>RP. <?=$dt_produk['harga']?></h4>
                                </div>
                            </div>
                            <div class="buttonadd">
                                <button type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- End of Buy -->
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>