<?php include_once(dirname(__FILE__) . '/layouts/header.php'); ?>

<div class="container my-5">
    <form id="login-form">
        <div class="card p-4 col-lg-8 mx-auto">
            <h1 class="mb-5 text-center">Login</h1>

            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com"
                    value="<?= old('email') ?>" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-warning my-4">Login</button>
        </div>
    </form>
</div>

<?php include_once(dirname(__FILE__) . '/layouts/footer.php'); ?>