<?php
require_once('../init/initialization.php');
$title = "Tenants || Forgot";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "tenants" . DS . "login-header.php");
?>
<p class="login-box-msg">Forgot Password</p>

<form action="<?php echo base_url(); ?>tenants/login.php" method="post">
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            &nbsp;
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Search</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<p class="mb-1">
    <a href="<?php echo base_url(); ?>tenants/login.php">Remember Password</a>
</p>

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "tenants" . DS . "login-footer.php"); ?>