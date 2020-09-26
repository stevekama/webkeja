<?php require_once('../../init/initialization.php');
$title = "Hosts || Dashboard";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Password Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Password</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            Change Password
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="changePasswordForm" role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="currentPassword">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" name="password" placeholder="Enter current password">
                            </div>

                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="new_password" placeholder="Enter New password">
                            </div>

                            <div class="form-group">
                                <label for="currentPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirm" placeholder="Retype Password">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" id="changePasswordSubmitBtn" class="btn btn-success">Save Changes</button>
                            <a href="<?php echo base_url(); ?>hosts/profile/index.php" class="btn btn-danger"> Cancel </a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- col-md-12 -->
        </div>
    </div>
</section>

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php");  ?>

<script>
    $(document).ready(function() {
        $('.settingsBtn').click(function() {
            $('#settingsModal').modal('show');
        });
    });
</script>