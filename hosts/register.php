<?php
require_once('../init/initialization.php');
$title = "Hosts || Login";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "login-header.php");
?>
<p class="login-box-msg">Register an account</p>

<form action="<?php echo base_url(); ?>hosts/index.php" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="fullnames" placeholder="Full Name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email Address">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-mobile"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            &nbsp;
            <!-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div> -->
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<p class="mb-1">
    <a href="<?php echo base_url(); ?>hosts/forgot.php">I forgot my password</a>
</p>
<p class="mb-0">
    <a href="<?php echo base_url(); ?>hosts/register.php" class="text-center">Register a new membership</a>
</p>
<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "login-footer.php"); ?>