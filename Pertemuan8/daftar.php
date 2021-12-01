<?php
require_once('app/User.php');

if(isset($_POST['daftar']) and !(empty($_POST['nama'])) and !(empty($_POST['uname'])) and !(empty($_POST['pass']))) {
    $user = new User();
    $user->tambahPengguna($_POST['nama'], $_POST['uname'], $_POST['pass']);
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran Pengguna</title>
    <link rel="stylesheet" href="assets/index.css">
    <style>
    </style>
</head>

<body>
    <img src="./assets/wave.svg" alt="wave background" class="body-bg">
    <div class="bucket">
        <h2>Halaman Pendaftaran Akun</h2>
        <br>
        <form action="daftar.php" method="post" class="login">
            <label for="nama">Nama </label>
            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap..." class="login-field" required>
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field" required>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field" required>
            <input type="submit" name="daftar" value="Daftar" class="login-btn-submit">
        </form>
    </div>
</body>

</html>