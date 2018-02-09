<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_arena_statistics'); ?></title>
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
<?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
?>
    <div class="Page-container">
        <div class="Page-content en-US">
            <div class="space-adaptive-medium"></div>
            <!-- -->
            <div class="container">
                <!-- -->
                <div class="space-adaptive-small"></div>
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="ra ra-arena"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></h2>
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('nav_arena_statistics');?></h4>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <!-- 2v2 -->
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger"><?=$this->lang->line('arena_top_2v2');?></span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena2v2($multiRealm)->result() as $tops2v2) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops2v2->name?></td>
                                <td style="text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops2v2->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid, $multiRealm) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                    <?php } ?>
                                </td>
                                <td style="color: #fff;text-align: center;"><?=$tops2v2->rating?></td>
                                <td style="color: #fff;text-align: center;"><?=$tops2v2->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 2v2 -->
                <div class="space-adaptive-small"></div>
                <!-- 3v3 -->
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-warning"><?=$this->lang->line('arena_top_3v3');?></span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena3v3($multiRealm)->result() as $tops3v3) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops3v3->name?></td>
                                <td style="color: #fff;text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops3v3->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid, $multiRealm) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                    <?php } ?>
                                </td>
                                <td style="color: #fff;text-align: center;"><?=$tops3v3->rating?></td>
                                <td style="color: #fff;text-align: center;"><?=$tops3v3->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 3v3 -->
                <div class="space-adaptive-small"></div>
                <!-- 5v5 -->
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-success"><?=$this->lang->line('arena_top_5v5');?></span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('column_team_name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('column_members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('column_games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena5v5($multiRealm)->result() as $tops5v5) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops5v5->name?></td>
                                <td style="text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops5v5->arenaTeamId, $multiRealm)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid, $multiRealm)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
                                    <?php } ?>
                                </td>
                                <td style="color: #fff;text-align: center;"><?=$tops5v5->rating?></td>
                                <td style="color: #fff;text-align: center;"><?=$tops5v5->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 5v5 -->
            </div>
        </div>
        <!-- -->
    </div>
<?php } ?>