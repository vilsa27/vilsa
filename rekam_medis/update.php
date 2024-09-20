<?php
include "koneksi.php";
$id_rekammedis=$_POST['id_rekammedis'];
$tgl=$_POST['tgl'];
$keluhan=$_POST['keluhan'];
$pemeriksaan=$_POST['pemeriksaan'];
$obat=$_POST['obat'];
$query=mysqli_query($koneksi,"UPDATE rekam_medis SET tgl='$tgl',keluhan='$keluhan',pemeriksaan='$pemeriksaan', obat='$obat' WHERE id_rekammedis='$id_rekammedis'");
header('location:?page=rekam_medis/index');

?>