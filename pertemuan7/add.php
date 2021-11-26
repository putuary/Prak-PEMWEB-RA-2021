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
          <h1 id="judul_konten">Tambah Buku</h1>
          <a href="buku.php">Kembali Ke Daftar Buku</a><br/><br/>
 
            <form action="add.php" method="post" name="form1">
                <table>
                    <tr> 
                        <td><label for="id_buku">ID Buku</label></td>
                        <td><input type="text" id="id_buku" name="id_buku" required></td>
                    </tr>
                    <tr> 
                        <td><label for="judul_buku">Judul Buku</label></td>
                        <td><input type="text" id="judul_buku" name="judul_buku" required></td>
                    </tr>
                    <tr> 
                        <td><label for="halaman">Jumlah Halaman</label></td>
                        <td><input type="number" id="halaman" name="halaman" required></td>
                    </tr>
                    <tr> 
                        <td><label for="penulis">Penulis</label></td>
                        <td><input type="text" id="penulis" name="penulis" required></td>
                    </tr>
                    <tr> 
                        <td><label for="penerbit">Penerbit</label></td>
                        <td><input type="text" id="penerbit" name="penerbit" required></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input type="submit" name="Submit" value="Tambah" required></td>
                    </tr>
                </table>
            </form>
           
           <?php
 
            if(isset($_POST['Submit']) and !(empty($_POST['id_buku'])) and !(empty($_POST['judul_buku'])) and !(empty($_POST['halaman'])) and !(empty($_POST['halaman'])) and !(empty($_POST['penulis'])) and !(empty($_POST['penerbit']))) {
                $id = $_POST['id_buku'];
                $judul = $_POST['judul_buku'];
                $halaman = $_POST['halaman'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                
                include_once("config.php");
                        
                $result = mysqli_query($mysqli, "INSERT INTO buku(id_buku,judul_buku,halaman,penulis,penerbit) VALUES('$id','$judul','$halaman','$penulis',' $penerbit')");
                
                echo "Buku Berhasil ditambahkan. <a href='buku.php'>Lihat Daftar Buku</a>";
            }
            ?>
          
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
