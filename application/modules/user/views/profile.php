<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
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
    </div>
    </div>
    </div>
    <!-- submenu -->
    <br><br>
    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">
                <div class="HeroPane-content">
                    <div class="align-center">
                        <div class="space-large hide show-sm"></div>
                        <a href="">
                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows() > 0) { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="120" height="120" alt="" />
                            <?php } else { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.jpg'); ?>" width="120" height="120" alt="" />
                            <?php } ?>
                        </a>
                        <div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;"><?= $this->m_data->getUsernameID($idlink); ?></div>
                        <div class="space-small"></div>
                    </div>
                    <section class="Scm-content">
                        <div class="section uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy-class="">
                            <h3 style="color: #fff;"><i class="fa fa-tachometer" aria-hidden="true"></i> User Panel</h3>
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> Account Rank: <span class="uk-badge">Player</span></p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Donor Points: <span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span></p>
                            </div>
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-globe" aria-hidden="true"></i> Location: <span class="uk-badge">Test</span></p>
                                <p><i class="fa fa-star" aria-hidden="true"></i> Voter Points: <span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span></p>
                            </div>
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-gamepad" aria-hidden="true"></i> Expansion: <span class="uk-badge">Test</span></p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Member since: <span class="uk-badge">01/01/2018</span></p>
                            </div>
                            <?php if ($this->m_data->isLogged()) { ?>
                                <hr class="uk-divider-icon">
                                <div class="uk-column-1-2">
                                    <div>
                                        <div class="uk-margin">
                                            <a href="">
                                                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-star" aria-hidden="true"></i> Vote Panel</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <a href="">
                                                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-credit-card" aria-hidden="true"></i> Donate Panel</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-column-1-2">
                                    <div>
                                        <div class="uk-margin">
                                            <a href="<?= base_url('settings'); ?>">
                                                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-cog" aria-hidden="true"></i> Account Settings</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <a href="">
                                                <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-info" aria-hidden="true"></i> Other</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <hr class="uk-divider-icon">
                            <ul uk-accordion>
                                <li class="uk-open">
                                    <h3 class="uk-accordion-title" style="color: #fff;"><i class="fa fa-server" aria-hidden="true"></i> <?= $this->m_general->getRealmName(); ?> - Characters List</h3>
                                    <div class="uk-accordion-content">
                                        <div class="uk-grid uk-grid-small uk-child-width-1-6 uk-flex-center" uk-grid>
                                            <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($idlink)->result() as $chars) { ?>
                                                <div class="uk-text-center">
                                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/'.$this->m_general->getClassIcon($chars->class)); ?>" title="<?= $chars->name ?> (Lvl <?= $chars->level ?>)" width="50" height="50" uk-tooltip>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>
