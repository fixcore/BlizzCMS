<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('home'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">

<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
<!-- semantic ui Start -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
<!-- semantic ui End -->
<!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
<!-- custom END -->
</head>

<body lang="en" data-locale="en-gb" data-device="desktop" data-name="index">

<!-- header -->
<?php $this->load->view('general/icons'); ?>

<!-- content START -->
<div class="Page-container">
    <div class="Page-content en-US">
    <div style="" class="HeroPane HeroPane--detail HeroPane--adaptive">
    <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $this->m_general->getNewImage($idlink) ?>)" class="HeroPane-background">
</div>
<div class="HeroPane-padding">
    <div class="HeroPane-mobilePadding">
</div>
<div class="HeroPane-desktopPadding">
</div>
</div>
<div class="HeroPane-content">
    <div class="max-sm max-left align-left">
    <div class="Heading Heading--articleHeadline" style="color: #fff;"><?= $this->m_general->getNewTitle($idlink); ?></div>

<div class="space-medium">
</div>

<div class="space-adaptive-large">
</div>
</div>
</div>
</div>
<div class="Pane Pane--flush Pane--adaptive Pane--backgroundTop Pane--innerBorderTop">
    <div style="background-image:url(<?= base_url(); ?>assets/images/backgrounds/generic-texture_bg-e1349fb97834b4dd3fddc7583c53dbc3874b619b2c5417f5729be746ea79f37f5c3e7ba1bf6b4f37d0cd6944eb6b03ed586741292cd69a9dfba0d52e6a085602.jpg)" class="Pane-background">
</div>
<div style="" class="Pane-content">
    <div class="space-adaptive-large">
</div>
<div class="max-sm max-left align-left">
    <div class="Markup Markup--html">
    <p><?= $this->m_general->getNewDescription($idlink); ?></p>

</div>
<div class="space-medium">
</div>

<div class="space-medium"></div>

</div>
<div class="space-large hide show-sm"></div>

<div class="space-small hide-sm"></div>

</div>
</div>

</div>
</div>
<!-- content END -->