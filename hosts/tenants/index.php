<?php require_once('../../init/initialization.php');
$title = "Hosts || Tenants";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tenants</h1>
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
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="loadTenants" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full Names</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Profile</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Allan</td>
                                    <td>allan@webkeja.com</td>
                                    <td>+254789900670</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user1-128x128.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cate</td>
                                    <td>cate@webkeja.com</td>
                                    <td>+254789905670</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user2-160x160.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Steve</td>
                                    <td>steve@webkeja.com</td>
                                    <td>+254789900400</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user6-128x128.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Elizabeth</td>
                                    <td>elizabeth@webkeja.com</td>
                                    <td>+254789900400</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user3-128x128.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sam</td>
                                    <td>sam@webkeja.com</td>
                                    <td>+254789900400</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user7-128x128.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
                                    <td>
                                        <button class="btn btn-info view">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Steve</td>
                                    <td>steve@webkeja.com</td>
                                    <td>+254789900400</td>
                                    <td><img src="<?php echo public_url(); ?>storage/tenants/user6-128x128.jpg" alt="Product 1" class="img-circle img-size-32 mr-2"></td>
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
    $(document).ready(function(){
        $("#loadTenants").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        $('.view').click(function(){
            window.location.href = "<?php echo base_url(); ?>hosts/tenants/view.php";
        });
    });
</script>