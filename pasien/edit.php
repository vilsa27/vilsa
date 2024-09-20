<?php
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
$data = mysqli_fetch_array($query);
?>

<div>
    <h1>Edit Data</h1>
    <form action="?page=pasien/update" method="POST">
        <!-- Formulir HTML untuk Update -->

        <div class="mb-3">
            <label class="form-label" for="id_pasien">id pasien:</label>
            <input type="text" class="form-control" name="id_pasien" value="<?php echo $data['id_pasien']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nama_pasien">nama pasien:</label>
            <input type="text" class="form-control" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="tgl_lahir">tgl lahir:</label>
            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="jenis_kelamin">jenis kelamin:</label>
            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="alamat">alamat:</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="telp">telp:</label>
            <input type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>">
        </div>

        <!-- Tombol Submit -->
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
</div>
