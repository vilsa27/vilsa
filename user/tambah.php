<!-- Formulir HTML -->
<form action="?page=user/simpan" method="post">
    <!-- Input data lainnya -->

    <h1>Tambah Data</h1>

    <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <!-- Jenis Kelamin -->
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="level" class="form-label">Level:</label>
        <input type="text" name="level" id="level" class="form-control" required>
    </div>

    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
