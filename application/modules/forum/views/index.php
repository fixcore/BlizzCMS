<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('forums'); ?></title>

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

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="/<?= base_url(); ?>assets/js/jquery.min.js?v=88"></script>
    <![endif]-->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->
    <div role="main">
        <section class="Community">
            <header class="Community-header">
                <div class="Community-wrapper">
                    <div class="Welcome">
                        <div class="Welcome-logo--container">	
                            <p class="Welcome-text"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?= $this->lang->line('forum_welcometext'); ?></p>
                        </div>
                    </div>
                </div>
            </header>
            <?php foreach($this->forum_model->getCategory() as $categorys) { ?>
                <div class="ForumCategory">
                    <?php if($this->forum_model->getCategoryRows($categorys->id)) { ?>
                        <header class="ForumCategory-header">
                            <br>
                            <h1 class="ForumCategory-heading"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?= $categorys->categoryName ?></h1>
                            <button class="Community-button--search" id="toggle-search-field" data-trigger="toggle.search.field" type="button"><span class="Button-content"><i class="Icon"></i></span></button>
                        </header>
                    <?php } ?>
                    <div class="ForumCards ">
                        <?php foreach($this->forum_model->getCategoryForums($categorys->id) as $sections) { ?>
                            <?php if ($sections->type == 1 || $sections->type == 3) { ?>
                                <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" class="ForumCard ForumCard--content">
                                    <i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/icons/<?= $sections->icon ?>')"></i>
                                    <div class="ForumCard-details">
                                        <h1 class="ForumCard-heading"><?= $sections->name ?></h1>
                                        <span class="ForumCard-description"><?= $sections->description ?></span>
                                    </div>
                                </a>
                            <?php } elseif($sections->type == 2) { ?>
                                <?php if($this->m_data->isLogged()) { ?>
                                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                                        <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" style="border-color: #00aeff; border-radius: 10px;" class="ForumCard ForumCard--content ">
                                            <i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/icons/<?= $sections->icon ?>')"></i>
                                            <div class="ForumCard-details">
                                                <h1 class="ForumCard-heading"><?= $sections->name ?></h1>
                                                <span class="ForumCard-description"><?= $sections->description ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
