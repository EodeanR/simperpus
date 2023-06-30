<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<h2>Anggota</h2>
<p>Ini halaman Anggota perpustakaan.</p>
<a href="anggota/new" class="btn btn-warning my-3">+ Anggota</a>


<div class="table-responsive">
    <table class="table table-sm table-hover">
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
                        <form action="anggota/<?= $a['id'] ?>" method="POST" class="d-md-flex">
                            <a href="anggota/<?= $a['id'] ?>/edit" class="btn btn-sm btn-success">Ubah</a>
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