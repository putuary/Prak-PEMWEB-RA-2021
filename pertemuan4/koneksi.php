<?php
$host="localhost";
$user="root";
$password="";
$db="belajar_ajax";

$koneksi = mysqli_connect($host,$user,$password,$db);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>