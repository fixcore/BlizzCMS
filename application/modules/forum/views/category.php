<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('nav_forums'); ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">
    <!-- font-awesome End -->

    <!-- custom footer -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
    <!-- custom footer -->
</head>

<body class="en-us <?= $this->config->item('theme_name'); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->
    <br><br><br>
    <div role="main">
        <section class="Forum">
            <header class="Forum-header">
                <div class="Container Container--content">
                    <h1 class="Forum-heading"><span class="Forum-title" style="color: #fff;"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?= $this->forum_model->getCategoryName($idlink); ?></span></h1>
                    <div class="Forum-controls">
                        <?php if($this->m_data->isLogged()) { ?>
                            <a uk-toggle="target: #newTopic" class="Forum-button Forum-button--new" id="toggle-create-topic" data-forum-button="true" data-trigger="create.topicpost.forum">
                                <span class="Overlay-element" ></span>
                                <span class="Button-content">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_new_topic'); ?>
                                </span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </header>
            <!-- main -->
            <div class="Forum-content" data-track="nexus.checkbox" id="forum-topics">
                <div class="Forum-ForumTopicList ">
                    <div data-topics-container="sticky">
                        <?php foreach($this->forum_model->getSpecifyCategoryPostsPined($idlink)->result() as $lists) { ?>
                            <a xmlns="http://www.w3.org/1999/xhtml" style="border-color: #00aeff; border-radius: 10px;"  class="ForumTopic ForumTopic--sticky has-blizzard-post is-locked is-inactive" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>" data-created-date="<?= date('d-m-Y', $lists->date); ?>"  data-creator="<?= $this->m_data->getUsernameID($lists->author); ?>">
                                <span class="ForumTopic-details">
                                    <span class="ForumTopic-heading">
                                        <span class="ForumTopic-title--wrapper">
                                            <span class="ForumTopic-title" data-toggle="tooltip" data-tooltip-content="Content description" data-original-title="" title="">
                                                <!-- title -->
                                                <i class="fa fa-commenting" aria-hidden="true"></i> <?= $lists->title; ?>
                                                <!-- title -->
                                                <i class="statusIcon statusIcon-mobile" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
                                            </span>
                                        </span>
                                        <i class="statusIcon statusIcon-desktop" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
                                    </span>
                                    <?php if($this->m_data->getRank($lists->author) > 0) { ?>
                                        <span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                    <?php } else { ?>
                                        <span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                    <?php } ?>
                                    <span class="ForumTopic-timestamp "><?= date('d-m-Y', $lists->date); ?></span>
                                    <span class="ForumTopic-replies">
                                        <span><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->forum_model->getComments($lists->id)->num_rows(); ?></span>
                                    </span>
                                </span>
                            </a>
                        <?php } ?>
                        <!-- test -->
                        <hr>
                        <?php foreach($this->forum_model->getSpecifyCategoryPosts($idlink)->result() as $lists) { ?>
                            <a xmlns="http://www.w3.org/1999/xhtml" class="ForumTopic ForumTopic--sticky has-blizzard-post is-locked is-inactive" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>" data-created-date="<?= date('d-m-Y', $lists->date); ?>"  data-creator="<?= $this->m_data->getUsernameID($lists->author); ?>">
                                <span class="ForumTopic-details">
                                    <span class="ForumTopic-heading">
                                        <span class="ForumTopic-title--wrapper">
                                            <span class="ForumTopic-title" data-toggle="tooltip" data-tooltip-content="Content description" data-original-title="" title="">
                                                <!-- title -->
                                                <i class="fa fa-commenting" aria-hidden="true"></i> <?= $lists->title; ?>
                                                <!-- title -->
                                                <i class="statusIcon statusIcon-mobile" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
                                            </span>
                                        </span>
                                        <i class="statusIcon statusIcon-desktop" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
                                    </span>
                                    <?php if($this->m_data->getRank($lists->author) > 0) { ?>
                                        <span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                    <?php } else { ?>
                                        <span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
                                    <?php } ?>
                                    <span class="ForumTopic-timestamp "><?= date('d-m-Y', $lists->date); ?></span>
                                    <span class="ForumTopic-replies">
                                        <span><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->forum_model->getComments($lists->id)->num_rows(); ?></span>
                                    </span>
                                </span>
                            </a>
                        <?php } ?>
                        <!-- test -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="newTopic" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_new_topic'); ?></h2>
            </div>
            <form action="<?= base_url('forum/newTopic/'.$idlink); ?>" method="post" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="topic_title" required type="text" placeholder="<?= $this->lang->line('form_title'); ?>">
                            </div>
                        </div>
                    </div>

                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                        <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
                    <?php } else { ?>
                        <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                    <?php } ?>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <textarea required="" name="topic_description" id="ckeditor" rows="10" cols="80"></textarea>
                                <script>
                                    CKEDITOR.replace('ckeditor');
                                </script>
                            </div>
                        </div>
                    </div>
                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                        <div class="uk-margin">
                            <div class="uk-form-controls">
                                <div class="uk-width-1-1 uk-text-center">
                                    <label><input id="hightl" class="uk-checkbox" type="checkbox" name="check_highl" value="1"> <?= $this->lang->line('form_highl'); ?></label>
                                    <span style="display:inline-block; width: 14px;"></span>
                                    <label><input id="llock" class="uk-checkbox" type="checkbox" name="check_lock" value="1"> <?= $this->lang->line('form_lock'); ?></label>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createTopic"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
