<?php
include "koneksi.php";

?>
<h1>Pasien</h1>
<button class="btn btn-warning"><a style="color: black;text-decoration:none" href="?page=pasien/tambah">Tambah Data</a></button>
<table class="table table-striped">
  <tr>
    <td>Id pasien</td>
    <td>Nama pasien</td>
    <td>Tgl lahir</td>
    <td>Jenis Kelamin</td>
    <td>Alamat</td>
    <td>Telp</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "select * from pasien");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo $data['id_pasien'] ?></td>
      <td><?php echo $data['nama_pasien'] ?></td>
      <td><?php echo $data['tgl_lahir'] ?></td>
      <td><?php echo $data['jenis_kelamin'] ?></td>
      <td><?php echo $data['alamat'] ?></td>
      <td><?php echo $data['telp'] ?></td>
      <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=pasien/hapus&id_pasien=<?php echo $data['id_pasien'] ?>">Hapus</a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=pasien/edit&id_pasien=<?php echo $data['id_pasien'] ?>">Edit</a>
      </tr>

  <?Php
  }
  ?>

</table>
