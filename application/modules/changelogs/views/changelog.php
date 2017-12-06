<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('home'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-26b4d398e5ef87ac677896e9ff940ebf3ff9a773b2d40151f1ee0688a79f58d7a4df1d7b7a67702e8f96e354bb40eb77f69d6069635e638a47632474421f721f.css">
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

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <!-- content START -->
            <div class="Page-container" style="top: -150px; position: relative;">
                <div class="Page-content en-US">
                    <div style="" class="HeroPane HeroPane--detail HeroPane--adaptive"> 	
                        <div class="HeroPane-padding">
                            <div class="HeroPane-mobilePadding"></div>
                            <div class="HeroPane-desktopPadding"></div>
                        </div>
                        <div class="HeroPane-content">
                            <div class="max-sm max-left align-left">
                                <div class="Heading Heading--articleHeadline" style="color: #fff;"><i class="list icon"></i> <?= $this->changelogs_model->getChanglogTitle($this->changelogs_model->getLastID()); ?></div>
                            </div>
                        </div>
                        <div class="Pane Pane--flush Pane--adaptive Pane--backgroundTop Pane--innerBorderTop">
                            <div style="" class="Pane-content">
                                <div class="space-adaptive-medium"></div>
                                <div class="max-sm max-left align-left">
                                    <div class="Markup Markup--html">
                                        <div class="ui segments">
                                            <div class="ui segment">
                                                <p><i class="configure icon"></i> Changes Applied</p>
                                            </div>
                                            <div class="ui secondary segment">
                                                <p><?= $this->changelogs_model->getChanglogDesc($idlink); ?></p>
                                                <p align=right><i class="wait icon"></i><?= date('d-m-Y', $this->changelogs_model->getChanglogDate($idlink)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-large hide show-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content END -->
        </div>
        <div class="col-md-4">
            <div class="Page-container" style="top: -150px; position: relative;">
                <div class="Page-content en-US">
                    <div style="" class="HeroPane HeroPane--detail HeroPane--adaptive">
                        <div class="HeroPane-padding">
                            <div class="HeroPane-mobilePadding"></div>
                            <div class="HeroPane-desktopPadding"></div>
                        </div>
                        <div class="HeroPane-content">
                            <div class="max-sm max-center align-center">
                                <!-- content right -->
                                <?php foreach($this->changelogs_model->getChangelogs()->result() as $changelogsList) { ?>
                                    <div class="ArticleList" id="recent-articles">
                                        <div class="ArticleListItem">
                                            <a href="<?= base_url('changelogs/id/'); ?><?= $changelogsList->id ?>" data-external="false" data-article-id="1" data-analytics="Changelog" data-analytics-placement="Changelog:<?= $changelogsList->id ?> - <?= $changelogsList->title ?>" class="ArticleLink ArticleListItem-linkOverlay"></a>
                                            <div class="Grid row ArticleListItem-content">
                                                <div class="GridItem col-xs-12 col-md-12 ArticleListItem-contentGrid">
                                                    <h3 class="ArticleListItem-title"><?= $changelogsList->title ?></h3>
                                                    <div class="ArticleListItem-description">
                                                        <div class="space-tiny"></div>
                                                    </div>
                                                    <div class="ArticleListItem-footer h6">
                                                        <a href="<?= base_url('changelogs/id/'); ?><?= $changelogsList->id ?>" data-analytics="comment" data-analytics-placement="<?= $changelogsList->id ?>" data-community="<?= $changelogsList->title ?>" class="ArticleCommentLink ArticleCommentCount ArticleListItem-comments" target="_blank"></a>
                                                        <span class="ArticleListItem-footerTimestamp"><?= date('d-m-Y', $changelogsList->date); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- content right -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
