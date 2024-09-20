<?php
include "koneksi.php";

// Mengambil nilai dari formulir
$id_rekammedis = $_POST['id_rekammedis'];
$tgl = $_POST['tgl'];
$keluhan = $_POST['keluhan'];
$pemeriksaan = $_POST['pemeriksaan'];
$obat = $_POST['obat'];

// Menyimpan data ke dalam tabel
$query = mysqli_query($koneksi, "INSERT INTO rekam_medis(id_rekammedis, tgl, keluhan, pemeriksaan, obat) VALUES('$id_rekammedis', '$tgl', '$keluhan', '$pemeriksaan', '$obat')");

// Mengarahkan kembali ke halaman tertentu setelah proses input selesai
header('location:?page=rekam_medis/index');
?>