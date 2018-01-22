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
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('bugtracker'); ?></title>
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

    <link href="https://api.dkamps18.net/css/font/discord/discord.css" rel="stylesheet"  type="text/css">
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
    <br><br><br>
    <div role="main">
        <section class="Scm-content">
            <div class="section">
                <h2 style="color: #fff;"><i class="fa fa-bookmark" aria-hidden="true"></i> <?= $this->bugtracker_model->getTitleIssue($idlink); ?></h2>
                <p><?= $this->bugtracker_model->getDescIssue($idlink); ?></p>
                <div class="uk-margin">
                    <div class="uk-placeholder uk-text-center"><?= $this->bugtracker_model->getUrlIssue($idlink); ?></div>
                </div>
                <div class="uk-column-1-3 uk-column-divider">
                    <p><i class="fa fa-list" aria-hidden="true"></i> <?= $this->lang->line('type'); ?>: <span class="uk-label"><?= $this->bugtracker_model->getType($this->bugtracker_model->getTypeID($idlink)); ?></span></p>
                    <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?= $this->lang->line('expr_priority'); ?>: <span class="uk-label uk-label-danger"><?= $this->bugtracker_model->getPriority($this->bugtracker_model->getPriorityID($idlink)); ?></span></p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('expr_date'); ?>: <span class="uk-badge"><?= date('Y-m-d', $this->bugtracker_model->getDate($idlink)) ?></span></p>
                </div>
                <div class="uk-column-1-3 uk-column-divider">
                    <p><i class="fa fa-tags" aria-hidden="true"></i> <?= $this->lang->line('expr_status'); ?>: <span class="uk-label uk-label-success"><?= $this->bugtracker_model->getStatus($this->bugtracker_model->getStatusID($idlink)); ?></span></p>
                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> <?= $this->lang->line('expr_status'); ?>:
                        <?php if ($this->bugtracker_model->closeStatus($idlink) == '0') { ?>
                            <span class="uk-label uk-label-success"><?= $this->lang->line('expr_open'); ?></span>
                        <?php } else { ?>
                            <span class="uk-label uk-label-danger"><?= $this->lang->line('expr_closed'); ?></span>
                        <?php } ?>
                    </p>
                    <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('expr_author'); ?>: <?= $this->m_data->getUsernameID($this->bugtracker_model->getAuthor($idlink)); ?></p>
                </div>
            </div>
        </section>
        <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
            <section class="Scm-content">
                <div class="section">
                    <!-- buttons -->
                    <div class="uk-column-1-3 uk-column-divider">
                        <!-- priority -->
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
                        <!-- priority -->
                        <!-- status -->
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
                        <!-- status -->
                        <!-- type -->
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
                        <!-- type -->
                    </div>
                    <!-- buttons -->
                    <br>
                    <form method="post" action="">
                        <button type="submit" name="btn_closeBugtracker" class="uk-button uk-button-secondary uk-width-1-1"><?= $this->lang->line('button_close'); ?></button>
                    </form>
                </div>
            </section>
        <?php } ?>
    </div>
