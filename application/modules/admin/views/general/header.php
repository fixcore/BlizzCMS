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
    <link href="<?= base_url(); ?>core/css/colors/dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="">
                        <b>
                            <img src="<?= base_url('assets/images/logo/blizzcms-icon-light.png'); ?>" alt="home" class="dark-logo"/>
                            <img src="<?= base_url('assets/images/logo/blizzcms-icon-dark.png'); ?>" alt="home" class="light-logo"/>
                        </b>
                        <span class="hidden-xs">
                            <img src="<?= base_url('assets/images/logo/blizzcms-light.png'); ?>" alt="home" class="dark-logo"/>
                            <img src="<?= base_url('assets/images/logo/blizzcms-dark.png'); ?>" alt="home" class="light-logo"/>
                        </span>
                    </a>
                    <!-- /Logo -->
                </div>
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs">
                            <i class="ti-close ti-menu"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)">
                            <i class="fa fa-envelope-o"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Vipo</h5>
                                            <span class="mail-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Vipo</h5>
                                            <span class="mail-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img">
                                            <span class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Vipo</h5>
                                            <span class="mail-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img">
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Vipo</h5>
                                            <span class="mail-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong> <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)">
                            <b class="hidden-xs">
                                <i class="fa fa-user"></i> <?= $this->session->userdata('fx_sess_username'); ?>
                            </b>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-text">
                                        <h4><?= $this->session->userdata('fx_sess_username'); ?></h4>
                                        <p class="text-muted"><?= $this->session->userdata('fx_sess_email'); ?></p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?= base_url('panel'); ?>">
                                    <i class="fa fa-user-circle-o text-info"></i> <?= $this->lang->line('adm_account_settings'); ?>
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?= base_url('logout'); ?>">
                                    <i class="fa fa-power-off text-danger"></i> <?= $this->lang->line('account_out'); ?>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav">
                <div class="sidebar-head">
                    <h3>
                        <span class="fa-fw open-close">
                            <i class="ti-menu hidden-xs"></i>
                            <i class="ti-close visible-xs"></i>
                        </span>
                        <span class="hide-menu">Navigation</span>
                    </h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?= base_url('admin'); ?>" class="waves-effect active">
                            <i class="fa fa-tachometer fa-fw"></i>
                            <span class="hide-menu"><?= $this->lang->line('adm_dashboard'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-users fa-fw text-danger"></i>
                            <span class="hide-menu"><?= $this->lang->line('adm_users'); ?></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/accounts'); ?>">
                                    <i class="fa fa-list fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('adm_users_list'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/characters'); ?>">
                                    <i class="fa fa-list fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('adm_chars_list'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-mouse-pointer fa-fw text-info"></i>
                            <span class="hide-menu">Website</span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/managenews'); ?>" class="waves-effect">
                                    <i class="fa fa-newspaper-o fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('adm_news'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/managechangelogs'); ?>" class="waves-effect">
                                    <i class="fa fa-history fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('changelogs'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/managepages'); ?>" class="waves-effect">
                                    <i class="fa fa-file-text-o fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('pages'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-shopping-cart fa-fw text-success"></i>
                            <span class="hide-menu"><?= $this->lang->line('shop'); ?></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/manageitems'); ?>" class="waves-effect">
                                    <i class="fa fa-cube fa-fw"></i>
                                    <span class="hide-menu">Items</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-commenting fa-fw text-purple"></i>
                            <span class="hide-menu"><?= $this->lang->line('adm_forums'); ?></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/managecategories'); ?>" class="waves-effect">
                                    <i class="fa fa-bookmark-o fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('forum_categoryMan'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/manageforums'); ?>" class="waves-effect">
                                    <i class="fa fa-comments-o fa-fw"></i>
                                    <span class="hide-menu"><?= $this->lang->line('forum_forumMan'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-bolt fa-fw text-warning"></i>
                            <span class="hide-menu">BlizzCMS</span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('admin/manageapi'); ?>">
                                    <i class="fa fa-microchip text-info"></i>
                                    <span class="hide-menu">API</span>
                                </a>
                            </li>
                            <li class="devider"></li>
                            <li>
                                <a target="_blank" href="https://fixcore.github.io">
                                    <i class="fa fa-circle-o text-inverse"></i>
                                    <span class="hide-menu">Wiki</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://github.com/fixcore/BlizzCMS/issues">
                                    <i class="fa fa-circle-o text-danger"></i>
                                    <span class="hide-menu">Issues</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Left Sidebar -->
