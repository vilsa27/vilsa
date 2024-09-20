<?php
include "koneksi.php";
$id_dokter = $_GET['id_dokter'];
$query = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
$data = mysqli_fetch_array($query);
?>

<div>
    <h1>Edit Data</h1>
    <form action="?page=dokter/update" method="POST">
        <!-- Formulir HTML untuk Update -->

        <div class="mb-3">
            <label class="form-label" for="id_dokter">id dokter:</label>
            <input type="text" class="form-control" name="id_dokter" value="<?php echo $data['id_dokter']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nama_dokter">nama dokter:</label>
            <input type="text" class="form-control" name="nama_dokter" value="<?php echo $data['nama_dokter']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="spesialis">spesialis:</label>
            <input type="text" class="form-control" name="spesialis" value="<?php echo $data['spesialis']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="telp">telp:</label>
            <input type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="alamat">alamat:</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
        </div>

        <!-- Tombol Submit -->
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
</div>
