<!DOCTYPE html>
<html>
<head><title>Tambah Destinasi</title></head>
<body><h2>Tambah Destinasi Wisata</h2>

<form method="POST" action="proses_tambah.php" onsubmit="return validasiForm()">
    Nama Tempat : <input type="text" id="nama_tempat" name="nama_tempat"><br><br>
    Lokasi : <input type="text" id="lokasi" name="lokasi"><br><br>
    Tiket Masuk : <input type="number" id="tiket_masuk" name="tiket_masuk"><br><br>
    <button type="submit">Simpan</button>
</form>
<script src="../js/script.js"></script>

</body>
</html>