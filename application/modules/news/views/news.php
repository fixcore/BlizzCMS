<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('nav_news'); ?></title>
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
                <div style="" class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                    <div class="space-adaptive-medium"></div>
                    <div id="featured-articles">
                        <div data-selector=".Card" data-target=".Card, .Gallery-wrapper" class="SyncHeight">
                            <div class="Gallery is-constrained is-adaptive">
                                <div class="Gallery-wrapper">
                                    <div class="Gallery-container">
                                        <div class="Gallery-inner">
                                            <?php if ($this->news_model->getNewsTopsList()->num_rows()) { ?>
                                                <?php foreach($this->news_model->getNewsTopsList()->result() as $listTop) { ?>
                                                    <div class="GalleryItem GalleryItem--mediumMargins GalleryItem--adaptiveMargins GalleryItem--landing">
                                                        <a href="<?= base_url(); ?>news/<?= $listTop->id_new ?>" data-external="false" data-article-id="<?= $listTop->id_new ?>" data-analytics="news-promotion" data-analytics-placement="blog:<?= $listTop->id_new ?> - <?= $this->news_model->getNewTitle($listTop->id_new); ?>" class="ArticleLink FeaturedArticle-link align-left">
                                                            <div data-ratio='0.5' data-offset='0' class="Card Card--galleryAdaptiveHeight Card--transparent Card--innerBorder Card--shadow is-adaptive">
                                                                <div class="Card-imageWrapper" style="height: 147px;">
                                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($listTop->id_new); ?>)" class="Card-image"></div>
                                                                </div>
                                                                <div class="Card-content">
                                                                    <div class="FeaturedArticle-community h6 text-priority-4 flush-top flush-bottom text-truncate-ellipsis text-nowrap"></div>
                                                                    <div class="FeaturedArticle-space space-medium"></div>
                                                                    <div class="FeaturedArticle-text text-base multiline max-lines-3 flush-top position-relative text-heavy text-upper">
                                                                        <div class="TextOverflow text-truncate-ellipsis" data-original-text="<?= $this->news_model->getNewTitle($listTop->id_new); ?>"><?= $this->news_model->getNewTitle($listTop->id_new); ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="Gallery-scroll Gallery-left">
                                    <div class="Icon Gallery-scrollIcon text-highlight-disable">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg"><use xlink:href="#Icon_chevron_left"></use></svg>
                                    </div>
                                </div>
                                <div class="Gallery-scroll Gallery-right">
                                    <div class="Icon Gallery-scrollIcon text-highlight-disable">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg"><use xlink:href="#Icon_chevron_right"></use></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-adaptive-medium"></div>
                </div>
            </div>
            <div class="Pane Pane--full Pane--innerBorderTop">
                <div style="background-color:transparent" class="Pane-background"></div>
                <div style="" class="Pane-content">
                    <div class="Pane Pane--adaptive Pane--flush" id="recent-articles-pane">
                        <div style="" class="Pane-content">
                            <div class="space-adaptive-medium"></div>
                            <div id="recent-articles-container">
                                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('news_recent_list'); ?></h2>
                                <div class="space-adaptive-card"></div>
                                <div class="ArticleList" id="recent-articles">
                                    <?php if ($this->news_model->getNewsList()->num_rows()) { ?>
                                        <?php foreach($this->news_model->getNewsList()->result() as $list) { ?>
                                            <div class="ArticleListItem">
                                                <a href="<?= base_url(); ?>news/<?= $list->id ?>" data-external="false" data-article-id="<?= $list->id ?>" data-analytics="<?= $this->lang->line('nav_news'); ?>" data-analytics-placement="blog:<?= $list->id ?> - <?= $list->title ?>" class="ArticleLink ArticleListItem-linkOverlay"></a>
                                                <div class="Grid row ArticleListItem-content">
                                                    <div class="GridItem col-xs-4 col-md-3 ArticleListItem-imageGrid">
                                                        <div style="background-image: url(<?= base_url(); ?>assets/images/news/<?= $list->image ?>); height: 122.5px;" class="ArticleListItem-image"></div>
                                                    </div>
                                                    <div class="GridItem col-xs-8 col-md-9 ArticleListItem-contentGrid">
                                                        <h3 class="ArticleListItem-title"><?= $list->title ?></h3>
                                                        <div class="ArticleListItem-description">
                                                            <div class="space-tiny"></div>
                                                            <div class="h6"><?= $list->description ?></div>
                                                            <div class="space-tiny"></div>
                                                        </div>
                                                        <div class="ArticleListItem-footer h6">
                                                            <a href="<?= base_url(); ?>news/<?= $list->id ?>" data-analytics="<?= $this->lang->line('news_comment'); ?>" data-analytics-placement="<?= $list->id ?>" data-community="<?= $list->title ?>" class="ArticleCommentLink ArticleCommentCount ArticleListItem-comments" target="_blank">
                                                                <span class="ArticleCommentCount-count"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?= $this->news_model->getCommentCount($list->id)->num_rows(); ?></span>
                                                            </a>
                                                            <span class="ArticleListItem-footerTimestamp"><?= date('Y-m-d', $list->date); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="space-huge"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
