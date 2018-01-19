    <!-- asd END -->
    <div class="Navbar-container">
        <nav class="Navbar-desktop">
            <!-- logo START -->
            <style>
                @import url('https://fonts.googleapis.com/css?family=Lobster');
            </style>
            <a href="<?= base_url(); ?>" class="" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->config->item('ProjectName'); ?> Icon">
                <h3 style="font-family: 'Lobster', cursive; position: absolute; top: 10px; font-size: 30px; color: #fff;"><?= $this->config->item('ProjectName'); ?></h3>
            </a>
            <!-- logo END -->
            <div style="position: relative; margin-left: 12em;" class="Navbar-profileItems">
                <a class="Navbar-item Navbar-modalToggle is-noSelect Navbar-games" data-index='0' data-name="<?= $this->lang->line('menu_more'); ?>" data-target="Navbar-gamesDropdown">
                    <div class="Navbar-label"><i class="fa fa-th" aria-hidden="true"></i> <?= $this->lang->line('menu_more'); ?></div>
                    <div class="Navbar-icon Navbar-dropdownIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                            <use xlink:href="#Navbar-icon-dropdown"></use>
                        </svg>
                    </div>
                </a>
                <a href="<?= base_url(); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('menu_home'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_home'); ?>">
                    <div class="Navbar-label"><i class="fa fa-home" aria-hidden="true"></i> <?= $this->lang->line('menu_home'); ?></div>
                </a>
                <?php if($this->m_modules->getStatusNews() == '1') { ?>
                    <a href="<?= base_url('news'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('menu_news'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_news'); ?>">
                        <div class="Navbar-label"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('menu_news'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusForums() == '1') { ?>
                    <a href="<?= base_url('forums'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('forums'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('forums'); ?>">
                        <div class="Navbar-label"><i class="fa fa-commenting" aria-hidden="true"></i> <?= $this->lang->line('forums'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                    <a href="<?= base_url('bugtracker'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('bugtracker'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('bugtracker'); ?>">
                        <div class="Navbar-label"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('bugtracker'); ?></div>
                    </a>
                <?php } ?>
            </div>
            <div class="Navbar-profileItems">
                <a href="<?= base_url('support'); ?>" class="Navbar-support Navbar-item Navbar-link is-noSelect" data-index="0" data-name="<?= $this->lang->line('menu_support'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_support'); ?>">
                    <div class="Navbar-label"><i class="fa fa-bell-o" aria-hidden="true"></i> <?= $this->lang->line('menu_support'); ?></div>
                </a>
                <?php if ($this->m_data->isLogged()) { ?>
                    <a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect is-active">
                        <div class="Navbar-icon Navbar-employeeIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                <use xlink:href="#Navbar-icon-blizz"></use>
                            </svg>
                        </div>
                        <div class="Navbar-label Navbar-accountUnauthenticated"><?= $this->session->userdata('fx_sess_username'); ?></div>
                        <div class="Navbar-icon Navbar-dropdownIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                <use xlink:href="#Navbar-icon-dropdown"></use>
                            </svg>
                        </div>
                    </a>
                <?php } else { ?>
                    <a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
                        <div class="Navbar-icon Navbar-employeeIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                <use xlink:href="#Navbar-icon-blizz"></use>
                            </svg>
                        </div>
                        <div class="Navbar-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('my_account'); ?></div>
                        <div class="Navbar-icon Navbar-dropdownIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                <use xlink:href="#Navbar-icon-dropdown"></use>
                            </svg>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </nav>
    </div>
    <!-- asd END -->
    <div class="Navbar-modals">
        <div data-toggle="games" class="Navbar-modal Navbar-dropdown Navbar-gamesDropdown is-full">
            <div class="Navbar-tick">
                <div class="Navbar-tickInner"></div>
            </div>
            <div class="Navbar-modalContent">
                <div class="Navbar-gamePublishers Navbar-columns8 Navbar-modalSection is-full is-center">
                    <div data-publisher="<?= $this->config->item('ProjectName'); ?>" data-name="<?= $this->lang->line('menu_home'); ?>" class="Navbar-gamePublisher Navbar-columns7">
                        <div class="Navbar-gamePublisherLabel animation-delay-9"><?= $this->lang->line('menu_more'); ?></div>
                        <nav class="Navbar-posters Navbar-imagePanel">
                            <?php if($this->m_modules->getStatusStore() == '1') { ?>
                                <a href="<?= base_url('store'); ?>" class="Navbar-poster animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('store'); ?>">
                                    <img src="<?= base_url(); ?>assets/images/menu/store.jpg" title="<?= $this->lang->line('store'); ?>" class="Navbar-posterImage"/>
                                </a>
                            <?php } ?>
                            <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                <a href="<?= base_url('changelogs'); ?>" class="Navbar-poster animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('changelogs'); ?>">
                                    <img src="<?= base_url(); ?>assets/images/menu/changelogs.jpg" title="<?= $this->lang->line('changelogs'); ?>" class="Navbar-posterImage"/>
                                </a>
                            <?php } ?>
                        </nav>
                    </div>
                </div>
                <!-- nav -->
                <link rel="stylesheet" type="text/css" href="<?=base_url('core/rpg_awesome/css/rpg-awesome.css')?>">
                <nav xmlns="http://www.w3.org/1999/xhtml" class="Navbar-modalSection Navbar-dropdownFooter Navbar-gameMenu is-center">
                    <?php if ($this->m_modules->getStatusLadPVP() == '1') { ?>
                        <a href="<?= base_url('pvp'); ?>" class="Navbar-gameMenuItem animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - Games - More Games">
                            <div class="Navbar-icon Navbar-gameMenuItemIcon"></div>
                            <div class="Navbar-gameMenuItemLabel"><i class="ra ra-axe"></i> <?=$this->lang->line('lad_pvp');?></div>
                        </a>
                    <?php } ?>
                    <?php if ($this->m_modules->getStatusLadArena() == '1') { ?>
                        <a href="<?= base_url('arena'); ?>" class="Navbar-gameMenuItem animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - Games - More Games">
                            <div class="Navbar-icon Navbar-gameMenuItemIcon"></div>
                            <div class="Navbar-gameMenuItemLabel"><i class="ra ra-arena"></i> <?=$this->lang->line('lad_arena');?></div>
                        </a>
                    <?php } ?>
                </nav>
                <!-- nav -->
            </div>
        </div>
        <div class="Navbar-constrained">
            <div data-toggle="Navbar-account" class="Navbar-modal Navbar-dropdown Navbar-accountDropdown is-constrained">
                <div class="Navbar-modalContent">
                    <div class="Navbar-accountDropdownLoggedOut">
                        <?php if (!$this->m_data->isLogged()) { ?>
                            <?php if($this->m_modules->getStatusLogin() == '1') { ?>
                                <div class="Navbar-modalSection">
                                    <a href="<?= base_url(); ?>login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('menu_login'); ?>">
                                        <div class="Navbar-button is-full" tabindex="0">
                                            <div class="visible content"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('menu_login'); ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ($this->m_data->isLogged()) { ?>
                            <div class="Navbar-accountDropdownLoggedOut">
                                <div class="Navbar-modalSection">
                                    <div class="Navbar-accountDropdownProfileInfo uk-text-center">
                                        <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows() > 0) { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="60" height="60" alt="">
                                        <?php } else { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.jpg'); ?>" width="60" height="60" alt="">
                                        <?php } ?>
                                        <div class="Navbar-accountDropdownBattleTag">
                                            <?= $this->session->userdata('fx_sess_username'); ?>#<?= $this->session->userdata('fx_sess_tag'); ?>
                                        </div>
                                        <a href="<?= base_url('profile/'.$this->session->userdata('fx_sess_id')); ?>">
                                            <div class="Navbar-button is-full" tabindex="0">
                                                <div class="visible content"><i class="fa fa-user-circle-o" aria-hidden="true"></i> User Panel</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
                                    <a href="<?= base_url('admin'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('adm_panel'); ?>">
                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                <use xlink:href="#Navbar-icon-settings"></use>
                                            </svg>
                                        </div>
                                        <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('adm_panel'); ?></div>
                                    </a>
                                <?php } ?>
                                <?php if($this->m_modules->getStatusUCP() == '1') { ?>
                                    <a href="<?= base_url('settings'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_setting'); ?>">
                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                <use xlink:href="#Navbar-icon-settings"></use>
                                            </svg>
                                        </div>
                                        <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_setting'); ?></div>
                                    </a>
                                <?php } ?>
                                <?php if($this->m_modules->getStatusGifts() == '1') { ?>
                                    <a href="<?= base_url('user/gifts'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_gifs'); ?>">
                                        <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                <use xlink:href="#Navbar-icon-gifts"></use>
                                            </svg>
                                        </div>
                                        <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_gifs'); ?></div>
                                    </a>
                                <?php } ?>
                                <a href="<?= base_url('logout'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account_out'); ?>">
                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                            <use xlink:href="#Navbar-icon-logout"></use>
                                        </svg>
                                    </div>
                                    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('account_out'); ?></div>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if (!$this->m_data->isLogged()) { ?>
                            <?php if($this->m_modules->getStatusRegister() == '1') { ?>
                                <a href="<?= base_url('register'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('create_acc'); ?>">
                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                            <use xlink:href="#Navbar-icon-account-add"></use>
                                        </svg>
                                    </div>
                                    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('create_acc'); ?></div>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
