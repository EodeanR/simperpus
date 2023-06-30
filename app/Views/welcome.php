<?php include_once(dirname(__FILE__) . '/layouts/header.php'); ?>

<div class="container my-5">
    <div class="d-md-flex gap-5">
        <div class="welcome-img mx-auto mx-sm-0">
            <img src="img/bookshelves.svg" alt="">
        </div>
        <div class="mt-3 mt-md-0">
            <h1>Selamat Datang Di Perpustakan</h1>
            <p>Ini adalah Halaman pertama dari perpustakaan</p>
            <a href="<?= base_url('/signup') ?>" class="btn btn-warning">Sign Up</a>
            <!-- <a href="/login" class="btn btn-outline-warning">Login</a> -->
            <!-- <button type="button" class="btn btn-outline-warning" onclick="window.location.href='/signup'">Signup Js</button> -->
            <button type="button" class="btn btn-outline-warning"
                onclick="window.location.href='<?= base_url('/login') ?>'">Login Js</button>
        </div>

    </div>


</div>

<?php include_once(dirname(__FILE__) . '/layouts/footer.php'); ?>