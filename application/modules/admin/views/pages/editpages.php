<?php if(isset($_POST['button_updatePage'])) {
    $title = $_POST['page_title'];
    $desc  = $_POST['page_description'];

    $this->admin_model->updateSpecifyPage($idlink, $title, $desc);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: file-edit"></span> <?= $this->lang->line('panel_admin_edit_pages'); ?> - <?= $this->admin_model->getGeneralPagesSpecifyName($idlink); ?></h4></div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                                <div class="uk-margin">
                                    <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                                    <div class="uk-form-controls">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                            <input class="uk-input" name="page_title" type="text" value="<?= $this->admin_model->getGeneralPagesSpecifyName($idlink); ?>" placeholder="<?= $this->lang->line('form_title'); ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>

                                <div class="uk-margin">
                                    <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                                    <div class="uk-form-controls">
                                        <div class="uk-width-1-1">
                                            <textarea required="" name="page_description" id="ckeditor" rows="10" cols="80"><?= $this->admin_model->getGeneralPagesSpecifyDesc($idlink); ?></textarea>
                                            <script>
                                                CKEDITOR.replace('ckeditor');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <button class="uk-button uk-button-primary uk-width-1-1" name="button_updatePage" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> <?= $this->lang->line('button_save'); ?></button>
                            </form>
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
