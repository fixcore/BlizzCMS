<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_pvp_statistics'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
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
            <div class="space-adaptive-medium"></div>
            <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
            ?>
            <!-- -->
            <div class="container">
                <!-- -->
                <div class="space-adaptive-small"></div>
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="ra ra-axe"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></h2>
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('nav_pvp_statistics');?></h4>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger"><?=$this->lang->line('pvp_top');?></span></h4>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-user" aria-hidden="true"></i> 
                                <?=$this->lang->line('column_name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-flag" aria-hidden="true"></i> <?=$this->lang->line('column_faction');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('column_total_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_today_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('column_yersterday_kills');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->pvp_model->getTop20PVP($multiRealm)->result() as $tops) { ?>
                            <tr>
                                <td style="color: #fff;"><img class="uk-border-circle" src="<?= base_url('assets/images/races/').$this->m_general->getRaceIcon($tops->race) ?>" title="<?= $tops->name ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                     <?= $tops->name ?></td>
                                <td style="text-align: center;"><img class="uk-border-circle" src="<?= base_url(); ?>assets/images/factions/<?= $this->m_general->getFaction($tops->race) ?>.png"></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->totalKills ?></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->todayKills ?></td>
                                <td style="color: #fff;text-align: center;"><?= $tops->yesterdayKills ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
        <!-- -->
    </div>
