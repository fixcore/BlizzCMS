<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('lad_pvp'); ?></title>
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
            <div class="space-adaptive-medium"></div>
            <!-- -->
            <div class="container">
                <!-- -->
                <div class="space-adaptive-small"></div>
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="ra ra-axe"></i> <?= $this->m_general->getRealmName(); ?></h2>
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('lad_pvp');?></h4>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger">TOP 20</span></h4>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-user" aria-hidden="true"></i> 
                                <?=$this->lang->line('name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-flag" aria-hidden="true"></i> <?=$this->lang->line('faction');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('total_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('today_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('yersterday_kills');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->pvp_model->getTop20PVP()->result() as $tops) { ?>
                            <tr>
                                <td style="color: #fff;"><img class="uk-border-circle" src="<?= base_url('assets/images/races/').$this->m_general->getRaceIcon($tops->race) ?>" title="<?= $tops->name ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                     <?= $tops->name ?></td>
                                <td style="text-align: center;"><img class="uk-border-circle" src="<?= base_url(); ?>assets/images/<?= $this->m_general->getFaction($tops->race) ?>.png"></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->totalKills ?></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->todayKills ?></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->yesterdayKills ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- -->
    </div>
