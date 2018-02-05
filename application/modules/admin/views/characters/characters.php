    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-users" aria-hidden="true"></i> <?= $this->lang->line('admin_users'); ?> - <?= $this->lang->line('admin_chars_list'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('admin_chars_list'); ?></div>
                            <div class="uk-card-body">
                                <ul uk-accordion>
                                    <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                        $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                    ?>
                                        <li>
                                            <a class="uk-accordion-title" href="#"><i class="fa fa-server" aria-hidden="true"></i> Realm - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></a>
                                            <div class="uk-accordion-content">
                                                <table id="myTable" class="uk-table uk-table-justify uk-table-divider">
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
        </div>
    </div>
