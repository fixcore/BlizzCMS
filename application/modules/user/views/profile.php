<?php if(isset($_POST['createPM'])) {
    $this->load->model('messages/messages_model');
    $reply = $_POST['replyText'];
    $this->messages_model->insertReply($this->session->userdata('fx_sess_id'), $idlink, $reply);
} ?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?></title>
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
    <br><br>
    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">
                <div class="HeroPane-content">
                    <div class="align-center">
                        <div class="space-large hide show-sm"></div>
                        <a href="">
                            <?php if($this->m_general->getUserInfoGeneral($idlink)->num_rows()) { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($idlink)); ?>" width="120" height="120" alt="" />
                            <?php } else { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="120" height="120" alt="" />
                            <?php } ?>
                        </a>
                        <div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;"><?= $this->m_data->getUsernameID($idlink); ?></div>
                        <div class="space-small"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="color: rgba(255,255,255,.7);">
                        <div class="section uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy-class="">
                            <?php if ($this->m_modules->getMessages() == '1') { ?>
                                <?php if($this->m_data->isLogged() && $idlink != $this->session->userdata('fx_sess_id')) { ?>
                                    <div class="uk-column-1-1">
                                        <div>
                                            <div class="uk-margin">
                                                <a href="#" uk-toggle="target: #privateMsg">
                                                    <button class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $this->lang->line('button_private_message'); ?></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <hr class="uk-divider-icon">
                            <ul uk-accordion>
                                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                ?>
                                    <li class="uk-open">
                                        <h3 class="uk-accordion-title" style="color: #fff;"><i class="fa fa-server" aria-hidden="true"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?> - <?= $this->lang->line('panel_chars_list'); ?></h3>
                                        <div class="uk-accordion-content">
                                            <div class="uk-grid uk-grid-small uk-child-width-1-6 uk-flex-center" uk-grid>
                                                <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($multiRealm, $idlink)->result() as $chars) { ?>
                                                    <div class="uk-text-center">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/class/'.$this->m_general->getClassIcon($chars->class)); ?>" title="<?= $chars->name ?> (Lvl <?= $chars->level ?>)" width="50" height="50" uk-tooltip>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>

    <?php if ($this->m_modules->getMessages() == '1') { ?>
        <div id="privateMsg" uk-modal="bg-close: false">
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('form_new_message'); ?></h2>
                </div>
                <form action="" method="post" accept-charset="utf-8">
                    <div class="uk-modal-body">
                        <div class="uk-margin">
                            <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_message'); ?></label>
                            <div class="uk-form-controls">
                                <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                                <div class="uk-width-1-1">
                                    <textarea required name="replyText" id="ckeditor" rows="10" cols="80"></textarea>
                                    <script>
                                        CKEDITOR.replace('ckeditor');
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right actions">
                            <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                            <button class="uk-button uk-button-primary" type="submit" name="createPM"><?= $this->lang->line('button_send'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
