<?php if (isset($_POST['button_delSlide'])) {
    $this->admin_model->delSpecifySlide($_POST['button_delSlide']);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <?php if(isset($_POST['button_createSlide'])) {
                    $title = $_POST['slide_title'];
                    $image = $_FILES["slide_imageup"];

                    if ($image['type'] == 'image/jpeg')
                    {
                        $random = $this->m_data->randomUTF();
                        $name_slider = sha1($image['name'].$random).'.jpg';

                        move_uploaded_file($image["tmp_name"], "./assets/images/slides/" . $name_slider);

                        $this->admin_model->insertNewSlides($title, $name_slider);
                    }
                    else
                        echo '<div class="uk-width-1-1@l uk-width-1-1@xl"><div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('image_upload_error').'</p></div></div>';
                } ?>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: settings"></span> <?= $this->lang->line('admin_manage_slides'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: cog" uk-toggle="target: #newSlide"></a>
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
                                    <?php foreach($this->admin_model->getAdminSlideList()->result() as $slides) { ?>
                                        <tr>
                                            <td>
                                                <input type="text" class="uk-input" value="<?= $slides->title ?>" disabled>
                                            </td>
                                            <td class="uk-text-center" uk-margin>
                                                <form action="" method="post" accept-charset="utf-8">
                                                    <button class="uk-button uk-button-danger" name="button_delSlide" value="<?= $slides->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    <div id="newSlide" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-picture-o" aria-hidden="true"></i> Add Image to Slideshow</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" name="slide_title" placeholder="<?= $this->lang->line('form_title'); ?>" required>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_upload_file'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <div uk-form-custom="target: true">
                                    <input type="file" required name="slide_imageup">
                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createSlide"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
