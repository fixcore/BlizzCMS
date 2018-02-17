    <header id="top-head">
        <?php if ($this->m_modules->getStatusSlides() == '1') { ?>
            <?php if ($this->home_model->getSlides()->num_rows()) { ?>
                <div class="uk-position-relative">
                    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 5000;">
                        <ul class="uk-slider-items">
                            <?php foreach ($this->home_model->getSlides()->result() as $slides) { ?>
                                <li class="uk-width-1-1">
                                    <img src="<?= base_url(); ?>assets/images/slides/<?= $slides->image; ?>" alt="">
                                    <div class="uk-panel">
                                        <div class="uk-position-center-left">
                                            <h2 uk-slider-parallax="y: -400,0; x: 150,0;"><?= $slides->title ?></h2>
                                            <!-- <p uk-slider-parallax="y: -400,0; x: 150,0;">Lorem ipsum dolor sit amet.</p> -->
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <?php if ($this->m_modules->getStatusNews() == '1') { ?>
                <div class="uk-width-2-3@l">
                    <p class="uk-h3" style="color: #fff;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('home_latest_news'); ?></p>
                    <div class="Divider Divider--light"></div>
                    <?php foreach ($this->news_model->getNewSpecifyID($this->news_model->getPrincipalNew())->result() as $principalNew) { ?>
                        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img src="<?= base_url(); ?>assets/images/news/<?= $principalNew->image; ?>" alt="" uk-cover>
                                    <canvas width="500" height="250"></canvas>
                                    <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary">
                                        <p class="uk-text-center"><a href="<?= base_url() ;?>news/<?= $principalNew->id ?>" class="uk-button uk-button-primary"><?= $this->lang->line('button_learn_more'); ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-break"><?= $principalNew->title; ?></h3>
                                    <p><?= substr(ucfirst(strtolower(strip_tags($principalNew->description))), 0, 260).' ...'; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle uk-light">
                            <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
                                <?php foreach ($this->news_model->getNewsTree()->result() as $newstree) { ?>
                                    <li>
                                        <div class="uk-text-center">
                                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                <img src="<?= base_url(); ?>assets/images/news/<?= $newstree->image ?>" alt="">
                                                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                                    <p class="uk-h4 uk-margin-remove uk-text-truncate"><?= $newstree->title ?></p>
                                                    <p><a href="<?= base_url() ;?>news/<?= $newstree->id ?>" class="uk-button uk-button-primary uk-button-small"><?= $this->lang->line('button_learn_more'); ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="uk-width-1-3@l">
                <?php if ($this->m_modules->getStatusRealmStatus() == '1') { ?>
                    <p class="uk-h3" style="color: #fff;"><i class="fa fa-server" aria-hidden="true"></i> <?=$this->lang->line('home_server_status');?></p>
                    <div class="label uk-text-center">
                        <h4 style="color: #fff;">
                            <?php if ($this->m_general->getExpansionAction() == 1) { ?>
                                <i class="fa fa-gamepad" aria-hidden="true"></i> Set Realmlist <?= $this->config->item('realmlist'); ?>
                            <?php } else { ?>
                                <i class="fa fa-gamepad" aria-hidden="true"></i> Set Portal "<?= $this->config->item('realmlist'); ?>"
                            <?php } ?>
                        </h4>
                    </div>
                    <div class="Divider Divider--light"></div>
                    <ul uk-accordion>
                        <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                            $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database); 
                        ?>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#" style="color: #fff;">
                                    <?php if ($this->m_data->realm_status($charsMultiRealm->realmID, $charsMultiRealm->hostname)) { ?>
                                        <span class="uk-text-success uk-text-bold" uk-icon="icon: chevron-up; ratio: 1.5"></span>
                                    <?php } else { ?>
                                        <span class="uk-text-danger uk-text-bold" uk-icon="icon: chevron-down; ratio: 1.5"></span>
                                    <?php } ?>
                                    Realm <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?>
                                </a>
                                <div class="uk-accordion-content">
                                    <p class="uk-text-center">
                                        <?php if ($this->m_data->realm_status($charsMultiRealm->realmID, $charsMultiRealm->hostname)) { ?>
                                            <span class="uk-label">
                                                <span uk-icon="icon: users"></span>
                                                <?= $this->m_characters->getCharactersOnlineAlliance($multiRealm); ?>
                                                <?= $this->lang->line('faction_alliance'); ?>
                                            </span>
                                            <span style="display:inline-block; width: 3px;"></span>
                                            <span class="uk-label uk-label-danger">
                                                <span uk-icon="icon: users"></span>
                                                <?= $this->m_characters->getCharactersOnlineHorde($multiRealm); ?>
                                                <?= $this->lang->line('faction_horde'); ?>
                                            </span>
                                        <?php } else { ?>
                                            <span class="uk-label">
                                                <span uk-icon="icon: users"></span>
                                                0
                                                <?= $this->lang->line('faction_alliance'); ?>
                                            </span>
                                            <span style="display:inline-block; width: 3px;"></span>
                                            <span class="uk-label uk-label-danger">
                                                <span uk-icon="icon: users"></span>
                                                0
                                                <?= $this->lang->line('faction_horde'); ?>
                                            </span>
                                        <?php } ?>
                                    </p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <?php if ($this->m_modules->getStatusDiscordExperimental() == '1') { ?>
                    <div class="uk-card uk-width-1-1@m">
                        <p class="uk-h3" style="color: #fff;"><i class="icon-discord"></i> Discord</p>
                        <div class="Divider Divider--light"></div>
                        <div class="uk-text-center">
                            <br>
                            <a target="_blank" href="https://discord.gg/<?= $this->home_model->getDiscordInfo()['code'] ?>" class="uk-h3" style="color: #fff;">
                                <img class="uk-border-circle uk-text-center" src="https://cdn.discordapp.com/icons/<?= $this->home_model->getDiscordInfo()['guild']['id']; ?>/<?= $this->home_model->getDiscordInfo()['guild']['icon']; ?>.png" width="70" height="70" alt="">
                                <div class="label">
                                    <?= $this->home_model->getDiscordInfo()['guild']['name']; ?>
                                </div>
                            </a>
                            <span class="uk-label uk-label-warning">
                                <?=$this->lang->line('users_on');?>
                                <?= $this->home_model->getDiscordInfo()['approximate_presence_count']; ?> 
                            </span>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($this->m_modules->getStatusDiscordClassic() == '1') { ?>
                    <div class="uk-card uk-width-1-1@m">
                        <div class="Divider Divider--light"></div>
                        <div class="uk-text-center">
                            <br>
                            <iframe src="https://discordapp.com/widget?id=<?= $this->home_model->getDiscordInfo()['guild']['id']; ?>&theme=dark" width="300" height="300" allowtransparency="true" frameborder="0"></iframe>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($this->m_modules->getStatusStore() == '1') { ?>
                <div class="uk-width-1-1@l">
                    <p class="uk-h3" style="color: #fff;"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <?= $this->lang->line('home_store_top'); ?></p>
                    <div class="Divider Divider--light"></div>
                    <br>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle uk-light">
                            <ul class="uk-slider-items uk-child-width-1-6@s uk-grid">
                                <?php foreach ($this->shop_model->getShopTop()->result() as $listTopShop) { ?>
                                    <li>
                                        <div class="uk-text-center">
                                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                <img src="<?= base_url(); ?>assets/images/store/<?= $this->shop_model->getImage($listTopShop->id_shop); ?>" alt="">
                                                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                                    <p class="uk-h4 uk-margin-remove uk-text-truncate"><?= $this->shop_model->getName($listTopShop->id_shop); ?></p>
                                                    <p><a href="<?= base_url('store/'); ?><?= $this->shop_model->getGroup($listTopShop->id_shop); ?>" class="uk-button uk-button-primary uk-button-small"><?= $this->lang->line('button_buy'); ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
