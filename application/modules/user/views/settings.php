<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('settings'); ?></title>
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
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    </div>
    </div>
    </div>
    <!-- submenu -->

    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">
                <div class="HeroPane-content">
                    <div class="align-center">
                        <div class="space-huge hide show-sm"></div>
                        <div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;"><?= $this->session->userdata('fx_sess_username'); ?></div>
                        <div class="space-medium"></div>
                        <div class="max-md">
                            <div class="h5">
                                <div id="locations-description" class="text-light">
                                    <i style="color: white;" class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="space-adaptive-large"></div>
                    </div>
                    <div class="align-center">
                        <div class="TileGroup max-lg">
                            <div class="Grid row TileGroup-grid">
                                <!-- forms -->
                                <?php if(isset($_POST['button_changepass']))
                                {
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
                                                    echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('password_same').'</p></div>';
                                                else
                                                {
                                                    $this->user_model->changePasswordI($this->session->userdata('fx_sess_id'), $newpassI);
                                                }
                                            }
                                            else
                                                echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('pass_omatch').'</p></div>';
                                        }
                                        else if ($this->m_general->getExpansionAction() == 2)
                                        {
                                            $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $oldpass);

                                            $newpassI = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $newpass);

                                            $newpassII = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $newpass);

                                            if ($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                            {
                                                if ($newpassII == $this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')))
                                                    echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('password_same').'</p></div>';
                                                else
                                                {
                                                    $this->user_model->changePasswordII($this->session->userdata('fx_sess_id'), $newpassI, $newpassII);
                                                }
                                            }
                                            else
                                                echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('pass_omatch').'</p></div>';
                                        }
                                        else
                                            echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('expansion_notfound').'</p></div>';
                                    }
                                    else
                                        echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('pass_nmatch').'</p></div>';
                                } ?>

                                <?php if(isset($_POST['button_changeemail']))
                                {
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
                                                echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('pass_omatch').'</p></div>';
                                        }
                                        else
                                            echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('email_omatch').'</p></div>';
                                    }
                                    else if ($this->m_general->getExpansionAction() == 2)
                                    {
                                        $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $password);

                                        $newpasscompare = $this->m_data->encryptBattlenet($newemail, $password);

                                        if ($this->user_model->getExistEmail(strtoupper($newemail)) > 0)
                                            echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('email_use').'</p></div>';
                                        else
                                        {
                                            if (strtoupper($this->session->userdata('fx_sess_email')) == strtoupper($oldemail))
                                            {
                                                if ($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
                                                {
                                                    $this->user_model->changeEmailII($this->session->userdata('fx_sess_id'), $newemail, $newpasscompare);
                                                }
                                                else
                                                    echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('pass_omatch').'</p></div>';
                                            }
                                            else
                                                echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('email_omatch').'</p></div>';
                                        }
                                    }
                                    else
                                        echo '<div class="uk-alert-danger" uk-alert><p>'.$this->lang->line('expansion_notfound').'</p></div>';
                                } ?>
                                <!-- forms -->
                                <!-- step START -->
                                <div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
                                    <a href="#" uk-toggle="target: #changePassword">
                                        <div style="" class="Tile Tile--transparent Tile--innerBorder fixcore" data-index='0'>
                                            <div class="Tile-content">
                                                <div class="fixcore-content align-center">
                                                    <div class="text-accent-warm">
                                                        <div class="Icon Icon--jumbo hide inline-xs">
                                                            <!-- image START -->
                                                            <h2 class="ui center aligned icon header" style="color: white;"><i class="fa fa-key fa-2x" aria-hidden="true"></i> <?= $this->lang->line('chang_pass'); ?></h2>
                                                            <!-- image END -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- step END -->
                                <!-- step START -->
                                <div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
                                    <a href="#" uk-toggle="target: #changeEmail">
                                        <div style="" class="Tile Tile--transparent Tile--innerBorder fixcore" data-index='0'>
                                            <div class="Tile-content">
                                                <div class="fixcore-content align-center">
                                                    <div class="text-accent-warm">
                                                        <div class="Icon Icon--jumbo hide inline-xs">
                                                            <!-- image START -->
                                                            <h2 class="ui center aligned icon header" style="color: white;"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i> <?= $this->lang->line('chang_email'); ?></h2>
                                                            <!-- image END -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- step END -->

                                <!-- step START -->
                                <?php if($this->user_model->getExistInfo()->num_rows() > 0) { ?>
                                <div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
                                    <a href="#" uk-toggle="target: #avatars">
                                        <div style="" class="Tile Tile--transparent Tile--innerBorder fixcore" data-index='0'>
                                            <div class="Tile-content">
                                                <div class="fixcore-content align-center">
                                                    <div class="text-accent-warm">
                                                        <div class="Icon Icon--jumbo hide inline-xs">
                                                            <!-- image START -->
                                                            <h2 class="ui center aligned icon header" style="color: white;">
                                                                <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
                                                                <?= $this->lang->line('chang_avatar'); ?></h2>
                                                            <!-- image END -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <!-- step END -->

                                <!-- step START -->
                                <!-- step END -->
                                <div id="changePassword" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><i class="fa fa-key" aria-hidden="true"></i> <?= $this->lang->line('chang_pass'); ?></h2>
                                        </div>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-modal-body">
                                                <!-- old pass -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                        <input class="uk-input uk-form-width-large" name="oldpass" type="password" required placeholder="<?= $this->lang->line('old_password'); ?>">
                                                    </div>
                                                </div>
                                                <!-- old pass -->
                                                <hr>
                                                <!-- old pass -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                        <input class="uk-input uk-form-width-large" name="newpass" type="password" required placeholder="<?= $this->lang->line('new_password'); ?>">
                                                    </div>
                                                </div>
                                                <!-- old pass -->
                                                <hr>
                                                <!-- old pass -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                        <input class="uk-input uk-form-width-large" name="newpassr" type="password" required placeholder="<?= $this->lang->line('pascword_re'); ?>">
                                                    </div>
                                                </div>
                                                <div class="uk-modal-footer uk-text-right actions">
                                                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                                                    <button class="uk-button uk-button-primary" type="submit" name="button_changepass"><?= $this->lang->line('button_change'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="changeEmail" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $this->lang->line('chang_email'); ?></h2>
                                        </div>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-modal-body">
                                                <!-- pass -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                        <input class="uk-input uk-form-width-large" name="password" type="password" required placeholder="<?= $this->lang->line('password_re'); ?>">
                                                    </div>
                                                </div>
                                                <!-- pass -->
                                                <hr>
                                                <!-- old email -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                                        <input class="uk-input uk-form-width-large" name="oldemail" type="email" required placeholder="<?= $this->lang->line('old_email'); ?>">
                                                    </div>
                                                </div>
                                                <!-- old email -->
                                                <hr>
                                                <!-- new pass -->
                                                <div class="uk-margin">
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                                        <input class="uk-input uk-form-width-large" name="newemail" type="email" required placeholder="<?= $this->lang->line('new_email'); ?>">
                                                    </div>
                                                </div>
                                                <!-- new pass -->
                                                <div class="uk-modal-footer uk-text-right actions">
                                                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                                                    <button class="uk-button uk-button-primary" type="submit" name="button_changeemail"><?= $this->lang->line('button_change'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- avatars -->
                                <div id="avatars" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><i class="fa fa-camera" aria-hidden="true"></i>
                                                <?= $this->lang->line('chang_avatar'); ?>
                                            </h2>
                                        </div>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-modal-body">
                                                <!-- avatrs -->
                                                    <!-- foreach -->
                                                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">

                                                        <div class="row">
                                                            <?php foreach($this->user_model->getAllAvatars()->result() as $allAvts) { ?>
                                                            <div class="col-sm-3">
                                                                <div style="width: 150px; height: 150px;" class="uk-margin uk-card uk-card-default uk-card-body">
                                                                    <label>
                                                                    <img src="<?= base_url('assets/images/profiles/'.$allAvts->name); ?>" alt="">
                                                                    <input type="radio" name="radioAvatars" checked value="<?= $allAvts->id ?>">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php } ?>

                                                        </div>


                                                    </div>
                                                    <!-- foreach -->
                                                <!-- avatrs -->
                                                <div class="uk-modal-footer uk-text-right actions">
                                                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                                                    <button class="uk-button uk-button-primary" type="submit" name="button_changeavatar"><?= $this->lang->line('button_change'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- php -->
                                <?php if (isset($_POST['button_changeavatar'])) {
                                    $valueAvatar = $_POST['radioAvatars'];
                                    $this->user_model->insertAvatar($valueAvatar);
                                } ?>
                                <!-- php -->
                                <!-- avatars end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>
