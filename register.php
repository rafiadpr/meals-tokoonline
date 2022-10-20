<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="./assets/css/style-register.css">
</head>
<body>
    <!-- Header -->
    <div class="navbar">
        <div class="navbar-logo">
            <h2>Me<span>als</span></h2>
        </div>
    </div>
    <!-- register -->
    <div class="container">
        <div class="register">
            <div class="register-logo">
                <h2>Regi<span>ster</span></h2>
            </div>
            <div class="register-form">
                <form action="proses_register.php" method="post">
                    <input type="text" id="username" name="nama_pelanggan" placeholder="Name" required><br>
                    <div class="line-dark"></div>
                    <input type="text" id="email" name="alamat" placeholder="Address" required><br>
                    <div class="line-dark"></div>
                    <input type="text" id="phone" name="telp" placeholder="Phone Number" required><br>
                    <div class="line-dark"></div>
                    <input type="text" id="password" name="username" placeholder="Username" required><br>
                    <div class="line-dark"></div>
                    <input type="password" id="con-password" name="password" placeholder="Password" required><br>
                    <div class="line-dark"></div>
                    <input type="checkbox" id="checkbox" name="checkbox" value="">
                    <label for="checkbox">Keep me logged in</label><br>
                    <input type="submit" id="register" value="Register">
                </form> 
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/9c74db1b34.js" crossorigin="anonymous"></script>
</html>