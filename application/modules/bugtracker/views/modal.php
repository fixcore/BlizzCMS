    <div id="createReport" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('form_create_bug_report'); ?></h2>
            </div>
            <?= form_open(base_url('bugtracker/create')); ?>
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <?= form_input($title_from); ?>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_type'); ?></label>
                        <div class="uk-form-controls">
                            <!-- dropdown -->
                            <?php 
                                $array = array();
                                foreach($this->bugtracker_model->getTypes() as $row ){
                                    $array[] = $row->title;
                                }
                                echo form_dropdown('type_Bug',  $array , '', $classDrop);
                            ?>
                            <!-- dropdown -->
                        </div>
                    </div>

                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <?= form_textarea('bug_description', $this->config->item('textarea'), 'id="bt_ckeditor"'); ?>
                                <script>
                                    CKEDITOR.replace('bt_ckeditor');
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: link"></span>
                                <?= form_input($url_form); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <?= form_button('button_cancel', $this->lang->line('button_cancel'), $close_form); ?>
                    <?= form_submit($submit_form); ?>
                </div>
            <?php form_close(); ?>
        </div>
    </div>
