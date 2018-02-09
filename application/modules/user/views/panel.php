<?php if (isset($_POST['button_changeavatar'])) {
    $valueAvatar = $_POST['radioAvatars'];
    $this->user_model->insertAvatar($valueAvatar);
} ?>

<?php if (isset($_POST['button_uppdateinfo'])) {
    $name = $_POST['name_us'];
    $surname = $_POST['surname_us'];
    $question = $_POST['question_us'];
    $answer = $_POST['answer_us'];
    $day = $_POST['day_us'];
    $month = $_POST['month_us'];
    $year = $_POST['year_us'];
    $country = $_POST['country_us'];
    $user = $this->session->userdata('fx_sess_username');
    $mail = $this->session->userdata('fx_sess_email');
    $id = $this->session->userdata('fx_sess_id');

    $this->user_model->updateInformation($id, $name, $surname, $user, $mail, $question, $answer, $year, $month, $day, $country);
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
                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" width="120" height="120" alt="" />
                            <?php } else { ?>
                                <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="120" height="120" alt="" />
                            <?php } ?>
                        </a>
                        <div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;"><?= $this->m_data->getUsernameID($this->session->userdata('fx_sess_id')); ?></div>
                        <span class="uk-label"><?= $this->lang->line('panel_last_login'); ?>: <?= $this->user_model->getLastIp($this->session->userdata('fx_sess_id')); ?></span>
                        <div class="space-small"></div>
                    </div>
                    <?php if(isset($_POST['button_changepass'])) {
                        $oldpass = $_POST['oldpass'];
                        $newpass = $_POST['newpass'];
                        $reppass = $_POST['newpassr'];

                        if ($reppass == $newpass)
                        {
                            if ($this->m_general->getExpansionAction() == 1)
                            {
                                $compare = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $oldpass);

                                $newpassI = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $newpass);

                                if ($this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                {
                                    if ($newpassI == $this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')))
                                        echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('password_same').'</p></div>';
                                    else
                                    {
                                        $this->user_model->changePasswordI($this->session->userdata('fx_sess_id'), $newpassI);
                                    }
                                }
                                else
                                    echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('opassword_not_match').'</p></div>';
                            }
                            else if ($this->m_general->getExpansionAction() == 2)
                            {
                                $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $oldpass);

                                $newpassI = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $newpass);

                                $newpassII = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $newpass);

                                if ($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                {
                                    if ($newpassII == $this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')))
                                        echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('password_same').'</p></div>';
                                    else
                                    {
                                        $this->user_model->changePasswordII($this->session->userdata('fx_sess_id'), $newpassI, $newpassII);
                                    }
                                }
                                else
                                    echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('opassword_not_match').'</p></div>';
                            }
                            else
                                echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('expansion_not_found').'</p></div>';
                        }
                        else
                            echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('password_not_match').'</p></div>';
                    } ?>

                    <?php if(isset($_POST['button_changeemail'])) {
                        $password = $_POST['password'];
                        $oldemail = $_POST['oldemail'];
                        $newemail = $_POST['newemail'];

                        if ($this->m_general->getExpansionAction() == 1)
                        {
                            $compare = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $password);

                            if (strtoupper($this->session->userdata('fx_sess_email')) == strtoupper($oldemail))
                            {
                                if ($this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                {
                                    $this->user_model->changeEmailI($this->session->userdata('fx_sess_id'), $newemail);
                                }
                                else
                                    echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('opassword_not_match').'</p></div>';
                            }
                            else
                                echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('oemail_not_match').'</p></div>';
                        }
                        else if ($this->m_general->getExpansionAction() == 2)
                        {
                            $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $password);

                            $newpasscompare = $this->m_data->encryptBattlenet($newemail, $password);

                            if ($this->user_model->getExistEmail(strtoupper($newemail)) > 0)
                                echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('email_used').'</p></div>';
                            else
                            {
                                if (strtoupper($this->session->userdata('fx_sess_email')) == strtoupper($oldemail))
                                {
                                    if ($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                    {
                                        $this->user_model->changeEmailII($this->session->userdata('fx_sess_id'), $newemail, $newpasscompare);
                                    }
                                    else
                                        echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('opassword_not_match').'</p></div>';
                                }
                                else
                                    echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('oemail_not_match').'</p></div>';
                            }
                        }
                        else
                            echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('expansion_notfound').'</p></div>';
                    } ?>
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="color: rgba(255,255,255,.7);">
                        <div class="section uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy-class="">
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $this->lang->line('panel_acc_rank'); ?>: <span class="uk-badge">
                                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { echo 'STAFF'; } else echo 'Player'; ?></span>
                                </p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> <?= $this->lang->line('panel_dp'); ?>: <span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span></p>
                            </div>
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-globe" aria-hidden="true"></i> <?= $this->lang->line('panel_location'); ?>: <span class="uk-badge"><?= $this->user_model->getLocation($this->session->userdata('fx_sess_id')); ?></span></p>
                                <p><i class="fa fa-star" aria-hidden="true"></i> <?= $this->lang->line('panel_vp'); ?>: <span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span></p>
                            </div>
                            <div class="uk-column-1-2 uk-column-divider">
                                <p><i class="fa fa-gamepad" aria-hidden="true"></i> <?= $this->lang->line('panel_expansion'); ?>: <span class="uk-badge"><?= $this->m_general->getExpansionName(); ?></span></p>
                                <?php if($this->user_model->getExistInfo()->num_rows()) { ?>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('panel_member'); ?>: <span class="uk-badge"><?= date('Y/m/d',$this->user_model->getDateMember($this->session->userdata('fx_sess_id'))); ?></span></p>
                                <?php } ?>
                            </div>
                            <hr class="uk-divider-icon">
                            <div class="uk-column-1-2">
                                <div>
                                    <div class="uk-margin">
                                        <a href="">
                                            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-star" aria-hidden="true"></i> <?= $this->lang->line('button_vote_panel'); ?></button>
                                        </a>
                                    </div>
                                </div>
                                <?php if($this->m_modules->getDonation() == '1') { ?>
                                    <div>
                                        <div class="uk-margin">
                                            <a href="<?= base_url('donate'); ?>">
                                                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-credit-card" aria-hidden="true"></i> <?= $this->lang->line('button_donate_panel'); ?></button>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="uk-column-1-2">
                                <div>
                                    <div class="uk-margin">
                                        <a href="">
                                            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-ticket" aria-hidden="true"></i> <?= $this->lang->line('button_support'); ?></button>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-margin">
                                        <?php if($this->user_model->getExistInfo()->num_rows()) { ?>
                                            <a href="#" uk-toggle="target: #avatars">
                                                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-camera" aria-hidden="true"></i> <?= $this->lang->line('button_change_avatar'); ?></button>
                                            </a>
                                        <?php } ?>
                                        <?php if(!$this->user_model->getExistInfo()->num_rows()) { ?>
                                            <a href="#" uk-toggle="target: #personalinfo">
                                                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-user-o" aria-hidden="true"></i> <?= $this->lang->line('button_add_personal_info'); ?></button>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-column-1-2">
                                <div>
                                    <div class="uk-margin">
                                        <a href="#" uk-toggle="target: #changePassword">
                                            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-key" aria-hidden="true"></i> <?= $this->lang->line('button_change_password'); ?></button>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-margin">
                                        <a href="#" uk-toggle="target: #changeEmail">
                                            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $this->lang->line('button_change_email'); ?></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr class="uk-divider-icon">
                            <ul uk-accordion>
                                <!-- characters -->
                                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                ?>
                                    <li class="uk-open">
                                        <h3 class="uk-accordion-title" style="color: #fff;"><i class="fa fa-server" aria-hidden="true"></i> <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?> - <?= $this->lang->line('panel_chars_list'); ?></h3>
                                        <div class="uk-accordion-content">
                                            <div class="uk-grid uk-grid-small uk-child-width-1-6 uk-flex-center" uk-grid>
                                                <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($multiRealm , $this->session->userdata('fx_sess_id'))->result() as $chars) { ?>
                                                    <div class="uk-text-center">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/class/'.$this->m_general->getClassIcon($chars->class)); ?>" title="<?= $chars->name ?> (Lvl <?= $chars->level ?>)" width="50" height="50" uk-tooltip>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <!-- characters -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>

    <div id="changePassword" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-key" aria-hidden="true"></i> <?= $this->lang->line('button_change_password'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: unlock"></span>
                                <input class="uk-input" name="oldpass" type="password" required placeholder="<?= $this->lang->line('form_old_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="newpass" type="password" required placeholder="<?= $this->lang->line('form_new_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="newpassr" type="password" required placeholder="<?= $this->lang->line('form_re_password'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changepass"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="changeEmail" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $this->lang->line('button_change_email'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="password" type="password" required placeholder="<?= $this->lang->line('form_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input class="uk-input" name="oldemail" type="email" required placeholder="<?= $this->lang->line('form_old_email'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input class="uk-input" name="newemail" type="email" required placeholder="<?= $this->lang->line('form_new_email'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changeemail"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="avatars" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-camera" aria-hidden="true"></i> <?= $this->lang->line('button_change_avatar'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-grid uk-grid-medium uk-child-width-1-5 uk-flex-center uk-text-center">
                                <?php foreach($this->user_model->getAllAvatars()->result() as $allAvts) { ?>
                                    <div class="col-sm-3">
                                        <img class="uk-border-rounded" src="<?= base_url('assets/images/profiles/'.$allAvts->name); ?>" width="100" height="100">
                                        <input type="radio" name="radioAvatars" checked value="<?= $allAvts->id ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changeavatar"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="personalinfo" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-user-o" aria-hidden="true"></i> <?= $this->lang->line('button_add_personal_info'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_username'); ?> & <?= $this->lang->line('form_email'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: hashtag"></span>
                                <input class="uk-input uk-width-1-1" type="text" placeholder="<?= $this->session->userdata('fx_sess_username'); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input" type="text" placeholder="<?= $this->session->userdata('fx_sess_email'); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_user_info'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="country_us">
                                <?php foreach($this->user_model->getCountry()->result() as $country_us) { ?>
                                    <option value="<?= $country_us->id; ?>"><?= $country_us->country_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" name="name_us" type="text" placeholder="<?= $this->lang->line('form_first_name'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" name="surname_us" type="text" placeholder="<?= $this->lang->line('form_last_name'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_birth_date'); ?></label>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-4@s">
                                <div class="uk-form-controls">
                                    <select class="uk-select" name="day_us">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <div class="uk-form-controls">
                                    <select class="uk-select" name="month_us">
                                        <option value="1"><?= $this->lang->line('month_january'); ?></option>
                                        <option value="2"><?= $this->lang->line('month_february'); ?></option>
                                        <option value="3"><?= $this->lang->line('month_march'); ?></option>
                                        <option value="4"><?= $this->lang->line('month_april'); ?></option>
                                        <option value="5"><?= $this->lang->line('month_may'); ?></option>
                                        <option value="6"><?= $this->lang->line('month_june'); ?></option>
                                        <option value="7"><?= $this->lang->line('month_july'); ?></option>
                                        <option value="8"><?= $this->lang->line('month_august'); ?></option>
                                        <option value="9"><?= $this->lang->line('month_september'); ?></option>
                                        <option value="10"><?= $this->lang->line('month_october'); ?></option>
                                        <option value="11"><?= $this->lang->line('month_november'); ?></option>
                                        <option value="12"><?= $this->lang->line('month_december'); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-4@s">
                                <input class="uk-input" type="number" name="year_us" pattern=".{4,4}" min="1936" max="2010" required title="4 characters" placeholder="<?= $this->lang->line('form_year'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_security_question'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="question_us">
                                <?php foreach ($this->user_model->getQuestion()->result() as $question_us) { ?>
                                    <option value="<?= $question_us->id ?>"><?= $question_us->question; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: question"></span>
                                <input class="uk-input" name="answer_us" type="password" placeholder="<?= $this->lang->line('form_secret_answer'); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_uppdateinfo"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>
