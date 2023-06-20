<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<h2>Anggota</h2>
<p>Ini halaman Anggota perpustakaan.</p>
<a href="anggota/new" class="btn btn-success my-3">+ Anggota</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Menu</th>
            </tr>
        </thead>
        <thead>
            <?php $i = 1;
            foreach ($anggota as $a) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['email'] ?></td>
                    <td><?= $a['telepon'] ?></td>
                    <td><?= $a['alamat'] ?></td>
                    <td>
                        <a href="anggota/<?= $a['id'] ?>/edit" class="btn btn-warning">Ubah</a>
                        <a href="anggota/<?= $a['id'] ?>" type="button" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>
<?= $this->endSection() ?>