<?php require_once('../../init/initialization.php');
$title = "Hosts || View House";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Apartment No: A1</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/houses/index.php">Houses</a>
                    </li>
                    <li class="breadcrumb-item active">Apartment</li>
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
                <div class="card card-success card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">Apartment No: A1</h3>
                        <p class="text-muted text-center">BEDSITTER</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item active">
                                <a href="<?php echo base_url(); ?>hosts/houses/tenants.php" class="nav-link">
                                    <i class="fa fa-users"></i> Tenants
                                    <span class="badge bg-primary float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>hosts/houses/payments.php" class="nav-link">
                                    <i class="fa fa-money"></i> Payments Report
                                    <span class="badge bg-success float-right">100</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link changeImageBtn">
                                    <i class="fa fa-cog"></i> Change Image
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link settingsBtn">
                                    <i class="fa fa-cogs"></i> Settings
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
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#rooms" data-toggle="tab">
                                    Rooms
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="about">

                                <strong><i class="fa fa-money mr-1"></i> Cost</strong>

                                <p class="text-muted">
                                    KSHS.10,000.00
                                </p>

                                <hr>

                                <strong><i class="fa fa-files-o mr-1"></i> Status</strong>

                                <p class="text-muted">
                                    <span class="badge bg-success">
                                        OCCUPIED
                                    </span>
                                </p>

                                <hr>

                                <strong><i class="fa fa-list-alt mr-1"></i> Description</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="rooms">
                                <div class="table-responsive">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Room</th>
                                                <th>Image</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Sitting Room
                                                </td>
                                                <td>
                                                    <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Toilet
                                                </td>
                                                <td>
                                                    <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <button id="newRoomBtn" class="btn btn-success btn-flat pull-right">Add a Room</button>
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

    <!-- modals -->
    <div class="modal fade" id="changeImageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="changeImageForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Change House Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="changeImageId" name="house_id" />
                        </div>

                        <div class="form-group">
                            <label for="changeImageVal">House Image</label>
                            <input type="file" id="changeImageVal" name="image" />
                            <p class="help-block">Change House Image here.</p>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="changeImageSubmitBtn" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- change image modal -->

    <div class="modal fade" id="settingsModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="settingsForm">
                    <div class="modal-header">
                        <h4 class="modal-title">House Settings</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="apartmentNo">Apartment Number</label>
                            <input type="text" class="form-control" id="apartmentNo" name="apartment_number" placeholder="Enter Apartment Number">
                        </div>

                        <div class="form-group">
                            <label for="apartmentType">Apartment Type</label>
                            <select name="apartment_type" id="apartmentType" class="form-control">
                                <option disabled selected>CHoose Type</option>
                                <option value="1">BEDSITTER</option>
                                <option value="2">ONE BEDROOM</option>
                                <option value="3">TWO BEDROOM</option>
                                <option value="4">THREE BEDROOM</option>
                                <option value="5">OFFICES<option>
                                <option value="6">SHOP</option>
                                <option value="7">WARE HOUSE</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="apartmentCost">Apartment Cost</label>
                            <input type="text" class="form-control" id="apartmentCost" name="apartment_cost" placeholder="Enter the apartment cost">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="settingsSubmitBtn" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- settings modal -->

    <div class="modal fade" id="newRoomModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="newRoomForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Add a room</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="roomName">Room Name</label>
                            <input type="text" class="form-control" id="roomName" name="room" placeholder="Enter Room Name">
                        </div>

                        <div class="form-group">
                            <label for="roomImage">Room Image</label>
                            <input type="file" id="roomImage" name="image" />
                            <p class="help-block">Select Room Image here.</p>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="newRoomSubmitBtn" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /. add room modal -->
</section>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "footer.php"); ?>

<script>
    $(document).ready(function(){
        $('.changeImageBtn').click(function(e){
            e.preventDefault();
            $('#changeImageModal').modal('show');
        });

        $('.settingsBtn').click(function(e){
            e.preventDefault();
            $('#settingsModal').modal('show');
        });

        $('#newRoomBtn').click(function(){
            $('#newRoomForm')[0].reset();
            $('#newRoomModal').modal('show');
        });
    });
</script>