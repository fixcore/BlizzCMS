<?php if(isset($_POST['button_deleteForum'])) {
    $this->admin_model->deleteForum($_POST['button_deleteForum']);
} ?>

<?php if(isset($_POST['button_createForum'])) {
    $name = $_POST['forum_name'];
    $desc = $_POST['forum_description'];
    $icon = $_POST['forum_icon'];
    $type = $_POST['forum_type'];
    $cate = $_POST['forum_cate'];

    $this->admin_model->insertForum($name, $cate, $desc, $icon, $type);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('admin_manege_forums'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: pencil" uk-toggle="target: #newForum"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('form_title'); ?></th>
                                        <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->admin_model->getForumForumList()->result() as $list) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $list->name; ?>" disabled>
                                            </td>
                                            <td class="uk-text-center" uk-margin>
                                                <a href="#" class="uk-button uk-button-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <span class="" style="display:inline-block; width: 5px;"></span>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="uk-button uk-button-danger" name="button_deleteForum" value="<?= $list->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    <div id="newForum" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('form_create_forums'); ?></h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_forum_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="forum_name" type="text" placeholder="<?= $this->lang->line('form_forum_title'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_forum_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <input class="uk-input" name="forum_description" required type="text" placeholder="<?= $this->lang->line('form_forum_description'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_forum_icon_name'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <input class="uk-input" name="forum_icon" required type="text" placeholder="<?= $this->lang->line('placeholder_forum_icon'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_type'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="forum_type">
                                <option value="1"><?= $this->lang->line('option_everyone'); ?></option>
                                <option value="2"><?= $this->lang->line('option_staff'); ?></option>
                                <option value="3"><?= $this->lang->line('option_all'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_category'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="forum_cate">
                                <?php foreach($this->admin_model->getForumCategoryList()->result() as $categ) { ?>
                                    <option value="<?= $categ->id ?>"><?= $categ->categoryName ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createForum"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
