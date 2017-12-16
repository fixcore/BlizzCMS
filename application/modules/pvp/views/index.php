<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('lad_pvp'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-26b4d398e5ef87ac677896e9ff940ebf3ff9a773b2d40151f1ee0688a79f58d7a4df1d7b7a67702e8f96e354bb40eb77f69d6069635e638a47632474421f721f.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>
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
    <div class="Page-container">
        <div class="Page-content en-GB">
            <div class="space-adaptive-medium"></div>
            <!-- -->
            <div class="container">
                <!-- -->
                <div class="space-adaptive-small"></div>
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="fa fa-trophy" aria-hidden="true"></i> <?= $this->m_general->getRealmName(); ?></h2>
                <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('lad_pvp');?></h4>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <table class="uk-table uk-table-responsive uk-table-divider">
                    <thead>
                        <h4 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><span class="uk-label uk-label-danger">TOP 20</span></h4>
                        <tr>
                            <th class="uk-width-small" style="color: #fff;"><i class="fa fa-user" aria-hidden="true"></i> <?=$this->lang->line('name');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-flag" aria-hidden="true"></i> <?=$this->lang->line('faction');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('total_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('today_kills');?></th>
                            <th class="uk-width-small" style="color: #fff; text-align: center;"><i class="fa fa-crosshairs" aria-hidden="true"></i> <?=$this->lang->line('yersterday_kills');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->pvp_model->getTop20PVP()->result() as $tops) { ?>
                            <tr>
                                <td><?= $tops->name ?></td>
                                <td style="text-align: center;"><img src="<?= base_url(); ?>assets/images/<?= $this->m_general->getFaction($tops->race) ?>.png" class="img-circle"></td>
                                <td style="text-align: center;"><?= $tops->totalKills ?></td>
                                <td style="text-align: center;"><?= $tops->todayKills ?></td>
                                <td style="text-align: center;"><?= $tops->yesterdayKills ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- -->
    </div>
