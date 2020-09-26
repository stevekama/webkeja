<?php require_once('../../init/initialization.php');
$title = "Hosts || Dashboard";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Account Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Account</li>
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
                            Change Account Settings
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="changeAccountForm" role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">User Name:</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                            </div>

                            <div class="form-group">
                                <label for="currentEmail">Confirm Email</label>
                                <input type="email" class="form-control" id="currentEmail" name="confirm_email" placeholder="Retype Email">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" id="changeAccountSubmitBtn" class="btn btn-success">Save Changes</button>
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