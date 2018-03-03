    <script src="<?= base_url(); ?>core/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
        selector: '.tinyeditor',
        language: '<?= $this->config->item('tinymce_language'); ?>',
        menubar: false,
        plugins: ['advlist autolink autosave link image lists charmap preview hr searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media table contextmenu directionality emoticons textcolor paste fullpage textcolor colorpicker textpattern'],
        toolbar: 'insert unlink emoticons | undo redo | formatselect fontselect fontsizeselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | blockquote | removeformat'});
    </script>
    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: file-edit"></span> View Ticket - ID:</h4></div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <p><span uk-icon="icon: user"></span> <?= $this->lang->line('form_username'); ?>:</p>
                            <p><span uk-icon="icon: file-edit"></span> <?= $this->lang->line('form_description'); ?>:</p>
                            <div class="uk-column-1-3 uk-column-divider">
                                <p class="uk-text-center"><span uk-icon="icon: cart"></span> <?= $this->lang->line('column_id'); ?>:</p>
                                <p class="uk-text-center"><span uk-icon="icon: clock"></span> <?= $this->lang->line('column_date'); ?>:</p>
                                <p class="uk-text-center"><span uk-icon="icon: info"></span> <?= $this->lang->line('column_status'); ?>:</p>
                            </div>
                            <hr class="uk-divider-icon">
                            <ul class="uk-comment-list">
                                <li>
                                    <article class="uk-comment uk-visible-toggle">
                                        <header class="uk-comment-header uk-position-relative">
                                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-comment-avatar uk-border-rounded" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="60" height="60" alt="">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="uk-comment-body">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </article>
                                </li>
                                <hr>
                            </ul>
                            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <div class="uk-width-1-1">
                                            <textarea class="tinyeditor" name="new_description" rows="10" cols="80"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <button class="uk-button uk-button-primary uk-width-1-1" name="" type="submit"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_reply'); ?></button>
                                    </div>
                                </div>
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
