<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="judul">Daftar Bilangan Prima 1 s.d 50</h1>
        <?php
        echo "<p>";
        function cariPrima ($angka) {
            $hitung=0;
            for ($i=2;$i<$angka;$i++) {
                if($angka%$i===0) {
                    $hitung+=1;
                }
            }
            if ($hitung===0) {
                echo "$angka <br>";
            }
        }
        echo "</p>";

        for ($i = 2; $i <= 50; $i++) {
            cariPrima($i);
        }
        ?>
    </div>
</body>
</html>