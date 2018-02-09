<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->pages_model->getName($idlink) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-article.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app-article.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
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
            <div class="container">
                <div class="space-adaptive-medium"></div>
                <div class="space-adaptive-medium"></div>
                <div class="cold-md-12">
                    <div class="cold-md-1"></div>
                    <div class="cold-md-10 uk-text-break">
                        <article data-id='' data-title="" class="ArticleDetail">
                            <div class="ArticleDetail-heading">
                                <div class="ArticleDetail-headingBlock">
                                    <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"></div>
                                    <h1 class="Heading Heading--articleHeadline ArticleDetail-title" style="color: #fff;"><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->pages_model->getName($idlink) ?></h1>
                                    <div class="Heading Heading--articleByline flush-bottom">
                                        <div class="ArticleDetail-subHeadingContainer">
                                            <div class="ArticleDetail-subHeadingLeft">
                                                <span class="ArticleDetail-bylineBy">
                                                    <span itemprop="author" class="ArticleDetail-bylineAuthor text-identity"><?= $this->lang->line('news_article_published'); ?></span>
                                                </span>
                                            </div>
                                            <div class="ArticleDetail-subHeadingRight">
                                                <span class="ArticleDetail-bylineDate"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('Y-m-d', $this->pages_model->getDate($idlink)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-medium"></div>
                                </div>
                            </div>
                        </article>
                        <p><?= $this->pages_model->getDesc($idlink); ?></p>
                        <div class="space-adaptive-medium"></div>
                    </div>
                    <div class="cold-md-1"></div>
                </div>
            </div>
        </div>
