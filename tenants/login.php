<?php require_once('../init/initialization.php');
$title = "Tenants || Login";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "login-header.php"); ?>

<p class="login-box-msg">Sign in to start your session</p>

<form id="loginForm" method="post">
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            &nbsp;
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" id="loginSubmitBtn" class="btn btn-success btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<p class="mb-1">
    <a href="<?php echo base_url(); ?>tenants/forgot.php">I forgot my password</a>
</p>
<p class="mb-0">
    <a href="<?php echo base_url(); ?>tenants/register.php" class="text-center">Register a new membership</a>
</p>

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "login-footer.php"); ?>

<script>
    $(document).ready(function(){
        $('#loginForm').submit(function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "<?php echo base_url(); ?>api/tenants/login.php",
                type: "POST",
                data: form_data,
                dataType: "json",
                beforeSend: function() {
                    $('#loginSubmitBtn').html('Loading...');
                },
                success: function(data) {
                    if (data.message == "success") {
                        toastr.success('Successfully logged in to your account');
                        $('#loginSubmitBtn').html('success');
                        $('#loginForm')[0].reset();
                        window.location.href = "<?php echo base_url(); ?>tenants/index.php";
                    }
                }
            });
        });
    })
</script>