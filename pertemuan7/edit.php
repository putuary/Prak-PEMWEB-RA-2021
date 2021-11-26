<?php
// memasukkan koneksi data base
include_once("config.php");
 
if(isset($_POST['update']))
{   $id_lama = $_POST['id'];
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul_buku'];
    $halaman = $_POST['halaman'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
        
    $result = mysqli_query($mysqli, "UPDATE buku SET id_buku='$id_buku',judul_buku='$judul',halaman=$halaman, penulis='$penulis', penerbit='$penerbit' WHERE id_buku='$id_lama'");
    

    header("Location: buku.php");
}
?>
<?php

$id = $_GET['id_buku'];
 

$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id_buku='$id'");

while($buku = mysqli_fetch_array($result))
{
    $id = $buku['id_buku'];
    $judul = $buku['judul_buku'];
    $halaman = $buku['halaman'];
    $penulis = $buku['penulis'];
    $penerbit = $buku['penerbit'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Perpustakaan ITERA</title>
    <link rel="icon" href="image/Logo_ITERA.png" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <!-- Bagian Header -->
      <header>
        <img id="logo" src="image/Logo_ITERA.png" alt="Logo ITERA" />
        <h1 class="judul">PERPUSTAKAAN INSTITUT TEKNOLOGI SUMATERA</h1>
      </header>

      <!-- Bagian NavBar   -->
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="buku.php">Daftar Buku</a></li>
          <li><a href="https://perpustakaan.itera.ac.id/#home">About</a></li>
        </ul>
      </nav>
      <div class="body">
        <!-- Bagian Main Konten dari website  -->
        <div class="main_content">
          <h1 id="judul_konten">Ubah Buku</h1>
          <a href="index.php">Kembali ke halaman Awal</a><br/><br/>
    
            <form name="update_buku" method="post" action="edit.php">
                <table border="0">
                    <tr> 
                        <td>ID Buku</td>
                        <td><input type="text" name="id_buku" value=<?php echo $id;?>></td>
                    </tr>
                    <tr> 
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul_buku" value=<?php echo $judul;?>></td>
                    </tr>
                    <tr> 
                        <td>Jumlah Halaman</td>
                        <td><input type="number" name="halaman" value=<?php echo $halaman;?>></td>
                    </tr>
                    <tr> 
                        <td>Penulis</td>
                        <td><input type="text" name="penulis" value=<?php echo $penulis;?>></td>
                    </tr>
                    <tr> 
                        <td>Penerbit</td>
                        <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id_buku'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
          
        </div>

        <!-- Lokasi Perpustakaan ITERA   -->
        <div class="lokasi">
          <div class="lokasi1">
            <img id="gambar_lokasi1" src="image/Background.jpg" />
            <a href="https://www.google.com/maps?ll=-5.358264,105.314849&z=15&t=m&hl=id-ID&gl=US&mapclient=embed&cid=915303199932108582"> Perpustakaan GKU (Gedung Kuliah Umum I , lantai 4) </a>
          </div>
          <div class="lokasi2">
            <img id="gambar_lokasi2" src="image/gedung_e.jpg"/>
            <a href="https://www.google.com/maps?ll=-5.358805,105.316733&z=15&t=h&hl=id-ID&gl=US&mapclient=embed&cid=7898532453446829304">Perpustakaan Gedung E (Lantai 2)</a>
          </div>
        </div>
      </div>

      <!-- Bagian Footer dari Website   -->
      <footer>
        <i>Copyright : Putu Ary Kusuma Yudha (119140098)</i>
      </footer>
    </div>
  </body>
</html>
