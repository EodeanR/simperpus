<aside>
    <ul class="nav-item">
        <li><a href="/dashboard"
                class="nav-link <?= strpos(current_url(), 'dashboard') !== false ? 'active' : '' ?>">Dashboard</a>
        </li>
        <li><a href="/admin" class="nav-link <?= strpos(current_url(), 'admin') !== false ? 'active' : '' ?>">Admin</a>
        </li>
        <li><a href="/anggota"
                class="nav-link <?= strpos(current_url(), 'anggota') !== false ? 'active' : '' ?>">Anggota</a>
        </li>
        <li><a href="/buku" class="nav-link <?= strpos(current_url(), 'buku') !== false ? 'active' : '' ?>">Buku</a>
        </li>
        <li><a href="/kategori"
                class="nav-link <?= strpos(current_url(), 'kategori') !== false ? 'active' : '' ?>">Kategori</a></li>
        <li><a href="/peminjaman"
                class="nav-link <?= strpos(current_url(), 'peminjaman') !== false ? 'active' : '' ?>">Peminjaman</a>
        </li>
        <li><a href="/pengembalian"
                class="nav-link <?= strpos(current_url(), 'pengembalian') !== false ? 'active' : '' ?>">Pengembalian</a>
        </li>
    </ul>
</aside>