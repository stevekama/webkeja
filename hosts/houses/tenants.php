<?php require_once('../../init/initialization.php');
$title = "Hosts || View House";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

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
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/houses/view.php">current house</a>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Current House Tenants
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="loadTenants" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Full Names</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user1-128x128.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Chuck Batowski</td>
                                    <td>chuck@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user4-128x128.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Elizabeth Batowski</td>
                                    <td>elizabeth@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user2-160x160.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Stephen Kamau</td>
                                    <td>stephen@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user5-128x128.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Sarah Walker</td>
                                    <td>sarah@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user6-128x128.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Casey</td>
                                    <td>casey@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/tenants/user7-128x128.jpg" alt="Tenant Image" class="img-circle img-size-32 mr-2">
                                    </td>
                                    <td>Chuck Batowski</td>
                                    <td>chuck@shop.com</td>
                                    <td>+254713456</td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
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
</section>
<!-- /.content -->
<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "footer.php"); ?>
<script>
    $(document).ready(function() {
        $("#loadTenants").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        $(document).on('click', '.view', function(){
            window.location.href = "<?php echo base_url(); ?>hosts/houses/view_tenant.php";
        });
    });
</script>