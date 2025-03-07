// Data mahasiswa
const mahasiswa = {
    nama: "George Marvell Sitorus",
    nim: "123490017",
    prodi: "Rekayasa Instrumentasi dan Automasi"
};

// Menampilkan data mahasiswa
document.getElementById("nama").textContent = mahasiswa.nama;
document.getElementById("nim").textContent = mahasiswa.nim;
document.getElementById("prodi").textContent = mahasiswa.prodi;

function showAlert() {
    alert("Halo, saya " + mahasiswa.nama + " dari program studi " + mahasiswa.prodi + "!");
}
