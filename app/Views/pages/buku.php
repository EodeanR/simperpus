<?= $this->extend('layouts/index') ?>

<?= $this->section('content') ?>

<h2>Buku</h2>
<p>Ini halaman Buku perpustakaan.</p>

<a href="buku/new" class="btn btn-warning my-3">+ Buku</a>

<?php if (session('success')) : ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <?= session('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ?>

<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Halaman</th>
                <th>Sinopsis</th>
            </tr>
        </thead>
        <thead>
            <?php $i = 1;
            foreach ($buku as $b) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $b['judul'] ?></td>
                <td><?= $b['pengarang'] ?></td>
                <td><?= $b['penerbit'] ?></td>
                <td><?= $b['tahun_terbit'] ?></td>
                <td><?= $b['jumlah_halaman'] ?></td>
                <td><?= $b['sinopsis'] ?></td>
                <td>
                    <form action="buku/<?= $b['id'] ?>" method="POST" class="d-md-flex gap-2">
                        <a href="buku/<?= $b['id'] ?>/edit" class="btn btn-sm btn-success">Ubah</a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button id="btn-delete" type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>

<?= $this->endSection() ?>