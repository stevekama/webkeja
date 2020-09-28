<?php require_once('../../init/initialization.php');
$title = "Hosts || Dashboard";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Profile
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo public_url(); ?>storage/admins/profile.png" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Username</h3>

                        <p class="text-muted text-center">admin@webkeja.com</p>

                        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Settings -->
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="#" class="nav-link settingsBtn">
                                    <i class="fa fa-cogs"></i> Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>hosts/profile/account.php" class="nav-link">
                                    <i class="fa fa-cog"></i> Account Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>hosts/profile/password.php" class="nav-link">
                                    <i class="fa fa-lock"></i> Change Password
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about" data-toggle="tab">
                                    About Me
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="about">
                                <strong><i class="fa fa-user mr-1"></i> Full Names</strong>
                                <p class="text-muted">
                                    Stephen Kamau
                                </p>
                                <hr>

                                <strong><i class="fa fa-mobile-phone mr-1"></i> Phone Number</strong>
                                <p class="text-muted">
                                    +254715356718
                                </p>
                                <hr>

                                <strong><i class="fa fa-book mr-1"></i> Education Level</strong>
                                <p class="text-muted">
                                    Bachelors Degree
                                </p>
                                <hr>

                                <strong><i class="fa fa-external-link-square mr-1"></i> Address</strong>
                                <p class="text-muted">
                                    35678-00200
                                </p>
                                <hr>

                                <strong><i class="fa fa-map mr-1"></i> Location</strong>
                                <p class="text-muted">Malibu, California</p>
                                <hr>

                                <strong><i class="fa fa-calendar-check-o mr-1"></i> Date of birth</strong>
                                <p class="text-muted">
                                    2009-09-02
                                </p>
                                <hr>

                                <strong><i class="fa fa-cube mr-1"></i> Gender</strong>
                                <p class="text-muted">Male</p>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="modal fade" id="settingsModal">
        <div class="modal-dialog modal-lg">
            <form id="settingsForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Host Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="landlordFullNames">Full Names</label>
                            <input type="text" class="form-control" name="fullnames" id="landlordFullNames" placeholder="Full Names">
                        </div>

                        <div class="form-group">
                            <label for="landlordPhoneNumber">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="landlordPhoneNumber" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="landlordEmailAddress">Email Address</label>
                            <input type="email" class="form-control" name="email" id="landlordEmailAddress" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <label for="landlordEducationLevel">Education Level</label>
                            <select name="education_level" id="landlordEducationLevel" class="form-control">
                                <option disabled selected>Choose Education Level</option>
                                <option value="Doctrait Degree">Doctrait Degree</option>
                                <option value="Bachelors Degree">Bachelors Degree</option>
                                <option value="High School">High School</option>
                                <option value="Primary School">Primary School</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="landlordAddress">Address</label>
                            <input type="text" class="form-control" name="address" id="landlordAddress" placeholder="Address">
                        </div>

                        <div class="form-group">
                            <label for="landlordLocation">Location</label>
                            <input type="text" class="form-control" name="location" id="landlordLocation" placeholder="Location">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php");  ?>

<script>
    $(document).ready(function() {
        $('.settingsBtn').click(function() {
            $('#settingsModal').modal('show');
        });
    });
</script>