<?php require_once('../init/initialization.php');
$title = "Hosts || Dashboard";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "header.php");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>6</h3>

                        <p>My Properties</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>5</h3>

                        <p>Payment Methods</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            My
                        </h3>

                        <p>Profile</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Property Sales</h3>
                            <a href="javascript:void(0);">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Total Income</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fa fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since Last Month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fa fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fa fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

            </div>

        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">My Properties</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Property</th>
                                    <th>Type</th>
                                    <th>Starting Price</th>
                                    <th>Final Price</th>
                                    <th>Total Income</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Phalcon
                                    </td>
                                    <td>FLAT</td>
                                    <td>
                                        15,000
                                    </td>
                                    <td>
                                        25,000
                                    </td>
                                    <td>
                                        25,000,000
                                    </td>
                                    <td>
                                        <button class="btn btn-info">
                                            <i class="fa fa-info-circle"></i> VIEW
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Imenti
                                    </td>
                                    <td>SHOP</td>
                                    <td>25,000</td>
                                    <td>55,000</td>
                                    <td>65,000,000</td>
                                    <td>
                                        <button class="btn btn-info">
                                            <i class="fa fa-info-circle"></i> VIEW
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo public_url(); ?>storage/houses/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Hollywood
                                    </td>
                                    <td>APARTMENT</td>
                                    <td>25,000</td>
                                    <td>55,000</td>
                                    <td>65,000,000</td>
                                    <td>
                                        <button class="btn btn-info">
                                            <i class="fa fa-info-circle"></i> VIEW
                                        </button>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "footer.php"); ?>
<script src="<?php echo public_url(); ?>back/js/pages/dashboard3.js"></script>