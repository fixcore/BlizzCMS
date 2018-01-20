<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('news'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-26b4d398e5ef87ac677896e9ff940ebf3ff9a773b2d40151f1ee0688a79f58d7a4df1d7b7a67702e8f96e354bb40eb77f69d6069635e638a47632474421f721f.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
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
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

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

    <div data-url="https://d9me64que7cqs.cloudfront.net/components/Icon/Icon-6e31618f7193f6dc334044c35440d52262a57acee5f4393fd60c597d1f12fb749b4e25d9e4b275a3379cbbd592aa756fcf8cab6bdbea43f95ff50e29699136d8.svg" class="SvgLoader"></div>

    <div class="Page-container">
        <div class="Page-content en-GB">
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <!-- news list top START -->
                <div id="featured-articles"><br><br>
                    <div data-selector=".Card" data-target=".Card, .Gallery-wrapper" class="SyncHeight">
                        <div class="Gallery is-constrained is-adaptive">
                            <div class="Gallery-wrapper">
                                <div class="Gallery-container">
                                    <div class="Gallery-inner">
                                        <?php if ($this->news_model->getNewsTopsList()->num_rows()) { ?>
                                        <?php foreach($this->news_model->getNewsTopsList()->result() as $listTop) { ?>
                                            <div class="GalleryItem GalleryItem--mediumMargins GalleryItem--adaptiveMargins GalleryItem--landing is-focus">
                                                <a href="<?= base_url(); ?>news/<?= $listTop->id_new ?>" data-external="false" data-article-id="<?= $listTop->id_new ?>" data-analytics="news-promotion" data-analytics-placement="blog:<?= $listTop->id_new ?> - <?= $this->news_model->getNewTitle($listTop->id_new); ?>" class="ArticleLink FeaturedArticle-link align-left">
                                                    <div data-ratio="0.5" data-offset="0" class="Card Card--galleryAdaptiveHeight Card--transparent Card--innerBorder Card--shadow is-adaptive" style="height: 306px;">
                                                        <div class="Card-imageWrapper" style="height: 147px;">
                                                            <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($listTop->id_new); ?>)" class="Card-image"></div>
                                                        </div>
                                                        <div class="Card-content">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                        <use xlink:href="#Icon_chevron_left"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="Gallery-scroll Gallery-right">
                                <div class="Icon Gallery-scrollIcon text-highlight-disable">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                        <use xlink:href="#Icon_chevron_right"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- news list top END -->
            </div>
            <div class="space-adaptive-medium"></div>
            <!-- 1984 START -->
            <div class="Pane Pane--full Pane--innerBorderTop">
                <div style="background-color:transparent" class="Pane-background"></div>
                <div style="" class="Pane-content">
                    <div class="Pane Pane--adaptive Pane--flush" id="recent-articles-pane">
                        <div style="" class="Pane-content">
                            <div class="space-adaptive-medium"></div>
                            <div id="recent-articles-container">
                                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('recent_news'); ?></h2>
                                <div class="space-adaptive-card"></div>
                                <div class="ArticleList" id="recent-articles">
                                    <?php if ($this->news_model->getNewsList()->num_rows()) { ?>
                                    <?php foreach($this->news_model->getNewsList()->result() as $list) { ?>
                                        <div class="ArticleListItem">
                                            <a href="<?= base_url(); ?>news/<?= $list->id ?>" data-external="false" data-article-id="<?= $list->id ?>" data-analytics="<?= $this->lang->line('news'); ?>" data-analytics-placement="blog:<?= $list->id ?> - <?= $list->title ?>" class="ArticleLink ArticleListItem-linkOverlay"></a>
                                            <div class="Grid row ArticleListItem-content">
                                                <div class="GridItem col-xs-4 col-md-3 ArticleListItem-imageGrid">
                                                    <div style="background-image: url(<?= base_url(); ?>assets/images/news/<?= $list->image ?>); height: 122.5px;" class="ArticleListItem-image"></div>
                                                </div>
                                                <div class="GridItem col-xs-8 col-md-9 ArticleListItem-contentGrid">
                                                    <h3 class="ArticleListItem-title"><?= $list->title ?></h3>
                                                    <div class="ArticleListItem-description">
                                                        <div class="space-tiny"></div>
                                                    </div>
                                                    <div class="ArticleListItem-footer h6">
                                                        <a href="<?= base_url(); ?>news/<?= $list->id ?>" data-analytics="<?= $this->lang->line('new_comment'); ?>" data-analytics-placement="<?= $list->id ?>" data-community="<?= $list->title ?>" class="ArticleCommentLink ArticleCommentCount ArticleListItem-comments" target="_blank">
                                                            <div class="Icon Icon--inline ArticleCommentCount-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                                                    <use xlink:href="#Icon_chat"></use>
                                                                </svg>
                                                            </div>
                                                            <span class="ArticleCommentCount-count"><?= $this->news_model->getCommentCount($list->id)->num_rows(); ?></span>
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
            <!-- 1984 END -->
        </div>
    </div>
