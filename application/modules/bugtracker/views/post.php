<?php if (isset($_POST['changePriory'])) {
    $value = $_POST['prioryValue'];
    $this->bugtracker_model->changePriority($idlink, $value);
} ?>

<?php if (isset($_POST['changeStatus'])) {
    $value = $_POST['StatusValue'];
    $this->bugtracker_model->changeStatus($idlink, $value);
} ?>

<?php if (isset($_POST['changetypes'])) {
    $value = $_POST['typesValue'];
    $this->bugtracker_model->changeType($idlink, $value);
} ?>

<?php if (isset($_POST['btn_closeBugtracker'])) {
    $this->bugtracker_model->closeIssue($idlink);
} ?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_bugtracker'); ?></title>
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
            <div class="container">
                <div class="space-adaptive-medium"></div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="section" style="color: rgba(255,255,255,.7);">
                            <h2 style="color: #fff;"><i class="fa fa-bookmark" aria-hidden="true"></i> <?= $this->bugtracker_model->getTitleIssue($idlink); ?></h2>
                            <p><?= $this->bugtracker_model->getDescIssue($idlink); ?></p>
                            <div class="uk-margin">
                                <div class="uk-placeholder uk-text-center"><?= $this->bugtracker_model->getUrlIssue($idlink); ?></div>
                            </div>
                            <div class="uk-column-1-3 uk-column-divider">
                                <p><i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('form_type'); ?>: <span class="uk-label"><?= $this->bugtracker_model->getType($this->bugtracker_model->getTypeID($idlink)); ?></span></p>
                                <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?= $this->lang->line('column_priority'); ?>: <span class="uk-label uk-label-danger"><?= $this->bugtracker_model->getPriority($this->bugtracker_model->getPriorityID($idlink)); ?></span></p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('column_date'); ?>: <span class="uk-badge"><?= date('Y-m-d', $this->bugtracker_model->getDate($idlink)) ?></span></p>
                            </div>
                            <div class="uk-column-1-3 uk-column-divider">
                                <p><i class="fa fa-tags" aria-hidden="true"></i> <?= $this->lang->line('column_status'); ?>: <span class="uk-label uk-label-success"><?= $this->bugtracker_model->getStatus($this->bugtracker_model->getStatusID($idlink)); ?></span></p>
                                <p><i class="fa fa-info-circle" aria-hidden="true"></i> <?= $this->lang->line('column_status'); ?>:
                                    <?php if ($this->bugtracker_model->closeStatus($idlink) == '0') { ?>
                                        <span class="uk-label uk-label-success"><?= $this->lang->line('option_open'); ?></span>
                                    <?php } else { ?>
                                        <span class="uk-label uk-label-danger"><?= $this->lang->line('option_closed'); ?></span>
                                    <?php } ?>
                                </p>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('column_author'); ?>: <?= $this->m_data->getUsernameID($this->bugtracker_model->getAuthor($idlink)); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="section">
                                <div class="uk-column-1-3 uk-column-divider">
                                    <div>
                                        <div class="uk-margin">
                                            <form method="post" action="">
                                                <div class="uk-form-controls">
                                                    <select class="uk-select uk-form-width-medium" id="form-stacked-select" name="prioryValue">
                                                        <?php foreach($this->bugtracker_model->getPriorityGeneral()->result() as $priory) { ?>
                                                            <option value="<?= $priory->id ?>"><?= $priory->title ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <button class="uk-button uk-button-secondary uk-width-1-1" type="submit" name="changePriory"><?= $this->lang->line('button_change'); ?></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <form method="post" action="">
                                                <div class="uk-form-controls">
                                                    <select class="uk-select uk-form-width-medium" id="form-stacked-select" name="StatusValue">
                                                        <?php foreach($this->bugtracker_model->getStatusGeneral()->result() as $priory) { ?>
                                                            <option value="<?= $priory->id ?>"><?= $priory->title ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <button class="uk-button uk-button-secondary uk-width-1-1" type="submit" name="changeStatus"><?= $this->lang->line('button_change'); ?></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <form method="post" action="">
                                                <div class="uk-form-controls">
                                                    <select class="uk-select uk-form-width-medium" id="form-stacked-select" name="typesValue">
                                                        <?php foreach($this->bugtracker_model->getTypesGeneral()->result() as $priory) { ?>
                                                            <option value="<?= $priory->id ?>"><?= $priory->title ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <button class="uk-button uk-button-secondary uk-width-1-1" type="submit" name="changetypes"><?= $this->lang->line('button_change'); ?></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <form method="post" action="">
                                    <button type="submit" name="btn_closeBugtracker" class="uk-button uk-button-secondary uk-width-1-1"><?= $this->lang->line('button_close'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
