    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-users" aria-hidden="true"></i> <?= $this->lang->line('admin_users'); ?> - <?= $this->lang->line('admin_users_list'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('admin_users_list'); ?></div>
                            <div class="uk-card-body">
                                <table id="myTable" class="uk-table uk-table-justify uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th><?= $this->lang->line('form_username'); ?></th>
                                            <th class="uk-text-center"><?= $this->lang->line('form_email'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->admin_model->getAdminAccountsList()->result() as $accs) { ?>
                                            <tr>
                                                <td>
                                                   <a href="<?= base_url(); ?>admin/manageaccount/<?= $accs->id ?>" title="<?= $accs->username ?>"><?= $accs->username ?></a>
                                                </td>
                                                <td class="uk-text-center">
                                                   <a href="<?= base_url(); ?>admin/manageaccount/<?= $accs->id ?>" title="<?= $accs->email ?>"><?= $accs->email ?></a>
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
        </div>
    </div>
