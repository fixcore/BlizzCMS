    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('admin_news'); ?> - <?= $this->lang->line('panel_admin_edit_news'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <?php if(isset($_POST['button_updateNew'])) {
                        $title = $_POST['new_title'];
                        $desc  = $_POST['new_description'];
                        $type  = $_POST['new_destac'];
                        $image = $_FILES["new_imageup"];

                        if ($image['type'] == 'image/jpeg')
                        {
                            $random = $this->m_data->randomUTF();
                            $name_new = sha1($image['name'].$random).'.jpg';

                            move_uploaded_file($image["tmp_name"], "./assets/images/news/" . $name_new);

                            $this->admin_model->updateNewADM($idlink, $title, $name_new, $desc, $type);
                        }
                        else
                            echo '<div><div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('image_upload_error').'</p></div></div>';
                    } ?>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_edit_news'); ?> - <?= $this->admin_model->getGeneralNewsSpecifyName($idlink); ?></div>
                            <div class="uk-card-body">
                                <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_news_title'); ?></label>
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                                <input class="uk-input" name="new_title" type="text" value="<?= $this->admin_model->getGeneralNewsSpecifyName($idlink); ?>" placeholder="<?= $this->lang->line('form_news_title'); ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>

                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                                        <div class="uk-form-controls">
                                            <div class="uk-width-1-1">
                                                <textarea required="" name="new_description" id="ckeditor" rows="10" cols="80"><?= $this->admin_model->getGeneralNewsSpecifyDesc($idlink); ?></textarea>
                                                <script>
                                                    CKEDITOR.replace('ckeditor');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_highl'); ?></label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="new_destac">
                                                <option value="1"><?= $this->lang->line('option_no'); ?></option>
                                                <option value="2"><?= $this->lang->line('option_yes'); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_upload_file'); ?></label>
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <div uk-form-custom="target: true">
                                                    <input type="file" required name="new_imageup">
                                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="uk-button uk-button-primary uk-width-1-1" name="button_updateNew" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> <?= $this->lang->line('button_save'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
