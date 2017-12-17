<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('lad_arena'); ?></title>
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
                <!-- -->
                <div class="space-adaptive-small"></div>
                <h2 class="h5 flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><i class="protect icon"></i><?= $this->m_general->getRealmName(); ?></h2>
                <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?=$this->lang->line('lad_arena');?></h3>
                <div class="space-adaptive-small"></div>
                <!-- -->
                <!-- 2v2 -->
                <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><div class="ui red horizontal large label">TOP 2v2</div></h3>
                <table class="ui selectable inverted table">
                    <thead>
                        <tr>
                            <th><i class="sitemap icon"></i><?=$this->lang->line('name');?></th>
                            <th class="center aligned"><i class="users icon"></i><?=$this->lang->line('members');?></th>
                            <th class="center aligned"><i class="area chart icon"></i><?=$this->lang->line('rating');?></th>
                            <th class="center aligned"><i class="line chart icon"></i><?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena2v2()->result() as $tops2v2) { ?>
                            <tr>
                                <td><?=$tops2v2->name?></td>
                                <td class="center aligned">
                                    <h4 class="ui image header">
                                        <div class="content">
                                            <?php foreach ($this->arena_model->getMemberTeam($tops2v2->arenaTeamId)->result() as $mmberteam) { ?>
                                                <div class="sub header"><?= $this->arena_model->getNameGuid($mmberteam->guid) ?></div>
                                            <?php } ?>
                                        </div>
                                    </h4>
                                </td>
                                <td class="center aligned"><?=$tops2v2->rating?></td>
                                <td class="center aligned"><?=$tops2v2->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 2v2 -->
                <div class="space-adaptive-small"></div>
                <!-- 3v3 -->
                <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><div class="ui orange horizontal large label">TOP 3v3</div></h3>
                <table class="ui selectable inverted table">
                    <thead>
                        <tr>
                            <th><i class="sitemap icon"></i><?=$this->lang->line('name');?></th>
                            <th class="center aligned"><i class="users icon"></i><?=$this->lang->line('members');?></th>
                            <th class="center aligned"><i class="area chart icon"></i><?=$this->lang->line('rating');?></th>
                            <th class="center aligned"><i class="line chart icon"></i><?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena3v3()->result() as $tops3v3) { ?>
                            <tr>
                                <td><?=$tops3v3->name?></td>
                                <td class="center aligned">
                                    <h4 class="ui image header">
                                        <div class="content">
                                            <?php foreach ($this->arena_model->getMemberTeam($tops3v3->arenaTeamId)->result() as $mmberteam) { ?>
                                                <div class="sub header"><?= $this->arena_model->getNameGuid($mmberteam->guid) ?></div>
                                            <?php } ?>
                                        </div>
                                    </h4>
                                </td>
                                <td class="center aligned"><?=$tops3v3->rating?></td>
                                <td class="center aligned"><?=$tops3v3->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 3v3 -->
                <div class="space-adaptive-small"></div>
                <!-- 5v5 -->
                <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><div class="ui yellow horizontal large label">TOP 5v5</div></h3>
                <table class="ui selectable inverted table">
                    <thead>
                        <tr>
                            <th><i class="sitemap icon"></i><?=$this->lang->line('name');?></th>
                            <th class="center aligned"><i class="users icon"></i><?=$this->lang->line('members');?></th>
                            <th class="center aligned"><i class="area chart icon"></i><?=$this->lang->line('rating');?></th>
                            <th class="center aligned"><i class="line chart icon"></i><?=$this->lang->line('games');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->arena_model->getTopArena5v5()->result() as $tops5v5) { ?>
                            <tr>
                                <td><?=$tops5v5->name?></td>
                                <td class="center aligned">
                                    <h4 class="ui image header">
                                        <div class="content">
                                            <?php foreach ($this->arena_model->getMemberTeam($tops5v5->arenaTeamId)->result() as $mmberteam) { ?>
                                                <div class="sub header"><?= $this->arena_model->getNameGuid($mmberteam->guid) ?></div>
                                            <?php } ?>
                                        </div>
                                    </h4>
                                </td>
                                <td class="center aligned"><?=$tops5v5->rating?></td>
                                <td class="center aligned"><?=$tops5v5->seasonWins?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- 5v5 -->
            </div>
        </div>
        <!-- -->
    </div>
