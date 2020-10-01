<?php
require_once('../init/initialization.php');
$title = "Tenants || Register";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "tenants" . DS . "login-header.php");
?>
<p class="login-box-msg">Register an account</p>

<form id="registrationForm" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="fullnames" placeholder="Full Name">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-user"></span>
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
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="password" name="confirm" class="form-control" placeholder="Retype Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="text" name="address" class="form-control" placeholder="Address">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-external-link-square"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="text" name="location" class="form-control" placeholder="Location">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa fa-map-marker"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            &nbsp;
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" id="registrationSubmitBtn" class="btn btn-success btn-block">Sign Up</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<p class="mb-0">
    <a href="<?php echo base_url(); ?>tenants/login.php" class="text-center">I have an account</a>
</p>

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "tenants" . DS . "login-footer.php"); ?>

<script>
    $(document).ready(function(){
        // create account
        $('#registrationForm').submit(function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "<?php echo base_url(); ?>api/tenants/new_tenant.php",
                type: "POST",
                data: form_data,
                dataType: "json",
                beforeSend: function() {
                    $('#registrationSubmitBtn').html('Loading...');
                },
                success: function(data) {
                    if (data.message == "success") {
                        $('#registrationSubmitBtn').html('Success');
                        toastr.success('Successfully created an account. You can login and continue..');
                        $('#registrationForm')[0].reset();
                        window.location.href = "<?php echo base_url(); ?>tenants/login.php";
                    }
                }
            });
        });

    });
</script>