<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<h2>Buku</h2>
<p>Ini halaman buku perpustakaan.</p>
<a href="buku/new" class="btn btn-success my-3">+ Buku</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Halaman</th>
                <th>Sinopsis</th>
                <th>Menu</th>
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
                    <td><?= $b['tahun'] ?></td>
                    <td><?= $b['halaman'] ?></td>
                    <td><?= $b['sinopsis'] ?></td>
                    <td>
                        <a href="buku/<?= $b['id'] ?>/edit" class="btn btn-warning">Ubah</a>
                        <a href="buku/<?= $b['id'] ?>" type="button" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>
<?= $this->endSection() ?>