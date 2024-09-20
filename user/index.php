<?php
include "koneksi.php";

?>
<h1>User</h1>
<button class="btn btn-warning"><a style="color: black;text-decoration:none" href="?page=user/tambah">Tambah Data</a></button>
<table class="table table-striped">
  <tr>
    <td>Id</td>
    <td>username</td>
    <td>Nama</td>
    <td>Password</td>
    <td>level</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "select * from user");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['username'] ?></td>
      <td><?php echo $data['nama'] ?></td>
      <td><?php echo $data['password'] ?></td>
      <td><?php echo $data['level'] ?></td>
      <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=user/hapus&id=<?php echo $data['id'] ?>">Hapus</a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=user/edit&id=<?php echo $data['id'] ?>">Edit</a>
      </tr>

  <?Php
  }
  ?>

</table>
