<?php
include "koneksi.php";
$id_rekammedis = $_GET['id_rekammedis'];
$query = mysqli_query($koneksi, "SELECT * FROM rekam_medis WHERE id_rekammedis='$id_rekammedis'");
$data = mysqli_fetch_array($query);
?>

<div>
    <h1>Edit Data</h1>
    <form action="?page=rekam_medis/update" method="POST">
        <!-- Formulir HTML untuk Update -->

        <div class="mb-3">
            <label class="form-label" for="id_rekammedis">id rekam medis:</label>
            <input type="text" class="form-control" name="id_rekammedis" value="<?php echo $data['id_rekammedis']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="tgl">tanggal:</label>
            <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="keluhan">keluhan:</label>
            <input type="text" class="form-control" name="keluhan" value="<?php echo $data['keluhan']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="pemeriksaan">pemeriksaan:</label>
            <input type="text" class="form-control" name="pemeriksaan" value="<?php echo $data['pemeriksaan']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="obat">obat:</label>
            <input type="text" class="form-control" name="obat" value="<?php echo $data['obat']; ?>">
        </div>

        <!-- Tombol Submit -->
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
</div>
