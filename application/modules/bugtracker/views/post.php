<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('bugtracker'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
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
    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->
    <link href="https://api.dkamps18.net/css/font/discord/discord.css" rel="stylesheet"  type="text/css">
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
<br><br><br>

<div role="main">
  <section class="Scm-content">
<div class="section">
<h2 style="color: #fff;"><?= $this->bugtracker_model->getTitleIssue($idlink); ?></h2>

<p><?= $this->bugtracker_model->getDescIssue($idlink); ?></p>

<div class="uk-margin">
    <input class="uk-input uk-form-width-medium" type="text" placeholder="<?= $this->bugtracker_model->getUrlIssue($idlink); ?>" disabled>
</div>

<div class="uk-column-1-2 uk-column-divider">

    <p><?= $this->lang->line('type'); ?>: <span class="uk-label uk-label-success"><?= $this->bugtracker_model->getType($this->bugtracker_model->getTypeID($idlink)); ?></span></p>

    <p><?= $this->lang->line('expr_status'); ?>: <span class="uk-label uk-label-warning"><?= $this->bugtracker_model->getStatus($this->bugtracker_model->getStatusID($idlink)); ?></span></p>

    <p><?= $this->lang->line('expr_priority'); ?>: <span class="uk-label uk-label-warning"><?= $this->bugtracker_model->getPriority($this->bugtracker_model->getPriorityID($idlink)); ?></span></p>

    <p><?= $this->lang->line('expr_date'); ?>: <span class="uk-label uk-label-danger"><?= date('Y-m-d', $this->bugtracker_model->getDate($idlink)) ?></span></p>

    <p><?= $this->lang->line('expr_author'); ?>: <?= $this->m_data->getUsernameID($this->bugtracker_model->getAuthor($idlink)); ?></p>
    
    <p> <?= $this->lang->line('expr_status'); ?>:
        <?php if ($this->bugtracker_model->closeStatus($idlink) == '0') { ?>
        <span class="uk-label uk-label-success"><?= $this->lang->line('expr_open'); ?></span>
        <?php } else { ?>
        <span class="uk-label uk-label-danger"><?= $this->lang->line('expr_closed'); ?></span>
        <?php } ?>
    </p>

</div>

</div>