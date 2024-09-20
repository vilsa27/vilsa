<?php
include "koneksi.php";
$id_dokter=$_POST['id_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$query=mysqli_query($koneksi,"UPDATE dokter SET nama_dokter='$nama_dokter', spesialis='$spesialis',  telp='$telp', alamat='$alamat' WHERE id_dokter='$id_dokter'");
header('location:?page=dokter/index');

?>