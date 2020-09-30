<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-teal">
        <img src="<?php echo public_url(); ?>storage/logo/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebKeja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo public_url(); ?>storage/admins/profile.png" class="img-circle elevation-2" alt="User Image">
            </div> 
            <div class="info">
                <a href="<?php echo base_url(); ?>hosts/profile/index.php" class="d-block">
                    Tenant
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>tenants/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-building"></i>
                        <p>
                            My House
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>tenants/house/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>House Number: A1</p>
                            </a>    
                        </li>
                    </ul>
                </li>

                <li class="nav-header">PAYMENTS</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            My Payments
                            <i class="fa fa-angle-left right"></i>
                            <span class="badge badge-success right">150</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>tenants/payments/current_month.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Current Month</p>
                            </a>    
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>tenants/payments/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Payments</p>
                            </a>    
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-google-wallet"></i>
                        <p>
                            Receipts
                            <i class="fa fa-angle-left right"></i>
                            <span class="badge badge-warning right">150</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>tenants/receipts/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>My Receipts</p>
                            </a>    
                        </li>
                    </ul>
                </li>

                <li class="nav-header">SETTINGS</li>

                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>tenants/profile/index.php" class="nav-link">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>Profile</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>tenants/login.php" class="nav-link">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>