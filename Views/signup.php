<?php include_once(dirname(__FILE__) . '/layouts/header.php'); ?>

<div class="container my-5">
    <form id="signup-form" method="post" action="<?php base_url('signup') ?>">
        <div class="card p-4 col-lg-8 mx-auto">
            <h1 class="mb-5 text-center">Sign Up</h1>
            <div class="form-floating mb-3">
                <input name="nama" type="text" class="form-control" id="nama" value="<?= old('nama') ?>"
                    placeholder="Nama Panjang">
                <label for="nama">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="email" value="<?= old('email') ?>"
                    placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="mb-3 form-check">
                <input name="agreement" type="checkbox" class="form-check-input" id="agreement">
                <label class="form-check-label" for="agreement">Saya mensetujui syarat dan ketentuan berlaku.</label>
            </div>
            <button type="submit" class="btn btn-primary my-4">Sign Up</button>
        </div>
    </form>
</div>

<?php include_once(dirname(__FILE__) . '/layouts/footer.php'); ?>