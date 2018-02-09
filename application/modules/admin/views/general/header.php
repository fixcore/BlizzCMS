<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('button_admin_panel'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/css/blizzcms-admincore.css">

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="uk-navbar-container tm-navbar-container uk-active" uk-sticky>
        <div class="uk-container uk-container-expand">
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a id="sidebar_toggle" class="uk-navbar-toggle" style="color: #fff;" uk-navbar-toggle-icon></a>
                    <a href="<?= base_url('admin'); ?>" class="uk-navbar-item uk-logo" style="font-family:'morpheus';color: #fff;">BlizzCMS</a>
                </div>
                <div class="uk-navbar-right uk-light">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?= $this->session->userdata('fx_sess_username'); ?>&nbsp;<span class="fa fa-chevron-down" aria-hidden="true"></span></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li>
                                        <a href="<?= base_url('panel'); ?>">
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('button_user_panel'); ?>
                                        </a>
                                    </li>
                                    <li class="uk-nav-divider"></li>
                                    <li>
                                        <a href="<?= base_url('logout'); ?>">
                                            <i class="fa fa-power-off" aria-hidden="true"></i> <?= $this->lang->line('button_logout'); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="sidebar" class="tm-sidebar-left uk-background-default">
        <center>
            <div class="user">
                <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                    <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="100" height="100" alt="">
                <?php } else { ?>
                    <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="100" height="100" alt="">
                <?php } ?>
                <div class="uk-margin-top"></div>
                <div class="uk-text-truncate"><?= $this->session->userdata('fx_sess_username'); ?></div>
                <div class="uk-text-truncate"><?= $this->session->userdata('fx_sess_email'); ?></div>
                <span class="uk-label uk-margin-top">
                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { echo 'STAFF'; } else echo 'Player'; ?>
                </span>
            </div>
            <br>
        </center>
        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
            <li class="uk-nav-header uk-text-center">Admin Panel</li>
            <li>
                <a href="<?= base_url('admin'); ?>">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> <?= $this->lang->line('admin_dashboard'); ?>
                </a>
            </li>
            <li class="uk-parent">
                <a href="javascript:void(0)">
                    <i class="fa fa-users" aria-hidden="true"></i> <?= $this->lang->line('admin_users'); ?>
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= base_url('admin/accounts'); ?>">
                            <i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('admin_users_list'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/characters'); ?>">
                            <i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('admin_chars_list'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="javascript:void(0)">
                    <i class="fa fa-mouse-pointer" aria-hidden="true"></i> <?= $this->lang->line('admin_website'); ?>
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= base_url('admin/managenews'); ?>">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('admin_news'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/managechangelogs'); ?>">
                            <i class="fa fa-history" aria-hidden="true"></i> <?= $this->lang->line('admin_changelogs'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/managepages'); ?>">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->lang->line('admin_pages'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="javascript:void(0)">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <?= $this->lang->line('admin_store'); ?>
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= base_url('admin/managegroups'); ?>">
                            <i class="fa fa-cubes" aria-hidden="true"></i> <?= $this->lang->line('admin_manage_groups'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/manageitems'); ?>">
                            <i class="fa fa-cube" aria-hidden="true"></i> <?= $this->lang->line('admin_manage_items'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="javascript:void(0)">
                    <i class="fa fa-commenting" aria-hidden="true"></i> <?= $this->lang->line('admin_forums'); ?>
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= base_url('admin/managecategories'); ?>">
                            <i class="fa fa-bookmark-o" aria-hidden="true"></i> <?= $this->lang->line('admin_manage_categories'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/manageforums'); ?>">
                            <i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('admin_manege_forums'); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="javascript:void(0)">
                    <i class="fa fa-bolt" aria-hidden="true"></i> BlizzCMS
                </a>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="<?= base_url('admin/manageapi'); ?>">
                            <i class="fa fa-microchip" aria-hidden="true"></i> API
                        </a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a target="_blank" href="https://fixcore.github.io">
                            <i class="fa fa-circle-o" aria-hidden="true"></i> Wiki
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://github.com/fixcore/BlizzCMS/issues">
                            <i class="fa fa-circle-o" aria-hidden="true"></i> Issues
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
