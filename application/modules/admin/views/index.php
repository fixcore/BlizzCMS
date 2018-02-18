    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-2@l" data-uk-grid>
                <div class="uk-text-center">
                    <span class="uk-text-small"><span data-uk-icon="icon: users" class="uk-margin-small-right uk-text-primary"></span><?= $this->lang->line('account_count'); ?></span>
                    <h1 class="uk-heading-primary uk-margin-remove  uk-text-success"><span class="counter" data-count="<?= $this->admin_model->getAccCreated(); ?>">0</span></h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: info"></span> Total accounts registered.
                    </div>
                </div>
                <div class="uk-text-center">
                    <span class="uk-text-small"><span data-uk-icon="icon: ban" class="uk-margin-small-right uk-text-primary"></span><?= $this->lang->line('ban_count'); ?></span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-danger"><span class="counter" data-count="<?= $this->admin_model->getBanCount(); ?>">0</span></h1>
                    <div class="uk-text-small">
                        <span class="uk-text-danger" data-uk-icon="icon: info"></span> Total accounts banned.
                    </div>
                </div>
            </div>
            <hr>
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                ?>
                    <div class="uk-width-1-1@l uk-width-1-1@xl">
                        <div class="uk-card uk-card-default uk-card-small">
                            <div class="uk-card-header uk-card-secondary">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: server"></span> Realm - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></h4></div>
                                    <div class="uk-width-expand uk-text-right">
                                        <a href="<?= base_url('admin/managerealms'); ?>" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: cog"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-column-1-2 uk-column-divider uk-text-center">
                                    <p>
                                        <span class="uk-text-small"><span data-uk-icon="icon: user" class="uk-margin-small-right uk-text-primary"></span><?= $this->lang->line('players_count'); ?></span>
                                        <h1 class="uk-heading-primary uk-margin-remove uk-text-primary"><span class="counter" data-count="<?= $this->admin_model->getCharOn($multiRealm); ?>">0</span></h1>
                                        <div class="uk-text-small">
                                            <span class="uk-text-primary" data-uk-icon="icon: info"></span> Total players playing on realm.
                                        </div>
                                    </p>
                                    <p>
                                        <span class="uk-text-small"><span data-uk-icon="icon: star" class="uk-margin-small-right uk-text-primary"></span><?= $this->lang->line('staff_count'); ?></span>
                                        <h1 class="uk-heading-primary uk-margin-remove uk-text-primary"><span class="counter" data-count="<?= $this->admin_model->getGmCount($charsMultiRealm->realmID); ?>">0</span></h1>
                                        <div class="uk-text-small">
                                            <span class="uk-text-primary" data-uk-icon="icon: info"></span> Total accounts with GM access.
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer class="uk-section uk-section-small uk-text-center">
            <hr>
            <span class="uk-text-muted uk-text-small"><span data-uk-icon="icon: github-alt"></span> Proudly powered by BlizzCMS</span>
        </footer>
    </div>
