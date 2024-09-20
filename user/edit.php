<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<div>
    <h1>Edit Data</h1>
    <form action="?page=user/update" method="POST">
        <!-- Formulir HTML untuk Update -->

        <div class="mb-3">
            <label class="form-label" for="id">Id:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $data['id']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="username">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
        </div>


        <div class="mb-3">
            <label class="form-label" for="password">Password:</label>
            <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="level">Level:</label>
            <input type="text" class="form-control" name="level" value="<?php echo $data['level']; ?>">
        </div>

        <!-- Tombol Submit -->
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
</div>
