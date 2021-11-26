<?php
include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id_buku DESC");
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
          <h1 id="judul_konten">Daftar Buku Perpustakaan ITERA</h1>
          <a href="add.php">Tambah Buku</a><br/><br/>
 
            <table border=1>
                <tr>
                    <th>ID Buku</th> <th>Nama Buku</th> <th>Jumlah Halaman</th> <th>Penulis</th> <th>Penerbit</th><th>Update</th>
                </tr>
                <?php  
                while($buku = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$buku['id_buku']."</td>";
                    echo "<td>".$buku['judul_buku']."</td>";
                    echo "<td>".$buku['halaman']."</td>";
                    echo "<td>".$buku['penulis']."</td>";    
                    echo "<td>".$buku['penerbit']."</td>";       
                    echo "<td><a href='edit.php?id_buku=$buku[id_buku]'>Edit</a> | <a href='delete.php?id_buku=$buku[id_buku]'>Delete</a></td></tr>";        
                }
                ?>
            </table>
        </div>

        <!-- Lokasi Perpustakaan ITERA   -->
        <div class="lokasi">
            <h2 id="judul_konten">Lokasi Perpustakaan ITERA</h2>
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


<html>
<head>    
    <title>Perpustakaan</title>
</head>
 
<body>
   
</body>
</html>