<?php
include_once("config.php");
 
$id = $_GET['id_buku'];
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE id_buku='$id'");
 
header("Location:buku.php");
?>