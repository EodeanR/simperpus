<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<h2>Detail Peminjaman</h2>
<p>Ini halaman detail Peminjaman perpustakaan.</p>

<div class="card p-4">
    <div class="col">
        <table class="table-fixed">
            <tr>
                <th>Nama Peminjam</th>
                <th>:</th>
                <td><?= $peminjaman['nama'] ?></td>
            </tr>
            <tr>
                <th>Buku</th>
                <th>:</th>
                <td><?= $peminjaman['judul'] ?></td>
            </tr>
            <tr>
                <th>Tgl. Pinjam</th>
                <th>:</th>
                <td><?= $peminjaman['tanggal_peminjaman'] ?></td>
            </tr>
            <tr>
                <th>Tgl. Kembali</th>
                <th>:</th>
                <td><?= $peminjaman['tanggal_pengembalian'] ?></td>
            </tr>
        </table>
    </div>
    <form action="peminjaman/<?= $peminjaman['id'] ?>" method="POST" class="mt-3">
        <a href="/peminjaman/<?= $peminjaman['id'] ?>/edit" class="btn btn-sm btn-success">Ubah</a>
        <input type="hidden" name="_method" value="DELETE">
        <button id="btn-delete" type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
    </form>
</div>

<?= $this->endSection() ?>