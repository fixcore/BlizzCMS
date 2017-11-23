<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <title><?= $this->config->item('ProjectName'); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>core/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>core/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>core/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="<?= base_url(); ?>core/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url(); ?>core/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url(); ?>core/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?= base_url(); ?>core/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>core/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?= base_url(); ?>core/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="<?= base_url(); ?>core/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>core/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url(); ?>core/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?= base_url(); ?>assets/images/profiles/<?= $this->m_data->getImageProfile($this->session->userdata('fx_sess_id')); ?>" alt="<?= $this->m_data->getImageProfile($this->session->userdata('fx_sess_id')); ?>" width="36" class="img-circle">
                            <b class="hidden-xs">
                                <?= $this->session->userdata('fx_sess_username'); ?>
                            </b>
                            <span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?= base_url(); ?>assets/images/profiles/<?= $this->m_data->getImageProfile($this->session->userdata('fx_sess_id')); ?>" alt="<?= $this->m_data->getImageProfile($this->session->userdata('fx_sess_id')); ?>" /></div>
                                    <div class="u-text">
                                        <h4><?= $this->session->userdata('fx_sess_username'); ?></h4>
                                        <p class="text-muted"><?= $this->session->userdata('fx_sess_email'); ?></p><a href="<?= base_url('user/settings'); ?>" class="btn btn-rounded btn-danger btn-sm"><?= $this->lang->line('adm_settings'); ?></a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?= base_url('user/logout'); ?>"><i class="fa fa-power-off"></i> <?= $this->lang->line('account_out'); ?></a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <div class="user-profile"></div>
                <ul class="nav" id="side-menu">
                   
                    <li> <a href="<?= base_url('admin'); ?>" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu"><?= $this->lang->line('menu_home'); ?></span></a> </li>

                    <li> <a href="<?= base_url('admin/users'); ?>" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu"><?= $this->lang->line('adm_menu_users'); ?></span></a> </li>

                    <li> <a href="<?= base_url('admin/chars'); ?>" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu"><?= $this->lang->line('adm_menu_chars'); ?></span></a> </li>
                    
                    <li> <a href="<?= base_url('admin/addnew'); ?>" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu"><?= $this->lang->line('adm_menu_addnew'); ?></span></a> </li>

                    <li> <a href="<?= base_url('admin/listnew'); ?>" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu"><?= $this->lang->line('adm_menu_listnew'); ?></span></a> </li>

                    <li class="devider"></li>
                    <li><a target="_blank" href="https://github.com/fixcore/BlizzCMS/wiki" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Wiki</span></a></li>
                    <li><a target="_blank" href="https://github.com/fixcore/BlizzCMS/issues" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Issues</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->