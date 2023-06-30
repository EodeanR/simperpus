<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2>Pengembalian</h2>
<p>Ini halaman Pengembalian perpustakaan.</p>

<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Nama Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali(Asli)</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pengembalian as $p) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['email'] ?></td>
                    <td><?= $p['telepon'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td>
                        <a href="pengembalian/<?= $p['id'] ?>" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>