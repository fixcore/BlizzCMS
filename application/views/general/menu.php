        <!-- Page loader -->
        <link href="<?= base_url(); ?>core/pageloader/pace-theme-minimal.tmpl.css" rel="stylesheet" />
        <script src="<?= base_url(); ?>core/pageloader/pace.min.js"></script>
        <div class="uk-position-top uk-width-1-1">
            <div class="uk-navbar-container uk-navbar-transparent">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar>
                        <div class="uk-navbar-left">
                            <a href="<?= base_url(); ?>" class="uk-navbar-item uk-logo Project-logo uk-margin-small-right" width="28" height="34" style="font-family:'Lobster';font-size:30px;color: #fff;"><?= $this->config->item('ProjectName'); ?></a>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li>
                                    <a href="#" style="color: #fff;"><?= $this->lang->line('nav_menu'); ?></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                                                <li><a href="<?= base_url('bugtracker'); ?>"><i class="ra ra-book"></i> <?= $this->lang->line('nav_bugtracker'); ?></a></li>
                                            <?php } ?>
                                            <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                                <li><a href="<?= base_url('changelogs'); ?>"><i class="ra ra-clockwork"></i> <?= $this->lang->line('nav_changelogs'); ?></a></li>
                                            <?php } ?>
                                            <li class="uk-nav-divider"></li>
                                            <?php if ($this->m_modules->getStatusLadPVP() == '1') { ?>
                                                <li><a href="<?= base_url('pvp'); ?>"><i class="ra ra-axe"></i> <?=$this->lang->line('nav_pvp_statistics');?></a></li>
                                            <?php } ?>
                                            <?php if ($this->m_modules->getStatusLadArena() == '1') { ?>
                                                <li><a href="<?= base_url('arena'); ?>"><i class="ra ra-arena"></i> <?=$this->lang->line('nav_arena_statistics');?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                                <?php if($this->m_modules->getStatusNews() == '1') { ?>
                                    <li><a href="<?= base_url('news'); ?>" style="color: #fff;"><?= $this->lang->line('nav_news'); ?></a></li>
                                <?php } ?>
                                <?php if($this->m_modules->getStatusForums() == '1') { ?>
                                    <li><a href="<?= base_url('forums'); ?>" style="color: #fff;"><?= $this->lang->line('nav_forums'); ?></a></li>
                                <?php } ?>
                                <?php if($this->m_modules->getStatusStore() == '1') { ?>
                                    <li><a href="<?= base_url('store'); ?>" style="color: #fff;"><?= $this->lang->line('nav_store'); ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav uk-visible@m">
                                <?php if (!$this->m_data->isLogged()) { ?>
                                    <li><a href="#desk" style="color: #fff;" uk-toggle><span uk-icon="icon: user"></span><?= $this->lang->line('nav_account'); ?></a></li>
                                <?php } ?>
                                <?php if ($this->m_data->isLogged()) { ?>
                                    <?php if ($this->m_modules->getMessages() == '1') { ?>
                                        <li>
                                            <?php $this->load->model('messages/messages_model'); ?>
                                            <a href="<?= base_url('message'); ?>" style="color: #fff;" uk-tooltip="title: <?= $this->lang->line('nav_messages'); ?>; pos: left">
                                                <span uk-icon="icon: commenting"></span>
                                                <span class="uk-badge"><?= $this->messages_model->getNotifyRows($this->session->userdata('fx_sess_id')); ?></span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li><a href="#desk" style="color: #fff;" uk-toggle><span uk-icon="icon: user"></span></a></li>
                                <?php } ?>
                            </ul>
                            <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#mobile" uk-toggle></a>
                            <div class="uk-offcanvas-content">
                                <div id="desk" uk-offcanvas="flip: true">
                                    <div class="uk-offcanvas-bar">
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                        <div class="uk-panel">
                                            <ul class="uk-nav uk-nav-default">
                                                <li class="uk-nav-header uk-text-center"><span uk-icon="icon: user"></span><?= $this->lang->line('nav_account'); ?></li>
                                                <li class="uk-nav-divider"></li>
                                                <?php if (!$this->m_data->isLogged()) { ?>
                                                    <?php if($this->m_modules->getStatusLogin() == '1') { ?>
                                                        <li><a href="<?= base_url(); ?>login" class="uk-button uk-button-default uk-button-small" style="color: #fff;"><span uk-icon="icon: sign-in"></span> <?= $this->lang->line('button_login'); ?></a></li>
                                                    <?php } ?>
                                                    <?php if($this->m_modules->getStatusRegister() == '1') { ?>
                                                        <li class="uk-text-center"><a href="<?= base_url('register'); ?>"><span uk-icon="icon: plus-circle"></span> <?= $this->lang->line('button_account_create'); ?></a></li>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php if ($this->m_data->isLogged()) { ?>
                                                    <li class="uk-text-center">
                                                        <a href="<?= base_url('profile/'.$this->session->userdata('fx_sess_id')); ?>">
                                                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="60" height="60" alt="" uk-tooltip="title: Profile; pos: right">
                                                            <?php } else { ?>
                                                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="60" height="60" alt="" uk-tooltip="title: Profile; pos: right">
                                                            <?php } ?>
                                                        </a>
                                                        <?= $this->session->userdata('fx_sess_username'); ?> #<?= $this->session->userdata('fx_sess_tag'); ?>
                                                        <?php if($this->m_modules->getStatusUCP() == '1') { ?>
                                                            <a href="<?= base_url('panel'); ?>">
                                                                <button class="uk-button uk-button-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('button_user_panel'); ?></button>
                                                            </a>
                                                        <?php } ?>
                                                    </li>
                                                    <li class="uk-nav-divider"></li>
                                                    <?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
                                                        <li><a href="<?= base_url('admin'); ?>"><span uk-icon="icon: cog"></span> <?= $this->lang->line('button_admin_panel'); ?></a></li>
                                                    <?php } ?>
                                                    <?php if($this->m_modules->getStatusGifts() == '1') { ?>
                                                        <li><a href="<?= base_url('user/gifts'); ?>"><span uk-icon="icon: cog"></span> <?= $this->lang->line('button_gifts'); ?></a></li>
                                                    <?php } ?>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $("#fx_logout").click(function(e) {
                                                                e.preventDefault();
                                                                $.ajax({
                                                                    url: '<?= base_url('user/logout') ?>',
                                                                    cache: false,
                                                                    success:function(data) {
                                                                        location.reload();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    <li><a href="#" id="fx_logout"><span uk-icon="icon: sign-out"></span> <?= $this->lang->line('button_logout'); ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-offcanvas-content">
                                <div id="mobile" uk-offcanvas="flip: true;">
                                    <div class="uk-offcanvas-bar">
                                        <div class="uk-panel">
                                            <ul class="uk-nav uk-nav-default">
                                                <li class="uk-nav-header uk-text-center"><span uk-icon="icon: user"></span><?= $this->lang->line('nav_account'); ?></li>
                                                <li class="uk-nav-divider"></li>
                                                <?php if (!$this->m_data->isLogged()) { ?>
                                                    <?php if($this->m_modules->getStatusLogin() == '1') { ?>
                                                        <li><a href="<?= base_url(); ?>login" class="uk-button uk-button-default uk-button-small" style="color: #fff;"><span uk-icon="icon: sign-in"></span> <?= $this->lang->line('button_login'); ?></a></li>
                                                    <?php } ?>
                                                    <?php if($this->m_modules->getStatusRegister() == '1') { ?>
                                                        <li class="uk-text-center"><a href="<?= base_url('register'); ?>"><span uk-icon="icon: plus-circle"></span> <?= $this->lang->line('button_account_create'); ?></a></li>
                                                    <?php } ?>
                                                <?php } ?>
                                                <?php if ($this->m_data->isLogged()) { ?>
                                                    <li class="uk-text-center">
                                                        <a href="<?= base_url('profile/'.$this->session->userdata('fx_sess_id')); ?>">
                                                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="60" height="60" alt="" uk-tooltip="title: Profile; pos: right">
                                                            <?php } else { ?>
                                                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="60" height="60" alt="" uk-tooltip="title: Profile; pos: right">
                                                            <?php } ?>
                                                        </a>
                                                        <?= $this->session->userdata('fx_sess_username'); ?> #<?= $this->session->userdata('fx_sess_tag'); ?>
                                                        <?php if($this->m_modules->getStatusUCP() == '1') { ?>
                                                            <a href="<?= base_url('panel'); ?>">
                                                                <button class="uk-button uk-button-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('button_user_panel'); ?></button>
                                                            </a>
                                                        <?php } ?>
                                                    </li>
                                                    <li class="uk-nav-divider"></li>
                                                    <?php if ($this->m_modules->getMessages() == '1') { ?>
                                                        <li>
                                                            <?php $this->load->model('messages/messages_model'); ?>
                                                            <a href="<?= base_url('message'); ?>">
                                                                <span uk-icon="icon: commenting"></span>
                                                                <?= $this->lang->line('nav_messages'); ?>
                                                                <span class="uk-badge"><?= $this->messages_model->getNotifyRows($this->session->userdata('fx_sess_id')); ?></span>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <li class="uk-nav-divider"></li>
                                                    <?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
                                                        <li><a href="<?= base_url('admin'); ?>"><span uk-icon="icon: cog"></span> <?= $this->lang->line('button_admin_panel'); ?></a></li>
                                                    <?php } ?>
                                                    <?php if($this->m_modules->getStatusGifts() == '1') { ?>
                                                        <li><a href="<?= base_url('user/gifts'); ?>"><span uk-icon="icon: cog"></span> <?= $this->lang->line('button_gifts'); ?></a></li>
                                                    <?php } ?>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $("#fx_logout").click(function(e) {
                                                                e.preventDefault();
                                                                $.ajax({
                                                                    url: '<?= base_url('user/logout') ?>',
                                                                    cache: false,
                                                                    success:function(data) {
                                                                        location.reload();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    <li><a href="#" id="fx_logout"><span uk-icon="icon: sign-out"></span> <?= $this->lang->line('button_logout'); ?></a></li>
                                                <?php } ?>
                                                <li class="uk-nav-header uk-text-center"><span uk-icon="icon: world"></span>Navigation</li>
                                                <li class="uk-nav-divider"></li>
                                                <li class="uk-parent">
                                                    <a href="#" style="color: #fff;"><?= $this->lang->line('nav_menu'); ?></a>
                                                    <ul class="uk-nav-sub">
                                                        <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                                                            <li><a href="<?= base_url('bugtracker'); ?>"><i class="ra ra-book"></i> <?= $this->lang->line('nav_bugtracker'); ?></a></li>
                                                        <?php } ?>
                                                        <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                                            <li><a href="<?= base_url('changelogs'); ?>"><i class="ra ra-clockwork"></i> <?= $this->lang->line('nav_changelogs'); ?></a></li>
                                                        <?php } ?>
                                                        <li class="uk-nav-divider"></li>
                                                        <?php if ($this->m_modules->getStatusLadPVP() == '1') { ?>
                                                            <li><a href="<?= base_url('pvp'); ?>"><i class="ra ra-axe"></i> <?=$this->lang->line('nav_pvp_statistics');?></a></li>
                                                        <?php } ?>
                                                        <?php if ($this->m_modules->getStatusLadArena() == '1') { ?>
                                                            <li><a href="<?= base_url('arena'); ?>"><i class="ra ra-arena"></i> <?=$this->lang->line('nav_arena_statistics');?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <?php if($this->m_modules->getStatusNews() == '1') { ?>
                                                    <li><a href="<?= base_url('news'); ?>" style="color: #fff;"><?= $this->lang->line('nav_news'); ?></a></li>
                                                <?php } ?>
                                                <?php if($this->m_modules->getStatusForums() == '1') { ?>
                                                    <li><a href="<?= base_url('forums'); ?>" style="color: #fff;"><?= $this->lang->line('nav_forums'); ?></a></li>
                                                <?php } ?>
                                                <?php if($this->m_modules->getStatusStore() == '1') { ?>
                                                    <li><a href="<?= base_url('store'); ?>" style="color: #fff;"><?= $this->lang->line('nav_store'); ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
