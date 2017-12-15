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
    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- semantic -->
    <script src="<?= base_url(); ?>assets/semanticui/semantic.min.js"></script>
    <!-- semantic -->
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
                <br><br>
                <!-- -->
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="trophy icon"></i><?= $this->m_general->getRealmName(); ?></h2>
                <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('lad_pvp');?></h3>
                <br><br>
                <!-- -->
                <table class="ui selectable inverted table">
                    <thead>
                        <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><div class="ui purple horizontal large label">TOP 20</div></h3>
                        <tr>
                            <th><i class="user circle outline icon"></i><?=$this->lang->line('name');?></th>
                            <th class="center aligned"><i class="flag outline icon"></i><?=$this->lang->line('faction');?></th>
                            <th class="center aligned"><i class="crosshairs icon"></i><?=$this->lang->line('total_kills');?></th>
                            <th class="center aligned"><i class="crosshairs icon"></i><?=$this->lang->line('today_kills');?></th>
                            <th class="center aligned"><i class="crosshairs icon"></i><?=$this->lang->line('yersterday_kills');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->pvp_model->getTop20PVP()->result() as $tops) { ?>
                            <tr>
                                <td><?= $tops->name ?></td>
                                <td class="center aligned"><img src="<?= base_url(); ?>assets/images/<?= $this->m_general->getFaction($tops->race) ?>.png" class="img-circle"></td>
                                <td class="center aligned"><?= $tops->totalKills ?></td>
                                <td class="center aligned"><?= $tops->todayKills ?></td>
                                <td class="center aligned"><?= $tops->yesterdayKills ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- -->
    </div>
