<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dasbor') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">UAS TEKWEB</span>
    </a>
    <a href="<?php echo base_url('dasbor') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $this->session->userdata('nama'); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url('dasbor') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard Covid 19
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url('peta') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Peta Penyebaran Covid 19
                        </p>
                    </a>
                </li>
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Data User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('user') ?>" class="nav-link">
                                <i class="fa fa-table"></i>
                                <p>Tampil Data User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('user/tambah') ?>" class="nav-link">
                                <i class="fa fa-plus"></i>
                                <p>Tambah User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Tentang Kami
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-address-card"></i>
                                <p>Tasya</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Aboutus/nihlah') ?>" class="nav-link">
                                <i class="fa fa-address-card"></i>
                                <p>Nihlah - 3411171005</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-address-card"></i>
                                <p>Senas - 3411171036</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Aboutus/deden') ?>" class="nav-link">
                                <i class="fa fa-address-card"></i>
                                <p>Deden - 3411171039</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Aboutus/agung') ?>" class="nav-link">
                                <i class="fa fa-address-card"></i>
                                <p>Agung - 3411171041</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
                        <i class="nav-icon fa fa-times-circle"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">

    </section>
    <section class="content">
        <div class="container-fluid">