<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM destinasi WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<form method="POST" action="proses_edit.php">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    Nama Tempat : <input type="text" name="nama_tempat" value="<?php echo $d['nama_tempat']; ?>"><br><br>
    Lokasi : <input type="text" name="lokasi" value="<?php echo $d['lokasi']; ?>"><br><br>
    Tiket Masuk : <input type="number" name="tiket_masuk" value="<?php echo $d['tiket_masuk']; ?>"><br><br>
    <button type="submit">Update</button>
</form>