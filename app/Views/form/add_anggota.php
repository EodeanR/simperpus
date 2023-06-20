<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2>Tambah Anggota</h2>
<p>Ini form tambah anggota perpustakaan.</p>
<form action="/anggota" method="POST">
    <?php csrf_field(); ?>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Namamu">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
    </div>
    <div class="mb-3">
        <label for="telepon" class="form-label">No. Telepon</label>
        <input type="number" name="telepon" class="form-control" id="telepon" placeholder="081234567890">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<?= $this->endSection() ?>