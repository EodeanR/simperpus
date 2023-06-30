<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2><?= isset($data) ? "Ubah Anggota" : "Tambah Anggota" ?></h2>
<p>Ini form tambah anggota perpustakaan.</p>
<div class="form">
    <form action="<?= isset($data) ? '/anggota/' . $data['id'] : '/anggota' ?>" method="POST">
        <?php csrf_field(); ?>
        <?= isset($data) ?  '<input type="hidden" name="_method" value="PUT">' : "" ?>
        <?php $error = session('errors') ?>
        <div class="mb-3">
            <label for="nama" class="form-label"><strong>Nama Lengkap</strong></label>
            <input type="text" name="nama" class="form-control <?= isset($error['nama']) ? 'is-invalid' : '' ?>" id="nama" placeholder="Namamu" value="<?= isset($data) ? $data['nama'] : old('nama') ?>">
            <?php if (isset($error['nama'])) : ?>
                <span class="text-danger"><?= $error['nama'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><strong>Email</strong></label>
            <input type="email" name="email" class="form-control <?= isset($error['email']) ? 'is-invalid' : '' ?>" id="email" placeholder="email@example.com" value="<?= isset($data) ? $data['email'] : old('email') ?>">
            <?php if (isset($error['email'])) : ?>
                <span class="text-danger"><?= $error['email'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label"><strong>No. Telepon</strong></label>
            <input type="number" name="telepon" class="form-control <?= isset($error['telepon']) ? 'is-invalid' : '' ?>" id="telepon" placeholder="08XXXXXXXX" value="<?= isset($data) ? $data['telepon'] : old('telepon') ?>">
            <?php if (isset($error['telepon'])) : ?>
                <span class="text-danger"><?= $error['telepon'] ?></span>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label"><strong>Alamat</strong></label>
            <textarea name="alamat" class="form-control <?= isset($error['alamat']) ? 'is-invalid' : '' ?>" id="alamat" rows="3"><?= isset($data) ? $data['alamat'] : old('alamat') ?></textarea>
            <?php if (isset($error['alamat'])) : ?>
                <span class="text-danger"><?= $error['alamat'] ?></span>
            <?php endif ?>
        </div>
        <div class="button-form float-end">
            <a href="<?= previous_url(); ?>" class="btn btn-outline-danger">Kembali</a>
            <button type="submit" class="btn btn-warning"><?= isset($data) ?  "Ubah" : "Tambah" ?></button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>