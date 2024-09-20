<!-- Formulir HTML -->
<form action="?page=dokter/simpan" method="post">
    <!-- Input data lainnya -->

    <h1>Tambah Data</h1>
    <div class="mb-3">
        <label for="id_dokter" class="form-label">id dokter:</label>
        <input type="text" name="id_dokter" id="id_dokter" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama_dokter" class="form-label">nama dokter:</label>
        <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="spesialis" class="form-label">spesialis:</label>
        <input type="text" name="spesialis" id="spesialis" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="telp" class="form-label">telp:</label>
        <input type="text" name="telp" id="telp" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">alamat:</label>
        <input type="text" name="alamat" id="alamat" class="form-control" required>
    </div>

    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
