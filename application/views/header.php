<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $fxtitle ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/css/blizzcms-general.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome and Rpg Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('core/rpg_awesome/css/rpg-awesome.css')?>">

    <!-- Wowhead -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>

    <!-- Discord -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/discord/discord.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
</head>

<body class="<?= $this->config->item('theme_name'); ?>">
