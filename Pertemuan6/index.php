<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin ITERA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    class Buah {
        public $nama;
        public $jumlah;
        public $harga;
        public $hargaperbuah;
        public $total_harga=0;

        public function __construct($nama, $jumlah, $harga) {
            $this->nama = $nama;
            $this->jumlah = $jumlah;
            $this->harga = $harga;
        }

        public function tampilNama() {
            echo $this->nama;
        }
    }

    class Mangga extends Buah {
        public function __construct($jumlah) {
            $this->nama= "Mangga";
            $this->jumlah = $jumlah;
            $this->harga = 15000;
        }
        
    }

    class Jambu extends Buah {
        public function __construct($jumlah) {
            $this->nama= "Jambu";
            $this->jumlah = $jumlah;
            $this->harga = 13000;
        }
        
    }

    class Salak extends Buah {
        public function __construct($jumlah) {
            $this->nama = "Salak";
            $this->jumlah = $jumlah;
            $this->harga = 10000;
        }
        
    }


    ?>
    <div class="container">
        <h1 class="judul">Form Belanja Di Kantin ITERA</h1>
        <form onsubmit="return false">
            <table>
                <tr>
                    <td><label for="buah">Pilih Buah</label></td>
                    <td>
                        <select name="buah" id="buah" required>
                            <option value="Mangga">Mangga</option>
                            <option value="Jambu">Jambu</option>
                            <option value="Salak">Salak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah</label></td>
                    <td><input type="number" id="jumlah" name="jumlah" required></td>
                </tr>
                <tr>
                    <td><button type="submit" onClick="tambahBarang()">Tambah</button></td>
                </tr>
            </table>
        </form>
        <br>
        <br>
        <div id="tampil"></div>
        <br>
        <br>
        <div id="total"></div>
    </div>

   
    <script src="javascript.js"></script>

    <?php
        if (isset($_GET['namabuah']) && isset($_GET['jumlahbuah'])) {
            $banyak=count($_GET['namabuah']);
            $objbuah=array();
            echo $banyak;
            for ($i=0; $i<$banyak; $i++ ) {
                if($_GET['namabuah[$i]']==="mangga") {
                    $objbuah[$i]=new Mangga($_GET['jumlahbuah[$i]']);
                }else if ($_GET['namabuah[$i]']==="jambu") {
                    $objbuah[$i]=new Jambu($_GET['jumlahbuah[$i]']);
                }else if ($_GET['namabuah[$i]']==="salak") {
                    $objbuah[$i]=new Salak($_GET['jumlahbuah[$i]']);
                }
                $objbuah.tampilNama();
            }
        }
    ?>
</body>
</html>