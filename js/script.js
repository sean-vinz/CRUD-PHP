function validasiForm() {
    let nama = document.getElementById("nama_tempat").value;
    let lokasi = document.getElementById("lokasi").value;
    let tiket = document.getElementById("tiket_masuk").value;
    
    if(nama == "" || lokasi == "" || tiket == ""){
        alert("Semua data harus diisi!");
        return false;
    }
    return true;
}