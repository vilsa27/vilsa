<?php
include "koneksi.php";

// Mengambil nilai dari formulir
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$telp= $_POST['telp'];
$alamat = $_POST['alamat'];

// Menyimpan data ke dalam tabel
$query = mysqli_query($koneksi, "INSERT INTO dokter(id_dokter, nama_dokter, spesialis, alamat, telp) VALUES('$id_dokter', '$nama_dokter', '$spesialis', '$alamat', '$telp')");

// Mengarahkan kembali ke halaman tertentu setelah proses input selesai
header('location:?page=dokter/index');
?>