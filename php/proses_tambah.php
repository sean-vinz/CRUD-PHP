<?php
include 'koneksi.php';
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$tiket_masuk = $_POST['tiket_masuk'];

mysqli_query($koneksi, "INSERT INTO destinasi VALUES ('','$nama_tempat','$lokasi','$tiket_masuk')");
header("location:index.php");
?>