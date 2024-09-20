<?php
include "koneksi.php";
$id_rekammedis=$_GET['id_rekammedis'];
$query=mysqli_query($koneksi,"delete from rekam_medis where id_rekammedis='$id_rekammedis'");
header('location:?page=rekam_medis/index');

?>