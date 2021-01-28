<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <!-- form register -->
        <div class="card card-outline-secondary mt-5">
            <div class="card-header">
                <?php message('register_success'); ?>
                <h3 class="mb-0">Log In</h3>
                <p class="mt-2">Please fill the fields to log in</p>
            </div>
            <div class="card-body">
                <form class="form" role="form" method="post" action="<?php echo URLROOT . '/users/login' ?>">
                    <div class="form-group">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="text"
                               class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                               id="email" name="email" placeholder="Email" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password<sup>*</sup></label>
                        <input type="password"
                               class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                               id="password" name="password"
                               placeholder="Password" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg float-right" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
