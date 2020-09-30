<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-teal">
        <img src="<?php echo public_url(); ?>storage/logo/logo.png" alt="Webkeja Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Webkeja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo public_url(); ?>storage/admins/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                            <a href="<?php echo base_url(); ?>hosts/properties/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Property</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>hosts/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            Houses
                            <i class="fa fa-angle-left right"></i>
                            <span class="badge badge-success right">120</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>hosts/houses/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Houses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Tenants
                            <i class="fa fa-angle-left right"></i>
                            <span class="badge badge-info right">100</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>hosts/tenants/index.php" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Tenants</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">PAYMENTS</li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>hosts/payments/index.php" class="nav-link">
                        <i class="nav-icon fa fa-money"></i>
                        <p>
                            Monthly Payments
                        </p>
                    </a>
                </li>

                <li class="nav-header">MEMOS & ALERTS</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>
                            Memo Box
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Memos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Compose Memo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Messages
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Send Messages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Complains</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">REPORTS</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th-list"></i>
                        <p>
                            Payments Report
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Daily Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Monthly Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Yearly Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-area-chart"></i>
                        <p>
                            Graphical Report
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>charts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>