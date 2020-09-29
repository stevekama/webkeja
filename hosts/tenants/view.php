<?php require_once('../../init/initialization.php');
$title = "Hosts || Tenants";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Stephen Kamau</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tenants</li>
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
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo public_url(); ?>storage/tenants/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Username</h3>

                        <p class="text-muted text-center">info@webkeja.com</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-money"></i> Payments Report
                                    <span class="badge bg-primary float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-tree"></i> Current House
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
                                    About Tenant
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
</section>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php"); ?>