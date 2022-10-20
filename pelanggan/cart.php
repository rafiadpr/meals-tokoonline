<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-cart.css">
</head>
<body>
    <!-- Keranjang -->
    <section class="cart">
    <!-- Container -->
    <div class="container-cart">
    <?php
        session_start();
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk):
            $subtotal = $val_produk['qty'] * $val_produk['harga'];
    ?>
        <div class="cart-wrapper">
          <div class="cart-img">
            <img src="../assets/img/<?=$val_produk['foto_produk']?>">
          </div>
          <div class="cart-title">
            <h3><?= $val_produk['nama_produk'] ?></h3>
            <h5>Served with Ice Tea</h5>
          </div>
          <div class="cart-qty">
            <h6><?= $val_produk['qty'] ?></h6>
          </div>
          <div class="cart-price">
            <h6>Rp. <?= $val_produk['harga'] ?></h6>
          </div>
          <div class="cart-total-price">
            <h6>Rp. <?= $subtotal ?></h6>
          </div>
          <div class="cart-delete">
            <a href="hapus_cart.php?id=<?= $key_produk ?>">X</a>
          </div>
        </div>
        <?php endforeach ?>
        <?php
              if (isset($val_produk)) {
                echo "<div class='cart-line'></div><div class='cart-checkout'><a href='checkout.php'>Checkout</a></div>";
              } else {
                echo "<div class='cart-empty'><h3>Tidak ada produk di keranjang</h3></div>";
              }
        ?>
    </div>
  </section>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>