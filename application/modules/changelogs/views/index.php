<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('changelogs'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-article.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app-article.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/blizzcms-themes.css?v=58-88"/>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font-awesome End -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
</head>


<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <div class="Pane Pane--adaptive Pane--flush">
                <div style="" class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                    <div class="space-adaptive-large hide show-sm"></div>
                    <div id="article-detail-container">
                        <?php if($this->changelogs_model->getAll()->num_rows()) { ?>
                            <div id="article-detail">
                                <article data-id='' data-title="" class="ArticleDetail">
                                    <div class="ArticleDetail-heading">
                                        <div class="ArticleDetail-headingBlock">
                                            <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"><i class="fa fa-spinner fa-pulse fa-fw"></i> Recent Changes</div>
                                            <h1 class="Heading Heading--articleHeadline ArticleDetail-title" style="color: #fff;"><i class="fa fa-wrench" aria-hidden="true"></i> <?= $this->changelogs_model->getChanglogTitle($this->changelogs_model->getLastID()); ?></h1>
                                            <div class="Heading Heading--articleByline flush-bottom">
                                                <div class="ArticleDetail-subHeadingContainer">
                                                    <div class="ArticleDetail-subHeadingLeft">
                                                        <span class="ArticleDetail-bylineBy">
                                                            <span itemprop="author" class="ArticleDetail-bylineAuthor text-identity">Published by STAFF</span>
                                                        </span>
                                                    </div>
                                                    <div class="ArticleDetail-subHeadingRight">
                                                        <span class="ArticleDetail-bylineDate"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->changelogs_model->getChanglogDate($this->changelogs_model->getLastID())); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-large"></div>
                                        </div>
                                        <div class="ArticleDetail-headingImageBlock">
                                            <div class="Image">
                                                <img src="<?= base_url(); ?>assets/images/changelogs/default.jpg" alt="" class="Image-image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ResponsiveBlogs">
                                        <div class="ArticleDetail-content">
                                            <p><?= $this->changelogs_model->getChanglogDesc($this->changelogs_model->getLastID()); ?></p>
                                        </div>
                                    </div>
                                    <div class="space-adaptive-medium"></div>
                                </article>
                            </div>
                            <div id="article-sidebar">
                                <div class="ArticleSidebar hide show-md">
                                    <div class="ArticleSidebar-inner">
                                        <div data-wheel="true" class="Scrollable ArticleSidebar-scrollable">
                                            <div class="Scrollable-scrollbar scrollbar">
                                                <div class="Scrollable-track track">
                                                    <div class="Scrollable-thumb thumb">
                                                        <div class="Scrollable-end end"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Scrollable-viewport viewport">
                                                <div class="Scrollable-overview overview">
                                                    <div class="ArticleSidebar-content">
                                                        <?php foreach($this->changelogs_model->getChangelogs()->result() as $changelogsList) { ?>
                                                            <div data-id='<?= $changelogsList->id ?>' class="ArticleSidebarItem">
                                                                <a href="<?= base_url('changelogs/'); ?><?= $changelogsList->id ?>" data-external="false" data-article-id='' data-analytics="<?= $changelogsList->id ?> - <?= $changelogsList->title ?>" class="ArticleLink ArticleSidebarItem-link">
                                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/changelogs/default.jpg)" class="ArticleSidebarItem-image"></div>
                                                                    <div class="ArticleSidebarItem-text">
                                                                        <div class="ArticleSidebarItem-subtitle">
                                                                            <div class="ArticleSidebarItem-subtitleLeft">
                                                                                <div class="ArticleSidebarItem-community"><i class="fa fa-spinner fa-pulse fa-fw"></i> Changelogs</div>
                                                                            </div>
                                                                            <div class="ArticleSidebarItem-timestamp"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $changelogsList->date); ?></div>
                                                                        </div>
                                                                        <div class="ArticleSidebarItem-title"><?= $changelogsList->title ?></div>
                                                                    </div>
                                                                    <div class="ArticleSidebarItem-progress">
                                                                        <div class="ArticleSidebarItem-progressBar"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="uk-alert-warning" uk-alert>
                                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> The server does not have changelogs to inform at this time.</p>
                            </div>
                            <div class="space-adaptive-small"></div>
                        <?php } ?>
                    </div>
                    <div class="space-adaptive-large"></div>
                </div>
            </div>
        </div>
