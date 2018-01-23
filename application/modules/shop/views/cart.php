<?php if (isset($_POST['buyNowGetItem'])) {
    $charselect = $_POST['charSelects'];

    $method = $_GET['tp'];
    $price = $this->shop_model->getPriceType($idlink, $_GET['tp']);

    $this->shop_model->insertHistory(
        $idlink, 
        $this->shop_model->getItem($idlink), 
        $this->session->userdata('fx_sess_id'), 
        $charselect, 
        $method,
        $price);
} ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('cart'); ?></title>
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

    <!-- Wowhead START -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>
    <!-- Wowhead START -->
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
            <div class="GameSite-link">
                <a class="GameSite-link--heading" href="<?= base_url('store'); ?>"><?= $this->lang->line('shop'); ?></a>
            </div>
            <!-- cat -->
            <div class="Breadcrumbs">
                <span class="Breadcrumb">
                    <a class="Breadcrumb-content">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i> <?=$this->lang->line('cart');?>
                    </a>
                </span>
            </div>
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
    <br><br><br>
    <div role="main">
        <section class="Scm-content">
            <div class="section">
                <h2 style="color: #fff;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Item: <a rel="item=<?= $this->shop_model->getItem($idlink); ?>"><?= $this->shop_model->getName($idlink); ?></a></h2>
                <p></p>
                <div class="uk-margin uk-text-center">
                    <div class="uk-inline">
                        <a rel="item=<?= $this->shop_model->getItem($idlink); ?>">
                            <img class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/<?= $this->shop_model->getIcon($idlink) ?>.jpg" />
                        </a>
                    </div>
                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> Item Name: <?= $this->shop_model->getName($idlink); ?></p>
                </div>
                <div class="uk-margin uk-text-center">
                    <p><i class="fa fa-list-ul" aria-hidden="true"></i> Select Character:</p>
                    <div class="uk-inline">
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-width-medium uk-form-small" name="charSelects">
                                <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($this->session->userdata('fx_sess_id'))->result() as $listchar) { ?>
                                    <option value="<?= $listchar->guid ?>"><?= $listchar->name ?> - <?= $listchar->level ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="uk-margin uk-text-center">
                    <p><i class="fa fa-money" aria-hidden="true"></i> Price:</p>
                    <div class="uk-inline">
                        <h4>
                            <?php if($_GET['tp'] == "dp"): ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                            <?php else: ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                            <?php endif; ?>
                            <span class="uk-badge"><?= $this->shop_model->getPriceType($idlink, $_GET['tp']); ?></span>
                        </h4>
                    </div>
                </div>
                <div class="uk-margin uk-text-center">
                    <?php if ($_GET['tp'] == "dp")
                        $qqs = $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id'));
                    else
                        $qqs = $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id'));
                    ?>
                    <?php if ($qqs >= $this->shop_model->getPriceType($idlink, $_GET['tp'])) { ?>
                        <button type="submit" name="buyNowGetItem" class="button" title="<?= $this->lang->line('button_buy'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?= $this->lang->line('button_buy'); ?></button>
                    <?php } else { ?>
                        <div class="uk-alert-warning" uk-alert><p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?=$this->lang->line('points_insuff');?></p></div>
                    <?php } ?>
                    <!--<button class="button" title=""><i class="fa fa-gift" aria-hidden="true"></i> Gift</button>-->
                </div>
            </div>
        </section>
    </div>
