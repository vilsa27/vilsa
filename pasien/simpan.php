<?php
include "koneksi.php";

// Mengambil nilai dari formulir
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telp= $_POST['telp'];

// Menyimpan data ke dalam tabel
$query = mysqli_query($koneksi, "INSERT INTO pasien(id_pasien, nama_pasien, tgl_lahir, jenis_kelamin, alamat, telp) VALUES('$id_pasien', '$nama_pasien', '$tgl_lahir', '$jenis_kelaminl', '$alamat', '$telp')");

// Mengarahkan kembali ke halaman tertentu setelah proses input selesai
header('location:?page=pasien/index');
?>