<!-- Formulir HTML -->
<form action="?page=rekam_medis/simpan" method="post">
    <!-- Input data lainnya -->

    <h1>Tambah Data</h1>
    <div class="mb-3">
        <label for="id_rekammedis" class="form-label">id rekam medis:</label>
        <input type="text" name="id_rekammedis" id="id_rekammedis" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="tgl" class="form-label">tanggal:</label>
        <input type="date" name="tgl" id="tgl" class="form-control" required>
    </div>

    <!-- Jenis Kelamin -->
    <div class="mb-3">
        <label for="keluhan" class="form-label">keluhan:</label>
        <input type="text" name="keluhan" id="keluhan" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="pemeriksaan" class="form-label">pemeriksaan:</label>
        <input type="text" name="pemeriksaan" id="pemeriksaan" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="obat" class="form-label">obat:</label>
        <input type="text" name="obat" id="obat" class="form-control" required>
    </div>

    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
