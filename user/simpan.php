<?php
include "koneksi.php";

// Mengambil nilai dari formulir
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$level = $_POST['level'];

// Menyimpan data ke dalam tabel
$query = mysqli_query($koneksi, "INSERT INTO user(username, nama, password, level) VALUES ('$username', '$nama', '$password', '$level')");

// Mengarahkan kembali ke halaman tertentu setelah proses input selesai
header('location:?page=user/index');
?>
