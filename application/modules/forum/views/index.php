<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('nav_forums'); ?></title>

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
                            <img class="Welcome-logo" src="<?= base_url('assets/images/logo/game-logo.png'); ?>"/>
                            <p class="Welcome-text uk-text-uppercase"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?= $this->lang->line('forum_welcome'); ?></p>
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
                        </header>
                    <?php } ?>
                    <div class="ForumCards ">
                        <?php foreach($this->forum_model->getCategoryForums($categorys->id) as $sections) { ?>
                            <?php if ($sections->type == 1 || $sections->type == 3) { ?>
                                <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" class="ForumCard ForumCard--content">
                                    <i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/<?= $sections->icon ?>')"></i>
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
