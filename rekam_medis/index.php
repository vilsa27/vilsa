<!DOCTYPE html>
<html>
  <head>
    <title>cetak print dari database</title>
</head>
<body>
<?php
include "koneksi.php";

?>
<h1>Rekam Medis</h1>
<button class="btn btn-warning"><a style="color: black;text-decoration:none" href="?page=rekam_medis/tambah">Tambah Data</a></button>
<table class="table table-striped">
  <tr>
    <td>Id Rekam Medis</td>
    <td>Tanggal</td>
    <td>Keluhan</td>
    <td>Pemeriksaan</td>
    <td>obat</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "select * from rekam_medis");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo $data['id_rekammedis'] ?></td>
      <td><?php echo $data['tgl'] ?></td>
      <td><?php echo $data['keluhan'] ?></td>
      <td><?php echo $data['pemeriksaan'] ?></td>
      <td><?php echo $data['obat'] ?></td>
      <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=rekam_medis/hapus&id_rekammedis=<?php echo $data['id_rekammedis'] ?>">Hapus</a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=rekam_medis/edit&id_rekammedis=<?php echo $data['id_rekammedis'] ?>">Edit</a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=rekam_medis/cetak&id_rekammedis=<?php echo $data['id_rekammedis'] ?>">Cetak</a></button>
      </tr>

  <?Php
  }
  ?>

</table>
<br>
<a href="cetak.php" target="_blank"></a>
</body>
</html>
