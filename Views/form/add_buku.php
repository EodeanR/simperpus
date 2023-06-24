<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2>Tambah Buku</h2>
<p>Ini form tambah buku perpustakaan.</p>
<form action="/buku" method="POST">
    <?php csrf_field(); ?>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Buku">
    </div>
    <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Nama Pengarang">
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit">
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="number" name="tahun" class="form-control" placeholder="Tahun Terbit">
    </div>
    <div class="mb-3">
        <label for="halaman" class="form-label">Halaman</label>
        <input type="number" name="halaman" class="form-control" placeholder="Halaman Terbit">
    </div>

    <div class="mb-3">
        <label for="sinopsis" class="form-label">Sinopsis</label>
        <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<?= $this->endSection() ?>