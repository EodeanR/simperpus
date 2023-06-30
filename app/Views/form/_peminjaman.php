<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2><?= isset($data) ? "Ubah Peminjaman" : "Tambah Peminjaman" ?></h2>
<p>Ini form tambah peminjaman perpustakaan.</p>
<div class="form">
    <form action="<?= isset($data) ? '/peminjaman/' . $data['id'] : '/peminjaman' ?>" method="POST">
        <?php csrf_field(); ?>
        <?= isset($data) ?  '<input type="hidden" name="_method" value="PUT">' : "" ?>
        <?php $error = session('errors') ?>
        <div class="mb-3">
            <label for="anggota" class="form-label"><strong>Nama Peminjam</strong></label>
            <select class="form-select" name="anggota" aria-label="Default select example">
                <option selected><?= isset($data) ? $data['nama'] : "--- Pilih ---" ?></option>
                <?php foreach ($anggota as $a) : ?>
                    <option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
                <?php endforeach ?>
            </select>
            <?php if (isset($error['anggota'])) : ?>
                <span class="text-danger"><?= $error['anggota'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="buku" class="form-label"><strong>Buku</strong></label>
            <select class="form-select" name="buku" aria-label="Default select example">
                <option selected>--- Pilih ---</option>
                <?php foreach ($buku as $b) : ?>
                    <option value="<?= $b['id'] ?>"><?= $b['judul'] ?></option>
                <?php endforeach ?>
            </select>
            <?php if (isset($error['buku'])) : ?>
                <span class="text-danger"><?= $error['buku'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="pinjam" class="form-label"><strong>Tanggal Pinjam</strong></label>
            <input type="date" id="pinjam" class="form-control" name="pinjam">
            <?php if (isset($error['pinjam'])) : ?>
                <span class="text-danger"><?= $error['pinjam'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="kembali-asli" class="form-label"><strong>Tanggal Kembali</strong></label>
            <input type="date" id="kembali-asli" class="form-control" name="kembali-asli">
            <?php if (isset($error['kembali-asli'])) : ?>
                <span class="text-danger"><?= $error['kembali-asli'] ?></span>
            <?php endif ?>
        </div>

        <div class="button-form float-end">
            <a href="<?= previous_url(); ?>" class="btn btn-outline-danger">Kembali</a>
            <button type="submit" class="btn btn-warning"><?= isset($data) ?  "Ubah" : "Tambah" ?></button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>