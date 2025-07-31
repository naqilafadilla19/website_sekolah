function validasiKontak() {
  const form = document.forms["formKontak"];
  const nama = form["nama"].value.trim();
  const email = form["email"].value.trim();
  const pesan = form["pesan"].value.trim();

  if (nama === "" || email === "" || pesan === "") {
    alert("Semua field harus diisi!");
    return false;
  }

  return true;
}

function konfirmasiHapus(judul) {
  return confirm(`Yakin ingin menghapus berita: "${judul}"?`);
}
