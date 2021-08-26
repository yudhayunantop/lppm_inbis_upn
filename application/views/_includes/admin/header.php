<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/images/logo/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/profile/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/custom.css">
    <!-- Editor Form -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
    <!-- gijgo datapicker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/gijgo/css/gijgo.min.css">
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="<?= base_url(); ?>" class="nav-link">
                        <i class="fa fa-fw fa-eye"></i> Lihat Website
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user fa-fw mr-2"></i>
                        <span class="d-none d-md-inline"><?= userdata()->fullname; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">
                        <a href="<?= base_url('configuration/account'); ?>" class="dropdown-item">
                            <i class="fa fa-user-circle fa-fw mr-2"></i> My Account
                        </a>
                        <a href="<?= base_url('configuration/change_password'); ?>" class="dropdown-item">
                            <i class="fa fa-lock-open fa-fw mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#logoutModal" class="dropdown-item" data-toggle="modal">
                            <i class="fa fa-sign-out-alt fa-fw mr-2"></i> Sign Out
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary sidebar-no-expand">
            <!-- Brand Logo -->
            <a href="<?= base_url('dashboard') ?>" class="brand-link navbar-dark">
                <img src="<?= base_url(); ?>assets/dist/img/logoupnbaru.png" alt="Logo" class="brand-image img-circle">
                <span class="brand-text text-white">CMS Simple</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image align-self-center">
                        <?php $avatar = userdata()->avatar ? userdata()->avatar : $this->config->item('user_avatar_default'); ?>
                        <img src="<?= base_url('assets/dist/img/users/') . $avatar ?>" class="img-circle elevation-1" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= userdata()->fullname; ?></a>
                        <p class="p-0 m-0 text-muted small">
                            <i class="fa fa-circle text-success"></i>
                            <?= userdata()->role; ?>
                        </p>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <?php if (userdata()->role == "admin") : ?>
                            <li class="nav-header">Main Menu</li>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= active_menu('dashboard'); ?>">
                                    <i class="nav-icon fas fa-tachometer-alt fa-fw"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('category'); ?>" class="nav-link <?= active_menu('category'); ?>">
                                    <i class="nav-icon fas fa-tags fa-fw"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('post/data'); ?>" class="nav-link <?= active_menu('post'); ?>">
                                    <i class="nav-icon fas fa-newspaper fa-fw"></i>
                                    <p>Post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('video'); ?>" class="nav-link <?= active_menu('video'); ?>">
                                    <i class="nav-icon fas fa-video"></i>
                                    <p>Video</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('uploadF/data'); ?>" class="nav-link <?= active_menu('uploadF'); ?>">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Upload</p>
                                </a>
                            </li>
                            <li class="nav-item">
								<a href="<?= base_url('tenant/data'); ?>" class="nav-link <?= active_menu('tenant'); ?>">
									<i class="nav-icon fas fa-building"></i>
									<p>Tenant</p>
								</a>
							</li>
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('member'); ?>" class="nav-link <?= active_menu('member'); ?>">
                                    <i class="nav-icon fas fa-users fa-fw"></i>
                                    <p>Members</p>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('comment'); ?>" class="nav-link <?= active_menu('comment'); ?>">
                                    <i class="nav-icon fas fa-comments fa-fw"></i>
                                    <p>Comments</p>
                                </a>
                            </li> -->
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalTitle">Sign Out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="<?= base_url('signout'); ?>" class="btn btn-primary">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">