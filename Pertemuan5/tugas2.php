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
        <h1 class="judul">Mengurutkan Kata</h1>
        
        <?php
        
        function mengurutkan($data) {
            $panjang_kata=0;
            $jumlah=count($data);
            for ($i=0; $i<$jumlah; $i++) {
                $panjang=strlen($data[$i]);
                if($panjang_kata>$panjang) {
                    $panjang_kata=$panjang;
                }
            }
            for($j=0; $j<$jumlah;$j++) {
                for($k=0; $k<$jumlah-1; $k++) {
                    if($data[$k][0]>$data[$k+1][0]) {
                        $temp=$data[$k];
                        $data[$k]=$data[$k+1];
                        $data[$k+1]=$temp;
                    }
                }
            }
            return $data;
        }


        $kata = array("larine","aduh","qifuat","toda","anevi","samid","kifuat");
        echo "<h4>Data Awal</h4>";
        echo "<p>";
        foreach($kata as $value) {
            echo "$value <br>";
        }
        echo "</p>";

        $hasil=mengurutkan($kata);

        echo "<br><h4>Data Setelah Diurutkan</h4>";
        echo "<p>";
        foreach($hasil as $value) {
            echo "$value <br>";
        }
        echo "</p>";
        ?>

    </div>
</body>
</html>