    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: list"></span> Manage Tickets</h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="#" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: info"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('column_id'); ?></th>
                                        <th><?= $this->lang->line('form_username'); ?></th>
                                        <th><?= $this->lang->line('column_date'); ?></th>
                                        <th><?= $this->lang->line('column_status'); ?></th>
                                        <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php foreach($this->admin_model->getShopGroupList()->result() as $list) { ?> -->
                                        <tr>
                                            <td>
                                                <input type="text" class="uk-input" value="1" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="test" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="8456451" disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="uk-input" value="open" disabled>
                                            </td>
                                            <td class="uk-text-center" uk-margin>
                                                <a href="#" class="uk-button uk-button-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    <!-- <?php } ?> -->
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
