<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2>Peminjaman</h2>
<p>Ini halaman Peminjaman perpustakaan.</p>

<a href="peminjaman/new" class="btn btn-warning my-3">+ Peminjaman</a>

<div class="table-responsive">
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Nama Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($peminjaman as $p) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['judul'] ?></td>
                <td><?= $p['tanggal_peminjaman'] ?></td>
                <td><?= $p['tanggal_pengembalian'] ?></td>
                <td>
                    <a href="peminjaman/<?= $p['id'] ?>" class="btn btn-sm btn-primary">Detail</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>