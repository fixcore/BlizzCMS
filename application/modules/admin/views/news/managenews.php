<?php if (isset($_POST['button_delNew'])) {
    $this->admin_model->delSpecifyNew($_POST['button_delNew']);
} ?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i> <?= $this->lang->line('admin_website'); ?> - <?= $this->lang->line('panel_admin_news_list'); ?></h4>
                    </div>
                    <div class="uk-width-1-4@s">
                        <a href="" class="" uk-toggle="target: #newNews">
                            <button class="uk-button uk-button-secondary uk-width-1-1"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <?php if(isset($_POST['button_createNew'])) {
                        $title = $_POST['new_title'];
                        $desc  = $_POST['new_description'];
                        $type  = $_POST['new_destac'];
                        $image = $_FILES["new_imageup"];

                        if ($image['type'] == 'image/jpeg')
                        {
                            $random = $this->m_data->randomUTF();
                            $name_new = sha1($image['name'].$random).'.jpg';

                            move_uploaded_file($image["tmp_name"], "./assets/images/news/" . $name_new);

                            $this->admin_model->createNewADM($title, $name_new, $desc, $type);
                        }
                        else
                            echo '<div><div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('image_upload_error').'</p></div></div>';
                    } ?>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('panel_admin_news_list'); ?></div>
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
                                        <?php foreach($this->admin_model->getAdminNewsList()->result() as $news) { ?>
                                            <tr>
                                                <td><?= $news->title ?></td>
                                                <td><?= $news->date ?></td>
                                                <td class="uk-text-center" uk-margin>
                                                    <a href="<?= base_url(); ?>admin/editnews/<?= $news->id ?>" class="uk-button uk-button-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <span class="" style="display:inline-block; width: 5px;"></span>
                                                    <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                        <button class="uk-button uk-button-danger" name="button_delNew" value="<?= $news->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    <div id="newNews" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('form_create_news'); ?></h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_news_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="new_title" required type="text" placeholder="<?= $this->lang->line('form_news_title'); ?>">
                            </div>
                        </div>
                    </div>

                    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <textarea required="" name="new_description" id="ckeditor" rows="10" cols="80"></textarea>
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
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createNew"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
