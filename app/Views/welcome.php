<?php include_once(dirname(__FILE__) . '/layouts/header.php'); ?>

<div class="container my-5">
    <h1>Selamat Datang Di Perpustakan</h1>
    <p>Ini adalah Halaman pertama dari perpustakaan</p>
    <a href="<?= base_url('/signup') ?>" class="btn btn-primary">Sign Up</a>
    <!-- <a href="/login" class="btn btn-outline-primary">Login</a> -->
    <!-- <button type="button" class="btn btn-outline-primary" onclick="window.location.href='/signup'">Signup Js</button> -->
    <button type="button" class="btn btn-outline-primary"
        onclick="window.location.href='<?= base_url('/login') ?>'">Login Js</button>
</div>

<?php include_once(dirname(__FILE__) . '/layouts/footer.php'); ?>