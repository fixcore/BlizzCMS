<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

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
    </div>
    </div>
    </div>
    <!-- submenu -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <div class="Pane-content">
                    <div class="Grid row Home-storiesEventsGrid">
                        <div class="GridItem col-md-3"></div>
                        <div class="GridItem col-md-6">
                            <h2 class="uk-text-primary uk-text-center"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('button_login'); ?></h2>
                            <p class="uk-text-center" style="color: #fff;"><?= $this->lang->line('login_description'); ?></p>

                            <?php if(isset($_GET['password'])) {
                                echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('password_error').'</p></div>';
                            } ?>

                            <?php if(isset($_GET['account'])) {
                                echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('account_error').'</p></div>';
                            } ?>

                            <?= form_open(base_url('user/verify2')); ?>
                                <div uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-inline; delay: 500; repeat: true">
                                    <div class="uk-margin">
                                        <div class="uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <?= form_input($email_form); ?>
                                        </div>
                                        <div class="uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                            <?= form_input($password_form); ?>
                                        </div>
                                    </div>
                                </div>
                                <?= form_submit($submit_form); ?>
                            <?= form_close(); ?>
                            <br>
                            <a href="<?= base_url('register'); ?>">
                                    <button class="uk-button uk-button-secondary uk-width-1-1" name="<?= $this->lang->line('no_account'); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('button_account_create'); ?></button>
                            </a>
                        </div>
                        <div class="GridItem col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
