<?php
include "koneksi.php";
$id_pasien=$_POST['id_pasien'];
$nama_pasien=$_POST['nama_pasien'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$query=mysqli_query($koneksi,"UPDATE pasien SET nama_pasien='$nama_pasien',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', telp='$telp' WHERE id_pasien='$id_pasien'");
header('location:?page=pasien/index');

?>