<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('settings'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
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
        <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
    <div class="Container Container--content Container--breadcrumbs">

<div class="GameSite-link"></div>

<!-- cat -->
<div class="GameSite-link"> </div> 
    
    <div class="Breadcrumbs"></div>

<div class="User-menu"> 
    <!-- right -->
    <span class="Breadcrumb"> 
        <a class="Breadcrumb-content"> 
            <!-- logged -->
            <?php if ($this->m_data->isLogged()) { ?>
                    <!-- credits -->
                    <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span>
                     | 
                    <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span>
                    <!-- credits -->
            <?php } ?>
            <!-- logged -->
        </a> 
    </span>
    <!-- right -->
</div>

    </div>
</div>

    </div>
    </div>
    </div>
    <!-- submenu -->

<!-- main -->

<br><br>

    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">
                <div class="HeroPane-content">
                    <div class="align-center">
                        <div class="space-huge hide show-sm"></div>
                        <div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;"><?= $this->m_data->getUsernameID($idlink); ?></div>
                        <div class="space-medium"></div>
                        <div class="max-md">
                            <div class="h5">
                                <div id="locations-description" class="text-light">
                                    <i style="color: white;" class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="space-adaptive-large"></div>
                    </div>
                    <!-- conn -->
                        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                    <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($idlink)->result() as $chars) { ?>
                            <div style="text-align: center;">
                                <div class="uk-card uk-card-secondary uk-card-body">
                                    <h3 class="uk-card-title">
                                        <?= $chars->name ?> - 
                                        <?= $chars->level ?> 
                                    </h3>
                                    <img width="50" height="50" src="<?= base_url('assets/images/races/'.$this->m_general->getRaceIcon($chars->race)); ?>" alt="">
                                    <img width="50" height="50" src="<?= base_url('assets/images/class/'.$this->m_general->getClassIcon($chars->class)); ?>" alt="">
                                </div>
                            </div>
                    <?php } ?>
                        </div>
                    <!-- conn -->
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>