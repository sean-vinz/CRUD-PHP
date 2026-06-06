<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Destinasi Wisata</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <h2>🏞️ Daftar Destinasi Wisata Bandung</h2>
    <img src="../gambar/banner.jpg" class="banner">

<form method="GET">
    <input type="text" name="cari" placeholder="Cari destinasi">
    <button type="submit">Cari</button>
</form>

<br><a class="tambah" href="tambah.php">+ Tambah Destinasi</a><br><br>
<table border="1" cellpadding="10">
<tr>
    <th>No</th><th>Nama Tempat</th><th>Lokasi</th><th>Tiket Masuk</th><th>Aksi</th>
</tr>
<?php
$no = 1;
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $query = mysqli_query($koneksi, "SELECT * FROM destinasi WHERE nama_tempat LIKE '%$cari%'");
}else{
    $query = mysqli_query($koneksi, "SELECT * FROM destinasi");
}
while($d = mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_tempat']; ?></td>
    <td><?php echo $d['lokasi']; ?></td>
    <td>Rp <?php echo $d['tiket_masuk']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>"onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
    </td>
</tr>
<?php 
} 
?>

</table>
</div> 
</body>
</html>