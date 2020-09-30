<?php require_once('../../init/initialization.php');
$title = "Hosts || House Payments";
$section = "properties";
require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "header.php"); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Payments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>hosts/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Payments</li>
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

                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Current Month Payments</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="loadPayments" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>House Number</th>
                                    <th>Tenant</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Amount</th>
                                    <th>Paid Amount</th>
                                    <th>Status</th>
                                    <th>Date Paid</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A1</td>
                                    <td>Chuck Batowski</td>
                                    <td>+254715356718</td>
                                    <td>chuck@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>A5</td>
                                    <td>Jacob Kinuthia</td>
                                    <td>+254715356718</td>
                                    <td>chuck@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B4</td>
                                    <td>Chuck Batowski</td>
                                    <td>+254715356718</td>
                                    <td>chuck@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-15</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B3</td>
                                    <td> atowski</td>
                                    <td>+254715356718</td>
                                    <td>chuck@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-10</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B2</td>
                                    <td>Kelvin Batowski</td>
                                    <td>+254712000000</td>
                                    <td>kev@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B1</td>
                                    <td>Musk Junior</td>
                                    <td>+254715356</td>
                                    <td>chuck@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B5</td>
                                    <td>Ellon Musk</td>
                                    <td>+254715356700</td>
                                    <td>ellon@webkeja.com</td>
                                    <td>15000</td>
                                    <td>15000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>A6</td>
                                    <td>Cate Batowski</td>
                                    <td>+25471500718</td>
                                    <td>junior@webkeja.com</td>
                                    <td>10000</td>
                                    <td>10000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>A3</td>
                                    <td>Josh Batowski</td>
                                    <td>+254715306718</td>
                                    <td>josh@webkeja.com</td>
                                    <td>10000</td>
                                    <td>10000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>C4</td>
                                    <td>Stephen Batowski</td>
                                    <td>+25471535666</td>
                                    <td>steve@webkeja.com</td>
                                    <td>25000</td>
                                    <td>25000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>C1</td>
                                    <td>Elizabeth Batowski</td>
                                    <td>+254715356700</td>
                                    <td>liz@webkeja.com</td>
                                    <td>25000</td>
                                    <td>25000</td>
                                    <td>Full Paid</td>
                                    <td>2020-09-05</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-primary view_invoice">View</button>
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

<?php require_once(PUBLIC_PATH . DS . "back" . DS . "layouts" . DS . "hosts" . DS . "footer.php"); ?>

<script>
    $(document).ready(function(){
        $('#loadPayments').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>