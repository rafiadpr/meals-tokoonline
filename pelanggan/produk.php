<?php
    session_start();
    include "koneksi.php";
    include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-products2.css">
</head>
<body>

    <!-- Products -->
    <section class="products">
        <div class="container">
            <div class="card-wrapper">
            <?php
                $qry_produk=mysqli_query($conn,"select * from produk");
                while($dt_produk=mysqli_fetch_array($qry_produk)){
            ?>
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/<?=$dt_produk['foto_produk']?>">
                    </div>
                    <div class="card-title">
                        <div class="title-desc">
                            <h3><?=$dt_produk['nama_produk']?></h3>
                            <h5>Served with Ice Tea</h5>
                        </div>
                        <div class="title-price">
                            <h3>Rp <?=$dt_produk['harga']?></h3>
                        </div>
                    </div>
                    <div class="card-desc">
                        <p><?=$dt_produk['deskripsi']?></p>
                    </div>
                    <div class="card-add">
                        <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>">
                        <button>+</button>
                        </a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>