<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2><?= isset($data) ? "Ubah Buku" : "Tambah Buku" ?></h2>
<p>Ini form tambah buku perpustakaan.</p>
<div class="form">
    <form action="<?= isset($data) ? '/buku/' . $data['id'] : '/buku' ?>" method="POST">
        <?php csrf_field(); ?>
        <?= isset($data) ?  '<input type="hidden" name="_method" value="PUT">' : "" ?>
        <?php $error = session('errors') ?>
        <div class="mb-3">
            <label for="judul" class="form-label"><strong>Judul Buku</strong></label>
            <input type="text" name="judul" class="form-control <?= isset($error['judul']) ? 'is-invalid' : '' ?>" id="judul" placeholder="Judul Buku" value="<?= isset($data) ? $data['judul'] : old('judul') ?>">
            <?php if (isset($error['judul'])) : ?>
                <span class="text-danger"><?= $error['judul'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label"><strong>Pengarang</strong></label>
            <input type="text" name="pengarang" class="form-control <?= isset($error['pengarang']) ? 'is-invalid' : '' ?>" id="pengarang" placeholder="Nama Pengarang" value="<?= isset($data) ? $data['pengarang'] : old('pengarang') ?>">
            <?php if (isset($error['pengarang'])) : ?>
                <span class="text-danger"><?= $error['pengarang'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label"><strong>Penerbit</strong></label>
            <input type="text" name="penerbit" class="form-control <?= isset($error['penerbit']) ? 'is-invalid' : '' ?>" id="penerbit" placeholder="08XXXXXXXX" value="<?= isset($data) ? $data['penerbit'] : old('penerbit') ?>">
            <?php if (isset($error['penerbit'])) : ?>
                <span class="text-danger"><?= $error['penerbit'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label"><strong>Tahun</strong></label>
            <input type="number" name="tahun_terbit" class="form-control <?= isset($error['tahun_terbit']) ? 'is-invalid' : '' ?>" id="tahun_terbit" placeholder="08XXXXXXXX" value="<?= isset($data) ? $data['tahun_terbit'] : old('tahun_terbit') ?>">
            <?php if (isset($error['tahun_terbit'])) : ?>
                <span class="text-danger"><?= $error['tahun_terbit'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="jumlah_halaman" class="form-label"><strong>Halaman</strong></label>
            <input type="number" name="jumlah_halaman" class="form-control <?= isset($error['jumlah_halaman']) ? 'is-invalid' : '' ?>" id="jumlah_halaman" placeholder="08XXXXXXXX" value="<?= isset($data) ? $data['jumlah_halaman'] : old('jumlah_halaman') ?>">
            <?php if (isset($error['jumlah_halaman'])) : ?>
                <span class="text-danger"><?= $error['jumlah_halaman'] ?></span>
            <?php endif ?>
        </div>


        <div class="mb-3">
            <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
            <textarea name="sinopsis" class="form-control <?= isset($error['sinopsis']) ? 'is-invalid' : '' ?>" id="sinopsis" rows="3"><?= isset($data) ? $data['sinopsis'] : old('sinopsis') ?></textarea>
            <?php if (isset($error['sinopsis'])) : ?>
                <span class="text-danger"><?= $error['sinopsis'] ?></span>
            <?php endif ?>
        </div>
        <div class="button-form float-end">
            <a href="<?= previous_url(); ?>" class="btn btn-outline-danger">Kembali</a>
            <button type="submit" class="btn btn-warning"><?= isset($data) ?  "Ubah" : "Tambah" ?></button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>