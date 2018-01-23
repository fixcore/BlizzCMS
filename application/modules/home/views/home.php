<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('home'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
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
    <link href="https://api.dkamps18.net/css/font/discord/discord.css" rel="stylesheet"  type="text/css">
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
            <div id="home-promoted-carousel-container" class="position-relative">
                <?php if ($this->m_modules->getStatusSlides() == '1') { ?>
                    <?php if ($this->home_model->getSlides()->num_rows()) { ?>
                        <div data-in="0" data-out="0" data-lockout="500" data-scroll="#home-promoted-scroll" data-analytics="arrowClick" data-analytics-placement="Home" class="Carousel Carousel--fullHg Carousel--fill is-infinite" id="home-promoted-carousel">
                            <div class="Carousel-container">
                                <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
                                <!-- slides start -->
                                <?php foreach ($this->home_model->getSlides()->result() as $slides) { ?>
                                    <div class="CarouselItem Home-promotedCarouselItem">
                                        <div class="CarouselItem-content">
                                            <div class="Pane Pane--full Pane--adaptiveHg Home-heroPane">
                                                <div class="Pane-backgroundContainer">
                                                    <div style="background-color:#001619" class="Home-promotedStoriesBackgroundContainer">
                                                        <div style="background-image:url(<?= base_url(); ?>assets/images/slides/<?= $slides->mobile_image; ?>)" class="Home-promotedStoriesMobileBackground Home-promotedStoriesBackground"></div>
                                                        <div style="background-image:url(<?= base_url(); ?>assets/images/slides/<?= $slides->image; ?>)" class="Home-promotedStoriesDesktopBackground Home-promotedStoriesBackground"></div>
                                                        <div class="Home-heroPaneGradients">
                                                            <div style="background:linear-gradient(to top, rgba(0,22,25, 1.0) 0%, rgba(0,22,25, 1.0) 20%, rgba(0,22,25, 0.0) 100%)" class="Home-heroPaneMobileGradient Home-heroPaneGradient"></div>
                                                            <div class="Home-heroPaneDesktopGradients Home-heroPaneGradient">
                                                                <div style="background:linear-gradient(to right, rgba(0,22,25, 1.0) 0%, rgba(0,22,25, 1.0) 20%, rgba(0,22,25, 0.0) 100%)" class="Home-heroPaneDesktopLeftGradient"></div>
                                                                <div style="background:linear-gradient(to left, rgba(0,22,25, 1.0) 0%, rgba(0,22,25, 1.0) 20%, rgba(0,22,25, 0.0) 100%)" class="Home-heroPaneDesktopRightGradient"></div>
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
                                                                <div data-group="homePromotedCarousel" data-viewport="0" data-anchor="0" data-anchor-target="#home-promoted-carousel-container" data-distance="0.35" data-opacity="0.005" class="Parallax Home-heroLogo">
                                                                    <div style="background-image:undefined;background-color:undefined" class="Parallax-content">
                                                                        <img src="" alt="" class="Home-heroLogoImage"/>
                                                                    </div>
                                                                </div>
                                                                <div class="space-adaptive-medium"></div>
                                                                <div data-group="homePromotedCarousel" data-viewport="0" data-anchor="0" data-anchor-target="#home-promoted-carousel-container" data-distance="0.125" class="Parallax Home-heroTextParallax">
                                                                    <div style="background-image:undefined;background-color:undefined" class="Parallax-content">
                                                                        <h3 class="Home-heroTitle text-shadow-title" style="font-family: 'Noto Serif', serif; color: #fff;"><?= $slides->title ?></h3>
                                                                        <div class="Home-heroButtonContainer">
                                                                            <a href="" data-analytics="header-click">
                                                                                <button class="Button Home-heroButton">Learn More</button>
                                                                            </a>
                                                                        </div>
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
                                <!-- slides end -->
                                <!-- icons slides start -->
                                <div class="Carousel-scroll Carousel-prev">
                                    <div class="Icon Carousel-scrollIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg"><use xlink:href="#Icon_chevron_left"></use></svg>
                                    </div>
                                </div>
                                <div class="Carousel-scroll Carousel-next">
                                    <div class="Icon Carousel-scrollIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" class="Icon-svg"><use xlink:href="#Icon_chevron_right"></use></svg>
                                    </div>
                                </div>
                                <!-- icons slides end -->
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
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
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <div class="Pane-content">
                    <div class="Grid row Home-storiesEventsGrid">
                        <?php if ($this->m_modules->getStatusNews() == '1') { ?>
                            <div class="GridItem col-md-8">
                                <h2 class="Heading Home-topStoriesHeading Home-sectionHeading flush-top">
                                    <a href="<?= base_url('news'); ?>" data-analytics="action-link" data-analytics-placement="<?= $this->lang->line('all_news'); ?>" class="Home-topStoriesHeadingLink Home-sectionHeadingLink">
                                        <span class="Home-topStoriesHeadingText Home-sectionHeadingText"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('last_news'); ?></span>
                                        <span class="Home-topStoriesHeadingLinkText Home-sectionHeadingLinkText"><?= $this->lang->line('all_news'); ?></span>
                                    </a>
                                </h2>
                                <div class="Divider Divider--light"></div>
                                <div class="Home-topStories">
                                    <?php foreach ($this->news_model->getNewSpecifyID($this->news_model->getPrincipalNew())->result() as $principalNew) { ?>
                                        <div class="Home-topStoriesFeatured">
                                            <a href="<?= base_url() ;?>news/<?= $principalNew->id ?>" data-analytics="panel-news" data-analytics-panel="slot:1 - size:lg - type:blog - id:21192216 - image:unknown || Hearthstone: Kobolds &amp; Catacombs Revealed" class="Home-topStoriesFeaturedLink">
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
                                                                <a href="<?= base_url() ;?>news/<?= $newstree->id ?>" data-analytics="panel-news" data-analytics-panel="slot:1 - size:sm - type:blog - id:<?= $newstree->id ?> - || <?= $newstree->title ?>" class="Home-topStoriesGalleryLink">
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
                        <?php } ?>
                        <div class="GridItem col-md-4">
                            <h2 class="Heading Home-topStoriesHeading Home-sectionHeading flush-top" style="color: #fff;"><i class="fa fa-server" aria-hidden="true"></i> <?=$this->lang->line('serv_status');?></h2>
                            <div class="Divider Divider--light"></div>
                            <div class="Home-topStories">
                                <div class="Home-topStoriesFeatured">
                                    <?php if ($this->m_modules->getStatusNews() == '1') { ?>
                                        <a data-analytics="panel-<?=$this->lang->line('serv_status');?>" data-analytics-panel="slot:1 - size:lg" class="Home-topStoriesFeaturedLink">
                                            <div data-ratio='0.5' data-offset='0' class="Card Home-topStoriesGallery Card--innerBorder Card--transparent is-adaptive">
                                                <div class="Home-additionalLinks clearfix">
                                                    <!--<h3 style="color: #fff;"><?= $this->m_soap->getRealmStatus(); ?></h3> online -->
                                                    <div class="">
                                                        <div class="GridItem col-md-12">
                                                            <h2 style="color: #fff;">
                                                                <?php if ($this->m_data->realm_status()) { ?>
                                                                    <i class="fa fa-circle-o-notch fa-spin fa-fw uk-text-success" aria-hidden="true"></i>
                                                                <?php } else { ?>
                                                                    <i class="fa fa-circle-o-notch fa-spin fa-fw uk-text-danger" aria-hidden="true"></i>
                                                                <?php } ?>
                                                                <?= $this->m_general->getRealmName(); ?>
                                                            </h2>
                                                            <?php if ($this->m_data->realm_status()) { ?>
                                                                <span class="uk-label">
                                                                    <span uk-icon="icon: users"></span>
                                                                    <?= $this->m_general->getCharactersOnlineAlliance(); ?>
                                                                    <?= $this->lang->line('faction_alliance'); ?>
                                                                </span>
                                                                <span class="uk-label uk-label-danger">
                                                                    <span uk-icon="icon: users"></span>
                                                                    <?= $this->m_general->getCharactersOnlineHorde(); ?>
                                                                    <?= $this->lang->line('faction_horde'); ?>
                                                                </span>
                                                                <br>
                                                            <?php } ?>
                                                            <div class="label">
                                                                <h4 style="color: #fff;">
                                                                <?php if ($this->m_general->getExpansionAction() == 1) { ?>
                                                                    <i class="fa fa-gamepad" aria-hidden="true"></i> Set Realmlist <?= $this->config->item('realmlist'); ?></h4>
                                                                <?php } else { ?>
                                                                    <i class="fa fa-gamepad" aria-hidden="true"></i> Set Portal "<?= $this->config->item('realmlist'); ?>"</h4>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- online -->
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    <?php if ($this->m_modules->getStatusDiscordExperimental() == '1') { ?>
                                        <!-- discord -->
                                        <a target="_blank" href="https://discord.gg/<?= $this->home_model->getDiscordInfo()['code'] ?>" data-analytics="panel-<?=$this->lang->line('serv_status');?>" data-analytics-panel="slot:1 - size:lg" class="Home-topStoriesFeaturedLink">
                                            <div data-ratio='0.5' data-offset='0' class="Card Home-topStoriesGallery Card--innerBorder Card--transparent is-adaptive">
                                                <div class="Home-additionalLinks clearfix">
                                                    <!--<h3 style="color: #fff;"><?=$this->lang->line('discord');?></h3> online -->
                                                    <div class="">
                                                        <div class="GridItem col-md-12">
                                                            <!-- image -->
                                                            <img class="uk-border-circle" src="https://cdn.discordapp.com/icons/<?= $this->home_model->getDiscordInfo()['guild']['id']; ?>/<?= $this->home_model->getDiscordInfo()['guild']['icon']; ?>.png" width="50" height="50" alt="">
                                                            <!-- image -->
                                                            <div class="label">
                                                                <h3 style="color: #fff;">
                                                                    <i class="icon-discord"></i>
                                                                    <?= $this->home_model->getDiscordInfo()['guild']['name']; ?>
                                                                    <i class="icon-discord"></i>
                                                                </h3>
                                                            </div>
                                                            <!-- count -->
                                                            <span class="uk-label uk-label-warning">
                                                                <?=$this->lang->line('users_on');?>
                                                                <?= $this->home_model->getDiscordInfo()['approximate_presence_count']; ?> 
                                                            </span>
                                                            <!-- count -->
                                                        </div>
                                                    </div>
                                                    <!-- online -->
                                                </div>
                                            </div>
                                        </a>
                                        <!-- discord -->
                                    <?php } ?>
                                    <?php if ($this->m_modules->getStatusDiscordClassic() == '1') { ?>
                                        <!-- discord classic -->
                                        <a target="_blank" href="https://discord.gg/<?= $this->home_model->getDiscordInfo()['code'] ?>" data-analytics="panel-<?=$this->lang->line('serv_status');?>" data-analytics-panel="slot:1 - size:lg" class="Home-topStoriesFeaturedLink">
                                            <div data-ratio='0.5' data-offset='0' class="Card Home-topStoriesGallery Card--innerBorder Card--transparent is-adaptive">
                                                <div class="Home-additionalLinks clearfix">
                                                    <div class="GridItem col-md-12">
                                                        <iframe src="https://discordapp.com/widget?id=<?= $this->home_model->getDiscordInfo()['guild']['id']; ?>&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- discord classic -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->m_modules->getStatusEvents() == '1') { ?>
                            <?php if ($this->events_model->getEventsLimitFive()->num_rows()) { ?>
                                <div class="GridItem col-md-4">
                                    <h2 class="Heading Home-eventsHeading Home-sectionHeading flush-top" style="color: #fff;"><i class="fa fa-bullhorn" aria-hidden="true"></i> <?= $this->lang->line('up_events'); ?></h2>
                                    <div class="Divider Divider--light"></div>
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
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php if ($this->m_modules->getStatusStore() == '1') { ?>
                <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-gamePane">
                    <div class="Pane-content">
                        <?php if ($this->shop_model->getShopTop10()->num_rows()) { ?>
                            <h2 class="Heading Home-gameHeading Home-sectionHeading flush-top">
                                <a href="<?= base_url('store'); ?>" data-analytics="action-link" data-analytics-placement="<?= $this->lang->line('store_see'); ?>" class="Home-gameHeadingLink Home-sectionHeadingLink">
                                    <span class="Home-gameHeadingText Home-sectionHeadingText"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <?= $this->lang->line('store'); ?></span>
                                </a>
                            </h2>
                            <div class="Divider Divider--light"></div>
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
                                                                    <?php foreach ($this->shop_model->getShopTop()->result() as $listTopShop) { ?>
                                                                        <!-- item store START -->
                                                                        <div class="GalleryItem Home-gameGridGalleryItem">
                                                                            <div class="Home-gameGridTileContainer">
                                                                                <a href="<?=  base_url('store?group='); ?><?= $this->shop_model->getGroup($listTopShop->id_shop); ?>" data-analytics="<?= $this->shop_model->getName($listTopShop->id_shop); ?>" data-analytics-placement="<?= $this->shop_model->getName($listTopShop->id_shop); ?>" class="Home-gameGridGalleryLink">
                                                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/store/<?= $this->shop_model->getImage($listTopShop->id_shop); ?>)" class="Home-gameGridTile"></div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- item store END -->
                                                                    <?php } ?>
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
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
