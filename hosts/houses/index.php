<?php require_once('../../init/initialization.php');
$title = "Hosts || Houses";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Houses</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                        <div class="card-tools">
                            <a href="#" id="newHouseBtn" class="btn btn-tool btn-sm">
                                <i class="fa fa-plus"></i> NEW HOUSE
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="loadHouses" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Apartment No.</th>
                                    <th>Apartment Type</th>
                                    <th>Num Rooms</th>
                                    <th>Cost</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        A1
                                    </td>
                                    <td>
                                        BEDSITTER
                                    </td>
                                    <td>1</td>
                                    <td>KSHS.10,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        A2
                                    </td>
                                    <td>
                                        BEDSITTER
                                    </td>
                                    <td>1</td>
                                    <td>KSHS.10,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        A3
                                    </td>
                                    <td>
                                        BEDSITTER
                                    </td>
                                    <td>1</td>
                                    <td>KSHS.10,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        A4
                                    </td>
                                    <td>
                                        BEDSITTER
                                    </td>
                                    <td>1</td>
                                    <td>KSHS.10,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        A5
                                    </td>
                                    <td>
                                        BEDSITTER
                                    </td>
                                    <td>1</td>
                                    <td>KSHS.10,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        B1
                                    </td>
                                    <td>
                                        ONE BEDROOM
                                    </td>
                                    <td>4</td>
                                    <td>KSHS.15,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        B2
                                    </td>
                                    <td>
                                        ONE BEDROOM
                                    </td>
                                    <td>4</td>
                                    <td>KSHS.15,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        B3
                                    </td>
                                    <td>
                                        ONE BEDROOM
                                    </td>
                                    <td>4</td>
                                    <td>KSHS.15,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        B4
                                    </td>
                                    <td>
                                        ONE BEDROOM
                                    </td>
                                    <td>4</td>
                                    <td>KSHS.15,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        B5
                                    </td>
                                    <td>
                                        ONE BEDROOM
                                    </td>
                                    <td>4</td>
                                    <td>KSHS.15,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        C1
                                    </td>
                                    <td>
                                        TWO BEDROOM
                                    </td>
                                    <td>6</td>
                                    <td>KSHS.25,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        C2
                                    </td>
                                    <td>
                                        TWO BEDROOM
                                    </td>
                                    <td>6</td>
                                    <td>KSHS.25,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        C3
                                    </td>
                                    <td>
                                        TWO BEDROOM
                                    </td>
                                    <td>6</td>
                                    <td>KSHS.25,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        C4
                                    </td>
                                    <td>
                                        TWO BEDROOM
                                    </td>
                                    <td>6</td>
                                    <td>KSHS.25,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        C5
                                    </td>
                                    <td>
                                        TWO BEDROOM
                                    </td>
                                    <td>6</td>
                                    <td>KSHS.25,000.00</td>
                                    <td>
                                        <button class="btn btn-info view">view</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- modals -->
    <div class="modal fade" id="newHouseModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="newHouseForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New House</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="apartmentNo">Apartment Number</label>
                            <input type="text" class="form-control" id="apartmentNo" name="apartment_number" placeholder="Enter the apartment number">
                        </div>

                        <div class="form-group">
                            <label for="apartmentType">Apartment Type</label>
                            <select name="apartment_type" id="apartmentType" class="form-control">
                                <option disabled selected>Choose apartment type</option>
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
                            <label for="apartmentImage">Apartment Image</label>
                            <input type="file" id="apartmentImage" name="image">
                            <p class="help-block">Enter the main image of the apartment here.</p>
                        </div>

                        <div class="form-group">
                            <label for="apartmentCost">Apartment Cost</label>
                            <input type="text" class="form-control" id="apartmentCost" name="apartment_cost" placeholder="Enter the apartment cost">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="newHouseSubmitBtn" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php"); ?>

<script>
    $(document).ready(function() {
        $("#loadHouses").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        $(document).on('click', '.view', function() {
            window.location.href = "<?php echo base_url(); ?>hosts/houses/view.php";
        });

        $(document).on('click', '#newHouseBtn', function(){
            $('#newHouseForm')[0].reset();
            $('#newHouseModal').modal("show");
        });
    });
</script>