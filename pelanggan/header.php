<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style-toko.css">

</head>
<body>

    <!-- Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            <div class="jumbotron-caption">
                <div class="caption">
                    <h2>Your Favorite Food <br>
                        Delivered Hot & <br>
                        Fresh</h2>
                    <p>Healthy switcher chefs do all the prep work, like peeding, <br>
                        chopping & marinating, so you can cook a fresh food.</p>
                    <a href="produk.php"><button>Order Now</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Jumbotron -->

    <!-- Background -->
    <div class="background">
        <img src="../assets/img/Ellipse 1.png" alt="">
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>