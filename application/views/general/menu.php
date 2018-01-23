<!-- page loader -->
<link href="<?= base_url(); ?>core/pageloader/pace-theme-minimal.tmpl.css" rel="stylesheet" />
<script src="<?= base_url(); ?>core/pageloader/pace.min.js"></script>
<!-- page loader -->
    <div class="Navbar-overlay"></div>
    <div class="Navbar-container">
        <nav class="Navbar-mobile">
            <div class="Navbar-mobileOverlay Navbar-overlay"></div>
            <a data-target="Navbar-siteMenu" data-site-mode="true" class="Navbar-menu Navbar-modalToggle is-noSelect">
                <div class="Navbar-icon Navbar-mobileIcon Navbar-siteMenuIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false"><use xlink:href="#Navbar-icon-menu"></use></svg>
                </div>
            </a>
            <a href="http://blizzard.com/" class="Navbar-logo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false"><use xlink:href="#Navbar-logo-blizzard"></use></svg>
            </a>
            <a href="#" class="Navbar-customLogo"><img src="#"/></a>
            <div class="Navbar-profileItems">
                <a data-target="Navbar-accountModal" class="Navbar-account Navbar-modalToggle is-noSelect">
                    <div class="Navbar-icon Navbar-mobileIcon Navbar-profileIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false"><use xlink:href="#Navbar-icon-profile"></use></svg>
                    </div>
                </a>
            </div>
        </nav>
        <nav class="Navbar-desktop">
            <div class="Navbar-desktopOverlay Navbar-overlay"></div>
            <!-- logo START -->
            <style>
                @import url('https://fonts.googleapis.com/css?family=Lobster');
            </style>
            <a href="<?= base_url(); ?>" class="Navbar-logo" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->config->item('ProjectName'); ?> Icon">
                <h3 style="font-family: 'Lobster', cursive; position: absolute; top: 7px; font-size: 30px; color: #fff;"><?= $this->config->item('ProjectName'); ?></h3>
            </a>
            <!-- logo END -->
            <div class="Navbar-collapsedItems is-hidden">
                <a data-target="Navbar-siteMenu" class="Navbar-menu Navbar-item Navbar-link Navbar-modalToggle is-noSelect">
                    <div class="Navbar-icon Navbar-collapsedIcon Navbar-siteMenuIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false"><use xlink:href="#Navbar-icon-menu"></use></svg>
                    </div>
                    <div class="Navbar-label">Menu</div>
                </a>
            </div>
            <div class="Navbar-items">
                <a class="Navbar-item Navbar-modalToggle is-noSelect Navbar-games" data-index='0' data-name="<?= $this->lang->line('menu_more'); ?>" data-target="Navbar-gamesDropdown">
                    <div class="Navbar-label">Menu</div>
                    <div class="Navbar-icon Navbar-dropdownIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-dropdown"></use></svg>
                    </div>
                </a>
                <?php if($this->m_modules->getStatusNews() == '1') { ?>
                    <a href="<?= base_url('news'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('menu_news'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_news'); ?>">
                        <div class="Navbar-label"><?= $this->lang->line('menu_news'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusForums() == '1') { ?>
                    <a href="<?= base_url('forums'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('forums'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('forums'); ?>">
                        <div class="Navbar-label"><?= $this->lang->line('forums'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusStore() == '1') { ?>
                    <a href="<?= base_url('store'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-shop" data-index='1' data-name="<?= $this->lang->line('store'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('store'); ?>">
                        <div class="Navbar-label"><?= $this->lang->line('store'); ?></div>
                    </a>
                <?php } ?>
            </div>
            <div class="Navbar-profileItems">
                <?php if ($this->m_data->isLogged()) { ?>
                <!-- message -->
                <?php if ($this->m_modules->getMessages() == '1') { ?>
                <?php $this->load->model('messages/messages_model'); ?>
                <a href="<?= base_url('message'); ?>">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i> 
                    <span class="uk-badge"><?= $this->messages_model->getNotifyRows($this->session->userdata('fx_sess_id')); ?></span>
                </a>
                <?php } ?>
                <!-- message -->
                    <a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
                        <div class="Navbar-icon Navbar-employeeIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-blizz"></use></svg>
                        </div>
                        <div class="Navbar-label Navbar-accountUnauthenticated"><i class="fa fa-user" aria-hidden="true"></i> <?= $this->session->userdata('fx_sess_username'); ?></div>
                        <div class="Navbar-icon Navbar-dropdownIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-dropdown"></use></svg>
                        </div>
                    </a>
                <?php } else { ?>
                    <a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
                        <div class="Navbar-icon Navbar-employeeIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-blizz"></use></svg>
                        </div>
                        <div class="Navbar-label"><i class="fa fa-user" aria-hidden="true"></i> <?= $this->lang->line('my_account'); ?></div>
                        <div class="Navbar-icon Navbar-dropdownIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-dropdown"></use></svg>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </nav>
    </div>
    <div class="Navbar-modals">
        <div data-toggle="games" class="Navbar-modal Navbar-dropdown Navbar-gamesDropdown is-full">
            <div class="Navbar-tick">
                <div class="Navbar-tickInner"></div>
            </div>
            <div class="Navbar-modalContent">
                <div class="Navbar-gamePublishers Navbar-columns8 Navbar-modalSection is-full is-center">
                    <div data-publisher="<?= $this->config->item('ProjectName'); ?>" data-name="<?= $this->lang->line('menu_home'); ?>" class="Navbar-gamePublisher Navbar-columns7">
                        <div class="Navbar-gamePublisherLabel animation-delay-9"><?= $this->lang->line('menu_more'); ?></div>
                        <nav class="Navbar-gameLogos">
                            <div class="Navbar-gameLogoBlock Navbar-columns3 Navbar-imagePanel">
                                <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                                    <a href="<?= base_url('bugtracker'); ?>" class="Navbar-gameLogo animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('bugtracker'); ?>">
                                        <img src="<?= base_url(); ?>assets/images/menu/logo-wow.png" alt="" class="Navbar-gameLogoImage"/>
                                        <div class="Navbar-gameLogoLabel"><?= $this->lang->line('bugtracker'); ?></div>
                                    </a>
                                <?php } ?>
                                <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                    <a href="<?= base_url('changelogs'); ?>" class="Navbar-gameLogo animation-delay-2" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('changelogs'); ?>">
                                        <img src="<?= base_url(); ?>assets/images/menu/logo-wow.png" alt="" class="Navbar-gameLogoImage"/>
                                        <div class="Navbar-gameLogoLabel"><?= $this->lang->line('changelogs'); ?></div>
                                    </a>
                                <?php } ?>
                            </div>
                        </nav>
                        <nav class="Navbar-posters Navbar-imagePanel">
                            <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                                <a href="<?= base_url('bugtracker'); ?>" class="Navbar-poster animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('bugtracker'); ?>">
                                    <img src="<?= base_url(); ?>assets/images/menu/logo-wow-max.jpg" class="Navbar-posterImage"/>
                                </a>
                            <?php } ?>
                            <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                <a href="<?= base_url('changelogs'); ?>" class="Navbar-poster animation-delay-2" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('changelogs'); ?>">
                                    <img src="<?= base_url(); ?>assets/images/menu/logo-wow-max.jpg" class="Navbar-posterImage"/>
                                </a>
                            <?php } ?>
                        </nav>
                    </div>
                </div>
                <link rel="stylesheet" type="text/css" href="<?=base_url('core/rpg_awesome/css/rpg-awesome.css')?>">
                <nav class="Navbar-modalSection Navbar-dropdownFooter Navbar-gameMenu is-center">
                    <?php if ($this->m_modules->getStatusLadPVP() == '1') { ?>
                        <a href="<?= base_url('pvp'); ?>" class="Navbar-gameMenuItem animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - <?=$this->lang->line('lad_pvp');?>">
                            <div class="Navbar-icon Navbar-gameMenuItemIcon"></div>
                            <div class="Navbar-gameMenuItemLabel"><i class="ra ra-axe"></i> <?=$this->lang->line('lad_pvp');?></div>
                        </a>
                    <?php } ?>
                    <?php if ($this->m_modules->getStatusLadArena() == '1') { ?>
                        <a href="<?= base_url('arena'); ?>" class="Navbar-gameMenuItem animation-delay-9" data-analytics="global-nav" data-analytics-placement="Nav - <?=$this->lang->line('lad_arena');?>">
                            <div class="Navbar-icon Navbar-gameMenuItemIcon"></div>
                            <div class="Navbar-gameMenuItemLabel"><i class="ra ra-arena"></i> <?=$this->lang->line('lad_arena');?></div>
                        </a>
                    <?php } ?>
                </nav>
            </div>
        </div>
        <div class="Navbar-constrained">
            <div data-toggle="Navbar-account" class="Navbar-modal Navbar-dropdown Navbar-accountDropdown is-constrained">
                <div class="Navbar-tick">
                    <div class="Navbar-tickInner"></div>
                </div>
                <div class="Navbar-modalContent">
                    <?php if (!$this->m_data->isLogged()) { ?>
                        <div class="Navbar-accountDropdownLoggedOut">
                            <?php if($this->m_modules->getStatusLogin() == '1') { ?>
                                <div class="Navbar-modalSection">
                                    <a href="<?= base_url(); ?>login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('menu_login'); ?>">
                                        <button class="Navbar-button is-full"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('menu_login'); ?></button>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if($this->m_modules->getStatusRegister() == '1') { ?>
                                <a href="<?= base_url('register'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('create_acc'); ?>">
                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-account-add"></use></svg>
                                    </div>
                                    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('create_acc'); ?></div>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->m_data->isLogged()) { ?>
                        <div class="Navbar-accountDropdownLoggedOut">
                            <div class="Navbar-modalSection">
                                <div class="Navbar-accountDropdownProfileInfo uk-text-center">
                                    <a href="<?= base_url('profile/'.$this->session->userdata('fx_sess_id')); ?>">
                                        <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="60" height="60" alt="">
                                        <?php } else { ?>
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="60" height="60" alt="">
                                        <?php } ?>
                                        <div class="Navbar-accountDropdownBattleTag"><?= $this->session->userdata('fx_sess_username'); ?> #<?= $this->session->userdata('fx_sess_tag'); ?></div>
                                    </a>
                                    <?php if($this->m_modules->getStatusUCP() == '1') { ?>
                                        <a href="<?= base_url('panel'); ?>">
                                            <button class="Navbar-button is-full"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('ucp'); ?></button>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
                                <a href="<?= base_url('admin'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('adm_panel'); ?>">
                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-settings"></use></svg>
                                    </div>
                                    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('adm_panel'); ?></div>
                                </a>
                            <?php } ?>
                            <?php if($this->m_modules->getStatusGifts() == '1') { ?>
                                <a href="<?= base_url('user/gifts'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownGifts" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_gifs'); ?>">
                                    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-gifts"></use></svg>
                                    </div>
                                    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_gifs'); ?></div>
                                </a>
                            <?php } ?>
                            <a href="<?= base_url('logout'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account_out'); ?>">
                                <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-logout"></use></svg>
                                </div>
                                <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('account_out'); ?></div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="Navbar-modal Navbar-accountModal is-animated is-scroll-blocking">
            <div class="Navbar-modalContent">
                <div class="Navbar-mobileModalHeader"></div>
                <a href="http://blizzard.com/" class="Navbar-logo Navbar-mobileModalLogo" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 151.15 68.46" focusable="false"><use xlink:href="#Navbar-logo-blizzard"></use></svg>
                </a>
                <?php if (!$this->m_data->isLogged()) { ?>
                    <div class="Navbar-accountDropdownLoggedOut">
                        <?php if($this->m_modules->getStatusLogin() == '1') { ?>
                            <div class="Navbar-modalSection">
                                <a href="<?= base_url(); ?>login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('menu_login'); ?>">
                                    <button class="Navbar-button is-full"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('menu_login'); ?></button>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if($this->m_modules->getStatusRegister() == '1') { ?>
                            <a href="<?= base_url('register'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('create_acc'); ?>">
                                <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-account-add"></use></svg>
                                </div>
                                <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('create_acc'); ?></div>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($this->m_data->isLogged()) { ?>
                    <div class="Navbar-accountDropdownLoggedOut">
                        <div class="Navbar-modalSection">
                            <div class="Navbar-accountDropdownProfileInfo uk-text-center">
                                <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="40" height="40" alt="">
                                <?php } else { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="40" height="40" alt="">
                                <?php } ?>
                                <div class="Navbar-accountDropdownBattleTag"><?= $this->session->userdata('fx_sess_username'); ?> #<?= $this->session->userdata('fx_sess_tag'); ?></div>
                                <?php if($this->m_modules->getStatusUCP() == '1') { ?>
                                    <a href="<?= base_url('panel'); ?>">
                                        <button class="Navbar-button is-full"><i class="fa fa-user-circle-o" aria-hidden="true"></i> User Panel</button>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
                            <a href="<?= base_url('admin'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('adm_panel'); ?>">
                                <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-settings"></use></svg>
                                </div>
                                <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('adm_panel'); ?></div>
                            </a>
                        <?php } ?>
                        <?php if($this->m_modules->getStatusGifts() == '1') { ?>
                            <a href="<?= base_url('user/gifts'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownGifts" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_gifs'); ?>">
                                <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-gifts"></use></svg>
                                </div>
                                <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_gifs'); ?></div>
                            </a>
                        <?php } ?>
                        <a href="<?= base_url('logout'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account_out'); ?>">
                            <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-logout"></use></svg>
                            </div>
                            <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('account_out'); ?></div>
                        </a>
                    </div>
                <?php } ?>
                <div class="Navbar-icon Navbar-modalClose">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-close"></use></svg>
                </div>
            </div>
            <div class="Navbar-modalCloseGutter"></div>
        </div>
        <div data-default-mode="true" data-simple-mode="true" class="Navbar-modal Navbar-siteMenu is-animated is-scroll-blocking is-top">
            <div class="Navbar-modalContent">
                <a href="<?= base_url(); ?>" class="Navbar-logo Navbar-mobileModalLogo" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->config->item('ProjectName'); ?> Icon"></a>
                <a href="<?= base_url(); ?>" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - Home">
                    <div class="Navbar-modalLinkLabel">Home</div>
                </a>
                <div data-name="games" class="Navbar-expandable Navbar-gamesExpandable">
                    <div class="Navbar-expandableToggle">
                        <div class="Navbar-expandableLabel">Menu</div>
                        <div class="Navbar-icon Navbar-expandableIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-dropdown"></use></svg>
                        </div>
                    </div>
                    <div class="Navbar-expandableContainer">
                        <div class="Navbar-expandableContent">
                            <nav class="Navbar-expandableList Navbar-gameList">
                                <div data-publisher="blizzard" class="Navbar-gamePublisher">
                                    <div class="Navbar-gamePublisherLabel"><?= $this->lang->line('menu_more'); ?></div>
                                    <?php if($this->m_modules->getStatusLadBugtracker() == '1') { ?>
                                        <a href="<?= base_url('bugtracker'); ?>" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('bugtracker'); ?>">
                                            <img src="<?= base_url(); ?>assets/images/menu/logo-mobile-wow.png" alt="" class="Navbar-expandableItemImage"/>
                                            <div class="Navbar-expandableItemLabel"><?= $this->lang->line('bugtracker'); ?></div>
                                        </a>
                                    <?php } ?>
                                    <?php if($this->m_modules->getStatusChangelogs() == '1') { ?>
                                        <a href="<?= base_url('changelogs'); ?>" class="Navbar-expandableItem" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('changelogs'); ?>">
                                            <img src="<?= base_url(); ?>assets/images/menu/logo-mobile-wow.png" alt="" class="Navbar-expandableItemImage"/>
                                            <div class="Navbar-expandableItemLabel"><?= $this->lang->line('changelogs'); ?></div>
                                        </a>
                                    <?php } ?>
                                </div>
                                <?php if ($this->m_modules->getStatusLadPVP() == '1') { ?>
                                    <a href="<?= base_url('pvp'); ?>" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - <?=$this->lang->line('lad_pvp');?>">
                                        <div class="Navbar-icon Navbar-expandableItemIcon"></div>
                                        <div class="Navbar-expandableItemLabel"><i class="ra ra-axe"></i> <?=$this->lang->line('lad_pvp');?></div>
                                    </a>
                                <?php } ?>
                                <?php if ($this->m_modules->getStatusLadArena() == '1') { ?>
                                    <a href="<?= base_url('arena'); ?>" class="Navbar-expandableItem Navbar-expandableSpecialItem" data-analytics="global-nav" data-analytics-placement="Nav - <?=$this->lang->line('lad_arena');?>">
                                        <div class="Navbar-icon Navbar-expandableItemIcon"></div>
                                        <div class="Navbar-expandableItemLabel"><i class="ra ra-arena"></i> <?=$this->lang->line('lad_arena');?></div>
                                    </a>
                                <?php } ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php if($this->m_modules->getStatusNews() == '1') { ?>
                    <a href="<?= base_url('news'); ?>" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_news'); ?>">
                        <div class="Navbar-modalLinkLabel"><?= $this->lang->line('menu_news'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusForums() == '1') { ?>
                    <a href="<?= base_url('forums'); ?>" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('forums'); ?>">
                        <div class="Navbar-modalLinkLabel"><?= $this->lang->line('forums'); ?></div>
                    </a>
                <?php } ?>
                <?php if($this->m_modules->getStatusStore() == '1') { ?>
                    <a href="<?= base_url('store'); ?>" class="Navbar-modalLink is-noSelect" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('store'); ?>">
                        <div class="Navbar-modalLinkLabel"><?= $this->lang->line('store'); ?></div>
                    </a>
                <?php } ?>
                <div class="Navbar-modalClose Navbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false"><use xlink:href="#Navbar-icon-close"></use></svg>
                </div>
            </div>
            <div class="Navbar-modalCloseGutter"></div>
        </div>
    </div>
