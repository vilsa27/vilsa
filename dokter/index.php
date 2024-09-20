<?php
include "koneksi.php";

?>
<h1>Dokter</h1>
<button class="btn btn-warning"><a style="color: black;text-decoration:none" href="?page=dokter/tambah">Tambah Data</a></button>
<table class="table table-striped">
  <tr>
    <td>Id dokter</td>
    <td>Nama dokter</td>
    <td>Spesialis</td>
    <td>Telp</td>
    <td>Alamat</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "select * from dokter");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo $data['id_dokter'] ?></td>
      <td><?php echo $data['nama_dokter'] ?></td>
      <td><?php echo $data['spesialis'] ?></td>
      <td><?php echo $data['telp'] ?></td>
      <td><?php echo $data['alamat'] ?></td>
      <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/hapus&id_dokter=<?php echo $data['id_dokter'] ?>">Hapus</a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/edit&id_dokter=<?php echo $data['id_dokter'] ?>">Edit</a>
      </tr>

  <?Php
  }
  ?>

</table>
