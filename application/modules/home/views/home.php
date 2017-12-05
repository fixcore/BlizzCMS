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

    <div class="Page-container">
        <div class="Page-content en-GB">
            <div id="home-promoted-carousel-container" class="position-relative">
                <div data-in="0" data-out="0" data-scroll="#home-promoted-scroll" data-analytics="arrowClick" data-analytics-placement="Home" class="Carousel Carousel--fullHg Carousel--fill is-infinite" id="home-promoted-carousel">
                    <div class="Carousel-container">
                        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
                        <!-- slides start -->
                        <?php if ($this->home_model->getSlides()->num_rows() > 0) { ?>
                            <?php foreach ($this->home_model->getSlides()->result() as $slides) { ?>
                                <div class="CarouselItem Home-promotedCarouselItem">
                                    <div class="CarouselItem-content">
                                        <div class="Pane Pane--full Pane--adaptiveHg Home-heroPane">
                                            <div class="Pane-backgroundContainer">
                                                <div style="background-color:#031424" class="Home-promotedStoriesBackgroundContainer">
                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/slides/<?= $slides->mobile_image; ?>)" class="Home-promotedStoriesMobileBackground Home-promotedStoriesBackground"></div>
                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/slides/<?= $slides->image; ?>)" class="Home-promotedStoriesDesktopBackground Home-promotedStoriesBackground"></div>
                                                    <div class="Home-heroPaneGradients">
                                                        <div style="background:linear-gradient(to top, rgba(3,20,36, 1.0) 0%, rgba(3,20,36, 1.0) 20%, rgba(3,20,36, 0.0) 100%)" class="Home-heroPaneMobileGradient Home-heroPaneGradient"></div>
                                                        <div class="Home-heroPaneDesktopGradients Home-heroPaneGradient">
                                                            <div style="background:linear-gradient(to right, rgba(3,20,36, 1.0) 0%, rgba(3,20,36, 1.0) 20%, rgba(3,20,36, 0.0) 100%)" class="Home-heroPaneDesktopLeftGradient"></div>
                                                            <div style="background:linear-gradient(to left, rgba(3,20,36, 1.0) 0%, rgba(3,20,36, 1.0) 20%, rgba(3,20,36, 0.0) 100%)" class="Home-heroPaneDesktopRightGradient"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="" class="Pane-content">
                                                <div data-group="homePromotedCarousel" data-viewport="0" data-anchor="0" data-anchor-target="#home-promoted-carousel-container" data-opacity="-0.00125" data-opacity-max="0.75" class="Parallax Parallax--fill Home-heroPaneParallaxOverlay">
                                                    <div style="background-image:undefined;background-color:#000" class="Parallax-content"></div>
                                                </div>
                                                <div class="Home-heroPaneInner">
                                                    <div class="Pane Pane--flush Pane--adaptiveHg">
                                                        <div style="" class="Pane-content">
                                                            <div class="space-adaptive-medium"></div>
                                                            <div data-group="homePromotedCarousel" data-viewport="0" data-anchor="0" data-anchor-target="#home-promoted-carousel-container" data-distance="0.125" class="Parallax Home-heroTextParallax">
                                                                <div style="background-image:undefined;background-color:undefined" class="Parallax-content">
                                                                    <h3 class="text-truncate-ellipsis Home-heroTitle text-shadow-title" style="font-family: 'Noto Serif', serif; color: #fff;"><?= $slides->title ?></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <!-- slides end -->
                        <!-- icons slides start -->
                        <div class="Carousel-scroll Carousel-prev">
                            <div class="Icon Carousel-scrollIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                    <use xlink:href="#Icon_chevron_left"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="Carousel-scroll Carousel-next">
                            <div class="Icon Carousel-scrollIcon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                    <use xlink:href="#Icon_chevron_right"></use>
                                </svg>
                            </div>
                        </div>
                        <!-- icons slides end -->
                    </div>
                </div>
                <div class="Overlay Overlay--bottom" id="home-promoted-scroll-overlay">
                    <div class="Overlay-content">
                        <div class="align-center">
                            <div data-carousel="#home-promoted-carousel" data-transition-delay="0" class="CarouselScroll is-autoscroll is-autoscroll-interrupt CarouselScroll--singleLine" id="home-promoted-scroll">
                                <div class="CarouselScroll-template">
                                    <div class="CarouselScroll-item">
                                        <div class="CarouselScroll-inner"></div>
                                    </div>
                                </div>
                                <div class="CarouselScroll-container">
                                    <div class="CarouselScroll-item"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Pane Pane--backgroundTop Pane--full">
                <div class="Pane-backgroundContainer">
                    <div style="background-image:url(<?= base_url(); ?>assets/images/backgrounds/step2.png)" class="Pane-background"></div>
                </div>
                <div style="" class="Pane-content">
                    <?php if ($this->shop_model->getShopTop10()->num_rows() > 0) { ?>
                        <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-gamePane">
                            <div style="" class="Pane-content">
                                <h2 class="Heading Home-gameHeading Home-sectionHeading flush-top">
                                    <a href="<?= base_url('store'); ?>" data-analytics="action-link" data-analytics-placement="<?= $this->lang->line('store_see'); ?>" class="Home-gameHeadingLink Home-sectionHeadingLink">
                                        <span class="Home-gameHeadingText Home-sectionHeadingText"><?= $this->lang->line('store'); ?></span>
                                        <span class="Home-gameHeadingLinkText Home-sectionHeadingLinkText"><?= $this->lang->line('store_see'); ?></span>
                                    </a>
                                </h2>
                                <div data-selector=".Home-gameGridCell" data-target=".Home-gameGridContainer" data-below="sm" class="SyncHeight">
                                    <div class="Home-gameGridContainer">
                                        <div class="Home-gameGrid">
                                            <div class="Home-gameGridRow">
                                                <div data-id="blizzard" class="Home-gameGridCell">
                                                    <div data-selector=".Home-gameGridGalleryItem" data-target=".Home-gameGridGallery" class="SyncHeight">
                                                        <div class="Gallery is-disableSnap is-constrained Gallery--lowProfile is-adaptive Home-gameGridGallery">
                                                            <div class="Gallery-wrapper">
                                                                <div class="Gallery-container">
                                                                    <div class="Gallery-inner">
                                                                        <!-- item store START -->
                                                                        <div class="GalleryItem Home-gameGridGalleryItem">
                                                                            <div class="Home-gameGridTileContainer">
                                                                                <a href="<!-- CAMBIAR POR LINK -->" data-analytics="<!-- CAMBIAR POR TITULO -->" data-analytics-placement="<!-- CAMBIAR POR DESCRIPCION -->" class="Home-gameGridGalleryLink">
                                                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/store/item1.jpg)" class="Home-gameGridTile"></div>
                                                                                </a>
                                                                                <div class="Home-gameGridTileOverlay">
                                                                                    <div class="Home-gameGridTileOverlayContent">
                                                                                        <a href="https://playoverwatch.com/" data-analytics="game-card" data-analytics-placement="Overwatch - Explore" class="Home-gameGridTileOverlayButtonLink">
                                                                                            <button class="Button Button--small Home-gameGridTileOverlayButton">Explore</button>
                                                                                        </a>
                                                                                        <a href="https://eu.shop.battle.net/en-gb/product/overwatch?blzcmp=blizzard_hp_Overwatch_card" data-analytics="game-card" data-analytics-placement="Overwatch - Shop Now" class="Home-gameGridTileOverlayLink">
                                                                                            <div class="Icon Home-gameGridTileOverlayLinkIcon">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                                                                                    <use xlink:href="#Icon_shop"></use>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span class="Home-gameGridTileOverlayLinkText">Shop Now</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- item store END -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- scrolls START -->
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
                                                            <!-- scrolls END -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Home-gameGridFixedTitle Home-gameGridCellTitle"><?= $this->config->item('ProjectName'); ?></div>
                                            <div class="Home-gameGridScroll Home-gameGridScrollLeft">
                                                <div class="Icon Gallery-scrollIcon text-highlight-disable">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                                        <use xlink:href="#Icon_chevron_left"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="Home-gameGridScroll Home-gameGridScrollRight">
                                                <div class="Icon Gallery-scrollIcon text-highlight-disable">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                                        <use xlink:href="#Icon_chevron_right"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="Divider Divider--light"></div>
                    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
                    <!-- realmlist START -->
                    <div class="Pane Pane--full Home-additionalLinkPane">
                        <div style="" class="Pane-content">
                            <div class="Home-additionalLinks clearfix ">
                                <h2 style="color: #fff;"><i class="game icon"></i>
                                <?php if ($this->m_general->getExpansionAction() == 1) { ?>
                                    Set Realmlist <?= $this->config->item('realmlist'); ?></h2>
                                <?php } else { ?>
                                    Set Portal "<?= $this->config->item('realmlist'); ?>"</h2>"
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- realmlist END -->
                    <div class="Divider Divider--light"></div>
                    <!-- status server START -->
                    <div class="Pane Pane--full Home-additionalLinkPane">
                        <div style="" class="Pane-content">
                            <div class="Home-additionalLinks clearfix">
                                <!--<h3 style="color: #fff;"><?= $this->m_soap->getRealmStatus(); ?></h3> online -->
                                <div class="">
                                    <div class="ui labeled button" tabindex="0">
                                        <div class="ui blue active button">
                                            <i class="users icon"></i> <?= $this->lang->line('faction_alliance'); ?>
                                        </div>
                                        <a class="ui basic blue left pointing label">
                                            <?= $this->m_general->getCharactersOnlineAlliance(); ?>
                                        </a>
                                    </div>
                                    <div class="ui left labeled button" tabindex="0">
                                        <a class="ui basic red right pointing label">
                                            <?= $this->m_general->getCharactersOnlineHorde(); ?>
                                        </a>
                                        <div class="ui red active button">
                                            <i class="users icon"></i> <?= $this->lang->line('faction_horde'); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- online -->
                            </div>
                        </div>
                    </div>
                    <!-- status server END -->
                </div>
            </div>
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <div class="Pane-content">
                    <div class="Grid row Home-storiesEventsGrid">
                        <div class="GridItem col-md-8">
                            <h2 class="Heading Home-topStoriesHeading Home-sectionHeading flush-top">
                                <a href="<?= base_url('news'); ?>" data-analytics="action-link" data-analytics-placement="<?= $this->lang->line('all_news'); ?>" class="Home-topStoriesHeadingLink Home-sectionHeadingLink">
                                    <span class="Home-topStoriesHeadingText Home-sectionHeadingText"><i class="newspaper icon"></i><?= $this->lang->line('last_news'); ?></span>
                                    <span class="Home-topStoriesHeadingLinkText Home-sectionHeadingLinkText"><?= $this->lang->line('all_news'); ?></span>
                                </a>
                            </h2>
                            <div class="Home-topStories">
                                <?php foreach ($this->news_model->getNewSpecifyID($this->news_model->getPrincipalNew())->result() as $principalNew) { ?>
                                    <div class="Home-topStoriesFeatured">
                                        <a href="<?= base_url() ;?>news/post/<?= $principalNew->id ?>" data-analytics="panel-news" data-analytics-panel="slot:1 - size:lg - type:blog - id:21192216 - image:unknown || Hearthstone: Kobolds &amp; Catacombs Revealed" class="Home-topStoriesFeaturedLink">
                                            <div data-ratio='0.5' data-offset='0' class="Card Home-topStoriesFeaturedCard Card--innerBorder Card--transparent is-primary is-adaptive">
                                                <div class="Card-imageWrapper">
                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $principalNew->image; ?>)" class="Card-image"></div>
                                                </div>
                                                <div class="Card-content">
                                                    <div class="Home-topStoriesFeaturedCardContent">
                                                        <div class="Heading Heading--gridSubtitle Home-topStoriesFeaturedSubtitle">News</div>
                                                        <div class="Heading Heading--gridTitle Home-topStoriesFeaturedTitle"><?= $principalNew->title; ?></div>
                                                        <div class="space-medium"></div>
                                                        <button class="Button Button--small Home-topStoriesFeaturedButton"><?= $this->lang->line('button_learnmore'); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                                <div class="Home-topStoriesSecondary">
                                    <div class="Gallery is-disableSnap is-constrained Home-topStoriesGallery is-adaptive">
                                        <div class="Gallery-wrapper">
                                            <div class="Gallery-container">
                                                <div class="Gallery-inner">
                                                    <!-- tree news START -->
                                                    <?php foreach ($this->news_model->getNewsTree()->result() as $newstree) { ?>
                                                        <div class="GalleryItem Home-topStoriesGalleryItem is-focus">
                                                            <a href="<?= base_url() ;?>news/post/<?= $newstree->id ?>" data-analytics="panel-news" data-analytics-panel="slot:1 - size:sm - type:blog - id:<?= $newstree->id ?> - || <?= $newstree->title ?>" class="Home-topStoriesGalleryLink">
                                                                <div data-ratio="0.5" data-offset="0" class="Card Home-topStoriesGalleryCard Card--innerBorder Card--transparent is-adaptive" style="height: 328px;">
                                                                    <div class="Card-imageWrapper" style="height: 128px;">
                                                                        <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $newstree->image ?>)" class="Card-image"></div>
                                                                    </div>
                                                                    <div class="Card-content">
                                                                        <div class="Heading Home-topStoriesTitle"><?= $newstree->title ?></div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- tree news END -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="GridItem col-md-4">
                            <div class="space-medium hide-md"></div>
                            <h2 class="Heading Home-eventsHeading Home-sectionHeading flush-top" style="color: #fff;"><i class="announcement icon"></i><?= $this->lang->line('up_events'); ?></h2>
                            <div class="Home-eventsTableWrapper">
                                <div class="Home-eventsTable">
                                    <!-- Events START -->
                                    <?php foreach ($this->events_model->getEventsLimitFive()->result() as $events) { ?>
                                        <a href="<?= base_url(); ?>events/<?= $events->id ?>" target="_blank" data-analytics="action-link" data-analytics-placement="<?= base_url(); ?> || <?= $events->title; ?>" data-start="<?= date('Y-m-d', $events->date_event_start); ?>" data-end="<?= date('Y-m-d', $events->date_event_end); ?>" data-partial="false" class="Home-eventsTableRow">
                                            <div class="Home-eventsTableCell Home-eventsTableDatesCell">
                                                <div class="Home-eventsTableDateHeading"><?= $this->m_general->getMonth(date('m', $events->date_event_start)); ?></div>
                                                <div class="Home-eventsTableDateRange"><?= date('d', $events->date_event_start); ?>-<?= date('d', $events->date_event_end) ?></div>
                                            </div>
                                            <div class="Home-eventsTableCell Home-eventsTableNameCell">
                                                <div class="Home-eventsTableTitle"><?= $events->title; ?></div>
                                            </div>
                                            <div class="Home-eventsTableCell Home-eventsTableCaretCell">
                                                <div class="Home-eventsTableIconContainer">
                                                    <div class="Icon Home-eventsTableCaret">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg">
                                                            <use xlink:href="#Icon_chevron_right"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    <!-- Events END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
