    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('admin_chars_list'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: info"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <ul uk-accordion>
                                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                ?>
                                    <li>
                                        <a class="uk-accordion-title" href="#"><span data-uk-icon="icon: server"></span> Realm - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></a>
                                        <div class="uk-accordion-content">
                                            <table class="uk-table uk-table-justify uk-table-divider">
                                                <thead>
                                                    <tr>
                                                        <th><?= $this->lang->line('column_own'); ?></th>
                                                        <th class="uk-text-center"><?= $this->lang->line('column_name'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($this->admin_model->getAdminCharactersList($multiRealm)->result() as $chars) { ?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid ?>/<?= $charsMultiRealm->id ?>" title="<?= $chars->account ?>"><?= $this->m_data->getUsernameID($chars->account); ?></a>
                                                            </td>
                                                            <td class="uk-text-center">
                                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid ?>/<?= $charsMultiRealm->id ?>" title="<?= $chars->name ?>"><?= $chars->name ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
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
