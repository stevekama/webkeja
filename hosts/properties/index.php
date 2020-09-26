<?php require_once('../../init/initialization.php');
$title = "Hosts || Properties";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Imenti</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Property</li>
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
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo public_url(); ?>storage/properties/properties.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Imenti</h3>

                        <p class="text-muted text-center">SHOPS</p>
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
                                    <i class="fa fa-cogs"></i> Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-cog"></i> Change Pic
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-tree"></i> Houses
                                    <span class="badge bg-info float-right">120</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about" data-toggle="tab">
                                    About Property
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="about">

                                <strong><i class="fa fa-book mr-1"></i> Description</strong>
                                <p class="text-muted">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat voluptate molestias est iste voluptatum repellendus cumque, iure non. Perferendis, non?
                                </p>

                                <hr>

                                <strong><i class="fa fa-map mr-1"></i> Location</strong>

                                <p class="text-muted">Nairobi, Kenya</p>

                                <hr>

                                <strong><i class="fa fa-money mr-1"></i> Price Range</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">KSHS15000</span>
                                    <span class="tag tag-success">KSHS25000</span>
                                </p>

                                <hr>

                                <strong><i class="fa fa-file mr-1"></i> Total Income</strong>

                                <p class="text-muted">KSHS15,000,000.00</p>

                                <hr>

                                <strong><i class="fa fa-plug mr-1"></i> Property Occupation Status</strong>

                                <p class="text-muted">
                                    <span class="badge bg-success">
                                        FULLY OCCUPIED
                                    </span>
                                </p>
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
    </div>
    <!-- /.container-fluid -->

    <!-- modals -->
    <div class="modal fade" id="propertySettingsModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="propertySettingsForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Property</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="propertyName">Property Name</label>
                            <input type="text" class="form-control" id="propertyName" name="property_name" placeholder="Enter Property Name">
                        </div>

                        <div class="form-group">
                            <label for="propertyType">Property Type</label>
                            <select name="property_type" id="propertyType" class="form-control">
                                <option disabled selected>Choose property type</option>
                                <option value="1">APARTMENT</option>
                                <option value="2">SHOPS</option>
                                <option value="3">WAREHOUSES</option>
                                <option value="4">OFFICES</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- settings modal -->

    <!-- change picture modal -->
</section>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php");  ?>