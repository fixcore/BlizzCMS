<?php if (isset($_POST['button_createRealm'])) {
    $hostname = $_POST['hostname'];
    $username = $_POST['host_user'];
    $password = $_POST['host_pass'];
    $database = $_POST['host_db'];
    $realm_id = $_POST['realmid'];
    $soapuser = $_POST['soap_user'];
    $soappass = $_POST['soap_pass'];
    $soapport = $_POST['soap_port'];

    $this->m_modules->insertRealm($hostname, $username, $password, $database, $realm_id, $soapuser, $soappass, $soapport, '1');
} ?>

<?php if (isset($_POST['button_deleteRealm'])) {
    $value = $_POST['button_deleteRealm'];
    $this->admin_model->delSpecifyRealm($value);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: settings"></span> <?= $this->lang->line('admin_manage_realms'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: cog" uk-toggle="target: #newRealm"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('column_realm_id'); ?></th>
                                        <th><?= $this->lang->line('column_realm_name'); ?></th>
                                        <th>Character Database Name</th>
                                        <th>Soap Port</th>
                                        <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->m_data->getRealms()->result() as $realmsID) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $realmsID->realmID; ?>" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $this->m_general->getRealmName($realmsID->realmID); ?>" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $realmsID->char_database; ?>" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $realmsID->console_port; ?>" disabled>
                                            </td>
                                            <td class="uk-text-center" uk-margin>
                                                <form action="" method="post" accept-charset="utf-8">
                                                    <button class="uk-button uk-button-danger" name="button_deleteRealm" value="<?= $realmsID->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="uk-section uk-section-small uk-text-center">
            <hr>
            <span class="uk-text-muted uk-text-small"><span data-uk-icon="icon: github-alt"></span> Proudly powered by BlizzCMS</span>
        </footer>
    </div>

    <div id="newRealm" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-server" aria-hidden="true"></i> Add Realm</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('column_realm_id'); ?></label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="number" name="realmid" placeholder="Auth -> realmlist -> ID" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap User</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="soap_user" placeholder="Example: fixcore" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="password" name="soap_pass" placeholder="Example: blizzcms" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap Port</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="number" name="soap_port" placeholder="Example: 7878" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Hostname</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="hostname" placeholder="Example: 127.0.0.1" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database User</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="host_user" placeholder="Example: root" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="password" name="host_pass" placeholder="Example: ascent" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Name</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="host_db" placeholder="Example: characters" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createRealm"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
