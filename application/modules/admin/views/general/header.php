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
    <div class="uk-offcanvas-content">
        <header id="top-head" class="uk-position-fixed">
            <div class="uk-container uk-container-expand uk-background-primary" style="background:linear-gradient(to left, #28a5f5, #1e87f0);">
                <nav class="uk-navbar uk-light" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="<?= base_url('admin'); ?>" style="font-family:'Lobster';font-size:35px;color: #fff;">BlizzCMS</a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="#" data-uk-icon="icon:user"></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-left">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-nav-header uk-text-center">YOUR ACCOUNT</li>
                                        <li><a href="<?= base_url('panel'); ?>"><span data-uk-icon="icon: settings"></span> <?= $this->lang->line('button_user_panel'); ?></a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="<?= base_url('logout'); ?>"><span data-uk-icon="icon: sign-out"></span> <?= $this->lang->line('button_logout'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#mobilecanvas" uk-toggle></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <aside id="left-col" class="uk-light uk-visible@m">
            <div class="profile-bar">
                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-auto">
                        <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                            <img class="uk-border-circle profile-img" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" alt="">
                        <?php } else { ?>
                            <img class="uk-border-circle profile-img" src="<?= base_url('assets/images/profiles/default.png'); ?>"  alt="">
                        <?php } ?>
                    </div>
                    <div class="uk-width-expand">
                        <span class="uk-text-small uk-text-muted">Welcome</span>
                        <h4 class="uk-margin-remove-vertical text-light"><?= $this->session->userdata('fx_sess_username'); ?></h4>
                        <span class="uk-label uk-text-small">
                            <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { echo 'STAFF'; } else echo 'Player'; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="bar-content uk-position-relative">
                <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                    <li class="uk-nav-header">SECTIONS</li>
                    <li><a href="<?= base_url('admin'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: home"></span> <?= $this->lang->line('admin_dashboard'); ?></a></li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: settings"></span> <?= $this->lang->line('admin_settings'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/settings'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: cog"></span><?= $this->lang->line('admin_website_settings'); ?></a></li>
                            <li><a href="<?= base_url('admin/managerealms'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: server"></span><?= $this->lang->line('admin_manage_realms'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: users"></span> <?= $this->lang->line('admin_users'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/accounts'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_users_list'); ?></a></li>
                            <li><a href="<?= base_url('admin/characters'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_chars_list'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: thumbnails"></span> <?= $this->lang->line('admin_website'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managenews'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: file-edit"></span><?= $this->lang->line('admin_news'); ?></a></li>
                            <li><a href="<?= base_url('admin/managechangelogs'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: history"></span><?= $this->lang->line('admin_changelogs'); ?></a></li>
                            <li><a href="<?= base_url('admin/managepages'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: file"></span><?= $this->lang->line('admin_pages'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: cart"></span> <?= $this->lang->line('admin_store'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managegroups'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_groups'); ?></a></li>
                            <li><a href="<?= base_url('admin/manageitems'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_items'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: comments"></span> <?= $this->lang->line('admin_forums'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managecategories'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_categories'); ?></a></li>
                            <li><a href="<?= base_url('admin/manageforums'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manege_forums'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-header">FixCore</li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: bolt"></span> BlizzCMS</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/manageapi'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: code"></span>API</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a target="_blank" href="https://fixcore.github.io"><span class="uk-margin-small-right" data-uk-icon="icon: info"></span>Wiki</a></li>
                            <li><a target="_blank" href="https://github.com/fixcore/BlizzCMS/issues"><span class="uk-margin-small-right" data-uk-icon="icon: lifesaver"></span>Issues</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                </ul>
            </div>
        </aside>
        <div id="mobilecanvas" data-uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
                <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-nav-header">SECTIONS</li>
                    <li><a href="<?= base_url('admin'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: home"></span> <?= $this->lang->line('admin_dashboard'); ?></a></li>
                    <li class="uk-parent uk-open">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: users"></span> <?= $this->lang->line('admin_users'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/accounts'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_users_list'); ?></a></li>
                            <li><a href="<?= base_url('admin/characters'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_chars_list'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: thumbnails"></span> <?= $this->lang->line('admin_website'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managenews'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: file-edit"></span><?= $this->lang->line('admin_news'); ?></a></li>
                            <li><a href="<?= base_url('admin/managechangelogs'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: history"></span><?= $this->lang->line('admin_changelogs'); ?></a></li>
                            <li><a href="<?= base_url('admin/managepages'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: file"></span><?= $this->lang->line('admin_pages'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: cart"></span> <?= $this->lang->line('admin_store'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managegroups'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_groups'); ?></a></li>
                            <li><a href="<?= base_url('admin/manageitems'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_items'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: comments"></span> <?= $this->lang->line('admin_forums'); ?></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/managecategories'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manage_categories'); ?></a></li>
                            <li><a href="<?= base_url('admin/manageforums'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: list"></span><?= $this->lang->line('admin_manege_forums'); ?></a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-header">FixCore</li>
                    <li class="uk-parent">
                        <a href="javascript:void(0)"><span class="uk-margin-small-right" data-uk-icon="icon: bolt"></span> BlizzCMS</a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?= base_url('admin/manageapi'); ?>"><span class="uk-margin-small-right" data-uk-icon="icon: code"></span>API</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a target="_blank" href="https://fixcore.github.io"><span class="uk-margin-small-right" data-uk-icon="icon: info"></span>Wiki</a></li>
                            <li><a target="_blank" href="https://github.com/fixcore/BlizzCMS/issues"><span class="uk-margin-small-right" data-uk-icon="icon: lifesaver"></span>Issues</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                </ul>
            </div>
        </div>
    </div>