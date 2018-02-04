<?php if(isset($_POST['addReplyComment'])) {
    $reply = $_POST['replyText'];
    $this->messages_model->insertReply($this->session->userdata('fx_sess_id'), $_POST['addReplyComment'], $reply);
} ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-article.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app-article.css">
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
    <div class="Page-container">
        <div class="Page-content en-US">
            <div class="Pane Pane--adaptiveHg Pane--full Pane--flushContent Pane--backgroundFade" id="featured-articles-pane">
                <div class="Pane-backgroundGradient"></div>
                <div class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                </div>
            </div>
            <div class="Pane Pane--full Pane--innerBorderTop">
                <div style="background-color:transparent" class="Pane-background"></div>
                <div style="" class="Pane-content">
                    <div class="Pane Pane--adaptive Pane--flush" id="recent-articles-pane">
                        <div style="" class="Pane-content">
                            <div class="space-adaptive-medium"></div>
                                <!-- content -->
                                <div class="uk-card uk-card-default uk-background-secondary uk-light uk-card-body uk-width-1-12@m">
                                    <div uk-grid>
                                        <div class="uk-width-small@m">

                                            <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
                                                <?php foreach($this->messages_model->getGroupsUsersPM($this->session->userdata('fx_sess_id'))->result() as $pmlist) { ?>
                                                <li>
                                                    <a href="#"><?= substr($this->m_data->getUsernameID($pmlist->author), 0, 13); ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>

                                        </div>
                                        <div class="uk-width-expand@m">

                                            <ul id="component-nav" class="uk-switcher">
                                        <?php foreach($this->messages_model->getGroupsUsersPM($this->session->userdata('fx_sess_id'))->result() as $pmlist) { ?>

                                                <li>
                                        <?php foreach($this->messages_model->getMessagesSpecificAuthor($pmlist->author, $this->session->userdata('fx_sess_id'))->result() as $messages) { ?>
                                                   
                                                    <p class="uk-margin-small-bottom">
                                                        <?= $messages->message; ?>
                                                    </p>

                                                    <footer>
                                                        <h6>
                                                            <div>
                                                                <a href="<?= base_url('profile/'.$messages->author); ?>">
                                                                    <i class="fa fa-user" aria-hidden="true"></i> <?= $this->m_data->getUsernameID($messages->author) ?>
                                                                </a>
                                                            </div>

                                                            <div style="text-align: right;">
                                                                <i class="fa fa-calendar" aria-hidden="true"></i> <?= $this->lang->line('column_date'); ?>: <?= date('F/d/Y', $messages->date); ?> 
                                                            // <i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('column_time'); ?>: <?= date('l H:i A', $messages->date); ?> 
                                                            </div>
                                                        </h6>
                                                    </footer><hr>

                                            <?php } ?>
                                        <!-- create PM -->
                                        <form action="" method="POST" accept-charset="utf-8">
                                            <div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
                                                <div>
                                                    <div class="uk-margin">
                                                        <textarea name="replyText" required class="uk-textarea" rows="5" placeholder="<?= $this->lang->line('button_add_reply'); ?>"></textarea>
                                                    </div>
                                                    <button type="submit" name="addReplyComment" class="uk-button uk-button-primary" value="<?= $messages->author ?>"><?= $this->lang->line('button_reply'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- create PM -->
                                                </li>
                                        <?php } ?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                            <div class="space-huge"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
