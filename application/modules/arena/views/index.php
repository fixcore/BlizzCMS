<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('lad_arena'); ?></title>
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
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="ra ra-arena"></i> <?= $this->m_general->getRealmName(); ?></h2>
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('lad_arena');?></h4>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <!-- 2v2 -->
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger">TOP 2V2</span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena2v2()->result() as $tops2v2) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops2v2->name?></td>
                                <td style="text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops2v2->arenaTeamId)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
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
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-warning">TOP 3V3</span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena3v3()->result() as $tops3v3) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops3v3->name?></td>
                                <td style="color: #fff;text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops3v3->arenaTeamId)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
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
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-success">TOP 5V5</span></h4>
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-sitemap" aria-hidden="true"></i> <?=$this->lang->line('name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <?=$this->lang->line('members');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('rating');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-line-chart" aria-hidden="true"></i> <?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena5v5()->result() as $tops5v5) { ?>
                            <tr>
                                <td style="color: #fff;"><?=$tops5v5->name?></td>
                                <td style="text-align: center;">
                                    <?php foreach ($this->arena_model->getMemberTeam($tops5v5->arenaTeamId)->result() as $mmberteam) { ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/class/').$this->m_general->getClassIcon($this->arena_model->getRaceGuid($mmberteam->guid)) ?>" title="<?= $this->arena_model->getNameGuid($mmberteam->guid) ?>"  width="30px" height="30px" uk-tooltip="pos: bottom">
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
