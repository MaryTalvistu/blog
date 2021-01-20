<?php require_once APPROOT.'/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- form register -->
            <div class="card card-outline-secondary mt-5">
                <div class="card-header">
                    <h3 class="mb-0">Sign Up</h3>
                    <p class="mt-2">Please fill the fields below to register</p>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="post" action="<?php echo URLROOT.'/users/register'?>">
                        <div class="form-group">
                            <label for="name">Name<sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<sup>*</sup></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Password<sup>*</sup></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Password<sup>*</sup></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-lg float-right" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>

