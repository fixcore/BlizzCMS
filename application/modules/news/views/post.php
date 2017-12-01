<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('home'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- semantic -->
    <script src="<?= base_url(); ?>assets/semanticui/semantic.min.js"></script>
    <!-- semantic -->
    <!-- custom footer -->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>

    <!-- content START -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--detail HeroPane--adaptive">
                <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($idlink) ?>)" class="HeroPane-background"></div>
                <div class="HeroPane-padding">
                    <div class="HeroPane-mobilePadding"></div>
                    <div class="HeroPane-desktopPadding"></div>
                </div>
                <div class="HeroPane-content">
                    <div class="max-sm max-left align-left">
                        <div class="Heading Heading--articleHeadline" style="color: #fff;"><i class="newspaper icon"></i> <?= $this->news_model->getNewTitle($idlink); ?></div>
                        <div class="space-medium"></div>
                        <div class="space-adaptive-large"></div>
                    </div>
                </div>
            </div>
            <div class="Pane Pane--flush Pane--adaptive Pane--backgroundTop Pane--innerBorderTop">
                <div style="background-image:url(<?= base_url(); ?>assets/images/backgrounds/generic-texture_bg.png)" class="Pane-background"></div>
                <div style="" class="Pane-content">
                    <div class="space-adaptive-large"></div>
                    <div class="max-sm max-left align-left">
                        <div class="Markup Markup--html">
                            <p><?= $this->news_model->getNewDescription($idlink); ?></p>
                        </div>
                        <div class="space-medium"></div>
                        <div class="space-medium"></div>
                    </div>
                    <div class="space-large hide show-sm"></div>
                    <div class="space-small hide-sm"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- content END -->