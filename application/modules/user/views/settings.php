<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('settings'); ?></title>
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


<div class="Page-container">
    <div class="Page-content en-US">
    <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">

<div class="HeroPane-content">
    <div class="align-center">
    <div class="space-huge hide show-sm">
</div>

<div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;">
  <?= $this->session->userdata('fx_sess_username'); ?>
</div>

<div class="space-medium">
</div>
<div class="max-md">
    <div class="h5">
    <div id="locations-description" class="text-light">
      <i style="color: white;" class="heartbeat icon"></i>
      <br><br>
    </div>
</div>
</div>
<div class="space-adaptive-large">
</div>
</div>
<div class="align-center">
    <div class="TileGroup max-lg">
    <div class="Grid row TileGroup-grid">

<!-- step START -->
<div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
    <a href="locations/irvine.html">
    <div style="" class="Tile Tile--transparent Tile--innerBorder ExampleTile" data-index='0'>
    <div class="Tile-content">
    <div class="ExampleTile-content align-center">
    <div class="text-accent-warm">
    <div class="Icon Icon--jumbo hide inline-xs">
      <!-- image START -->
      <h2 class="ui center aligned icon header" style="color: white;">
        <i class="lock icon"></i>
        <?= $this->lang->line('chang_pass'); ?>
      </h2>
      <!-- image END -->
</div>

</div>

</div>
</div>
</a>
</div>



<!-- step END -->

</div>
</div>
</div>
</div>
</div>

<div class="space-huge"></div>

</div>
</div>