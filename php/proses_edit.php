<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$tiket_masuk = $_POST['tiket_masuk'];

mysqli_query($koneksi, "UPDATE destinasi SET nama_tempat='$nama_tempat', lokasi='$lokasi', tiket_masuk='$tiket_masuk' WHERE id='$id'");
header("location:index.php");
?>