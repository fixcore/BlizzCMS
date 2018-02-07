    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <h4><i class="fa fa-tachometer" aria-hidden="true"></i> <?= $this->lang->line('admin_dashboard'); ?></h4>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-2@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><?= $this->lang->line('account_count'); ?></div>
                            <div class="uk-card-body">
                                <h2 class="uk-text-center"><i class="fa fa-globe" aria-hidden="true"></i> <span class="counter" data-count="<?= $this->admin_model->getAccCreated(); ?>" style="display: inline-block;">0</span></h2>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><?= $this->lang->line('ban_count'); ?></div>
                            <div class="uk-card-body">
                                <h2 class="uk-text-center"><i class="fa fa-ban" aria-hidden="true"></i> <span class="counter" data-count="<?= $this->admin_model->getBanCount(); ?>" style="display: inline-block;">0</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                        $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                    ?>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header uk-card-primary uk-text-uppercase">Realm - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></div>
                                <div class="uk-card-body">
                                    <div class="uk-column-1-2 uk-column-divider">
                                        <p class="uk-text-center uk-text-uppercase"><?= $this->lang->line('players_count'); ?><h2 class="uk-text-center"><i class="fa fa-area-chart" aria-hidden="true"></i> <span class="counter" data-count="<?= $this->admin_model->getCharOn($multiRealm); ?>" style="display: inline-block;">0</span></h2></p>
                                        <p class="uk-text-center uk-text-uppercase"><?= $this->lang->line('staff_count'); ?><h2 class="uk-text-center"><i class="fa fa-id-badge" aria-hidden="true"></i> <span class="counter" data-count="<?= $this->admin_model->getGmCount($charsMultiRealm->realmID); ?>" style="display: inline-block;">0</span></h2></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
