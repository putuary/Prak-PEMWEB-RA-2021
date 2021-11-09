<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

function penjumlahan($x, $y) {
    $hasil = $x+$y;
    return $hasil;
}

function pengurangan($x, $y) {
    $hasil = $x-$y;
    return $hasil;
}

function pembagian($x, $y) {
    $hasil = $x/$y;
    return $hasil;
}

function perkalian($x, $y) {
    $hasil = $x*$y;
    return $hasil;
}

function modulus($x, $y) {
    $hasil = $x%$y;
    return $hasil;
}
?>

<div class="container">
    <h1 class="judul">Kalkulator Sederhana</h1>
    <form method="post" action="tugas1.php">
    <label for="bilangan1">Bilangan 1 = </label>
    <input type="number" id="bilangan1" name="bilangan1" required> <br>
    <label for="bilangan2">Bilangan 2 = </label>
    <input type="number" id="bilangan2" name="bilangan2" required><br>
    <button type="submit" value="hasil" name="hasil">Hasil</button><br>
    </form>


    <?php if(isset($_POST['hasil']) and !(empty($_POST['bilangan1'])) and !(empty($_POST['bilangan2']))){
        $bil1 = $_POST['bilangan1'];
        $bil2 = $_POST['bilangan2']; ?>

        <p>
            Berikut Merupakan hasil dari setiap operasi <br><br>
            PENJUMLAHAN <br>
            Operator : + <br>
            Hasil : <?php echo penjumlahan($bil1,$bil2); ?>
            <br><br>
            PENGURANGAN <br>
            Operator : - <br>
            Hasil : <?php echo pengurangan($bil1,$bil2); ?>
            <br><br>
            PERKALIAN <br>
            Operator : * <br>
            Hasil : <?php echo perkalian($bil1,$bil2); ?>
            <br><br>
            PEMBAGIAN <br>
            Operator : / <br>
            Hasil : <?php echo pembagian($bil1,$bil2); ?>
            <br><br>
            MODULUS <br>
            Operator : % <br>
            Hasil : <?php echo modulus($bil1,$bil2); ?>
            <br><br>

    <?php } ?>
</div>
</body>
</html>