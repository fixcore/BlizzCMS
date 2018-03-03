<?php if($this->m_permissions->getIsAdmin($this->session->userdata('fx_sess_id'))) { ?>
    <script src="<?= base_url(); ?>core/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
        selector: '.tinyeditor',
        language: '<?= $this->config->item('tinymce_language'); ?>',
        menubar: false,
        plugins: ['advlist autolink autosave link image lists charmap preview hr searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media table contextmenu directionality emoticons textcolor paste fullpage textcolor colorpicker textpattern'],
        toolbar: 'insert unlink emoticons | undo redo | formatselect fontselect fontsizeselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | blockquote | removeformat'});
    </script>
<?php } else { ?>
    <script src="<?= base_url(); ?>core/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
        selector: '.tinyeditor',
        language: '<?= $this->config->item('tinymce_language'); ?>',
        menubar: false,
        plugins: ['advlist autolink autosave link image lists charmap preview hr searchreplace wordcount visualblocks visualchars code fullscreen media table contextmenu directionality emoticons textcolor paste fullpage textcolor colorpicker textpattern'],
        toolbar: 'insert unlink emoticons | undo redo | fontselect fontsizeselect | bold italic | forecolor | bullist numlist outdent indent | link unlink | removeformat'});
    </script>
<?php } ?>

    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-principal-title uk-text-white"><?= $this->forum_model->getCategoryName($idlink); ?></div>
                <?php if($this->m_data->isLogged()) { ?>
                    <span class="uk-align-right">
                        <a href="#" uk-toggle="target: #newTopic">
                            <button class="uk-button uk-button-primary"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_new_topic'); ?></button>
                        </a>
                    </span>
                <?php } ?>
                <p class="uk-text-uppercase uk-text-bold uk-text-white"><?= $this->lang->line('forum_topic_list'); ?></p>
                <div class="uk-space-small"></div>
                <div class="Forum-ForumTopicList" uk-scrollspy="cls: uk-animation-fade; repeat: true">
                    <?php foreach($this->forum_model->getSpecifyCategoryPostsPined($idlink)->result() as $lists) { ?>
                        <a class="ForumTopic ForumTopic--sticky" style="border-color: #00aeff;" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>">
                            <span class="ForumTopic-type">
                                <span uk-icon="icon: star"></span>
                            </span>
                            <span class="ForumTopic-details">
                                <span class="ForumTopic-heading">
                                    <span class="ForumTopic-title--wrapper">
                                        <span class="ForumTopic-title">
                                            <?= $lists->title; ?>
                                        </span>
                                    </span>
                                </span>
                                <?php if($this->m_data->getRank($lists->author) > 0) { ?>
                                    <span class="ForumTopic-author ForumTopic-author-staff"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                <?php } else { ?>
                                    <span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                <?php } ?>
                                <span class="ForumTopic-timestamp"><?= date('d-m-Y', $lists->date); ?></span>
                                <span class="ForumTopic-replies">
                                    <span uk-icon="icon: commenting; ratio: 0.9"></span>&nbsp;<?= $this->forum_model->getComments($lists->id)->num_rows(); ?>
                                </span>
                            </span>
                        </a>
                    <?php } ?>
                    <hr>
                    <?php foreach($this->forum_model->getSpecifyCategoryPosts($idlink)->result() as $lists) { ?>
                        <a class="ForumTopic" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>">
                            <span class="ForumTopic-type">
                                <span uk-icon="icon: comments"></span>
                            </span>
                            <span class="ForumTopic-details">
                                <span class="ForumTopic-heading">
                                    <span class="ForumTopic-title--wrapper">
                                        <span class="ForumTopic-title">
                                            <?= $lists->title; ?>
                                        </span>
                                    </span>
                                </span>
                                <?php if($this->m_data->getRank($lists->author) > 0) { ?>
                                    <span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                <?php } else { ?>
                                    <span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                <?php } ?>
                                <span class="ForumTopic-timestamp"><?= date('d-m-Y', $lists->date); ?></span>
                                <span class="ForumTopic-replies">
                                    <span uk-icon="icon: commenting; ratio: 0.9"></span>&nbsp;<?= $this->forum_model->getComments($lists->id)->num_rows(); ?>
                                </span>
                            </span>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
        <div class="uk-space-large"></div>
