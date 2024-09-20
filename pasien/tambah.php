<!-- Formulir HTML -->
<form action="?page=pasien/simpan" method="post">
    <!-- Input data lainnya -->

    <h1>Tambah Data</h1>
    <div class="mb-3">
        <label for="id_pasien" class="form-label">id pasien:</label>
        <input type="text" name="id_pasien" id="id_pasien" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama_pasien" class="form-label">nama pasien:</label>
        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required>
    </div>

    <!-- Jenis Kelamin -->
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">tgl lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">alamat:</label>
        <input type="text" name="alamat" id="alamat" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="telp" class="form-label">telp:</label>
        <input type="text" name="telp" id="telp" class="form-control" required>
    </div>

    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
