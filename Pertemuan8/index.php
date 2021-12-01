<?php
session_start();
if (isset($_SESSION['userID'])) {
    header('Location:home.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Pengguna</title>
    <link rel="stylesheet" href="assets/index.css">
    <style>
    </style>
</head>

<body>
    <img src="./assets/wave.svg" alt="wave background" class="body-bg">
    <div class="bucket">
        <h2>Halaman Login</h2>
        <br>
        <form action="login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field" required>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field" required>
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
        <br>
        <p>Belum memiliki akun, <a href="daftar.php">klik</a> untuk mendaftar</p>
    </div>
</body>

</html>