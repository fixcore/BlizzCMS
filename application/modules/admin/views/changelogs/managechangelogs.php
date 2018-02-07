<?php if (isset($_POST['button_delChan'])) {
    $this->admin_model->delChangelog($_POST['button_delChan']);
} ?>

<?php if(isset($_POST['button_createNew'])) {
    $desc = $_POST['chang_description'];
    $title  = $_POST['chang_title'];

    $this->admin_model->insertChangelog($title, $desc);
} ?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i> <?= $this->lang->line('admin_website'); ?> - <?= $this->lang->line('panel_admin_changelogs_list'); ?></h4>
                    </div>
                    <div class="uk-width-1-4@s">
                        <a href="" class="" uk-toggle="target: #newChangelog">
                            <button class="uk-button uk-button-secondary uk-width-1-1"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-history" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_changelogs_list'); ?></div>
                            <div class="uk-card-body">
                                <table id="myTable" class="uk-table uk-table-justify uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th><?= $this->lang->line('form_title'); ?></th>
                                            <th><?= $this->lang->line('column_date'); ?></th>
                                            <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->admin_model->getChangelogs() as $changelogs) { ?>
                                            <tr>
                                                <td><?= $changelogs->title ?></td>
                                                <td><?= $changelogs->date ?></td>
                                                <td class="uk-text-center" uk-margin>
                                                    <a href="#" class="uk-button uk-button-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <span class="" style="display:inline-block; width: 5px;"></span>
                                                    <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                        <button class="uk-button uk-button-danger" name="button_delChan" value="<?= $changelogs->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        </div>
    </div>

    <div id="newChangelog" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-history" aria-hidden="true"></i> <?= $this->lang->line('form_create_changelog'); ?></h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_changelog_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="chang_title" required type="text" placeholder="<?= $this->lang->line('form_changelog_title'); ?>">
                            </div>
                        </div>
                    </div>

                    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <textarea required="" name="chang_description" id="ckeditor" rows="10" cols="80"></textarea>
                                <script>
                                    CKEDITOR.replace('ckeditor');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createNew"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
