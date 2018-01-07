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
<!-- php -->
<?php if (isset($_POST['button_changeavatar'])) {
    $valueAvatar = $_POST['radioAvatars'];
    $this->user_model->insertAvatar($valueAvatar);
} ?>
<!-- php -->
<!-- no info -->
<?php if (isset($_POST['button_uppdateinfo'])) {
    $name = $_POST['name_us'];
    $surname = $_POST['surname_us'];
    $question = $_POST['question_us'];
    $answer = $_POST['answer_us'];
    $day = $_POST['day_us'];
    $month = $_POST['month_us'];
    $year = $_POST['year_us'];
    $user = $this->session->userdata('fx_sess_email');
    $mail = $this->session->userdata('fx_sess_username');
    $id = $this->session->userdata('fx_sess_id');

    $this->user_model->updateInformation($id, $name, $surname, $user, $mail, $question, $answer, $day, $month, $year);
} ?>
<!-- no info -->
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
        <!-- submenu -->
        <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
    <div class="Container Container--content Container--breadcrumbs">

<div class="GameSite-link"></div>

<!-- cat -->
<div class="GameSite-link"> </div> 
    
    <div class="Breadcrumbs"></div>

<div class="User-menu"> 
    <!-- right -->
    <span class="Breadcrumb"> 
        <a class="Breadcrumb-content"> 
            <!-- logged -->
            <?php if ($this->m_data->isLogged()) { ?>
                    <!-- credits -->
                    <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span>
                     | 
                    <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span>
                    <!-- credits -->
            <?php } ?>
            <!-- logged -->
        </a> 
    </span>
    <!-- right -->
</div>

    </div>
</div>

    </div>
    </div>
    </div>
    <!-- submenu -->

<!-- main -->

<br><br>

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
                                <?php if(!$this->user_model->getExistInfo()->num_rows() > 0) { ?>
                                <div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
                                    <a href="#" uk-toggle="target: #personalinfo">
                                        <div style="" class="Tile Tile--transparent Tile--innerBorder fixcore" data-index='0'>
                                            <div class="Tile-content">
                                                <div class="fixcore-content align-center">
                                                    <div class="text-accent-warm">
                                                        <div class="Icon Icon--jumbo hide inline-xs">
                                                            <!-- image START -->
                                                            <h2 class="ui center aligned icon header" style="color: white;">
                                                                <i class="fa fa-user-o fa-2x" aria-hidden="true"></i>
                                                                <p>
                                                                    <?= $this->lang->line('add_personal_info'); ?>
                                                                </p>
                                                            </h2>
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
                                <!-- avatars end -->

                                <!-- no info -->
                                <!-- noinfo -->
                                <div id="personalinfo" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><i class="fa fa-user-o" aria-hidden="true"></i>
                                                <?= $this->lang->line('add_personal_info'); ?>
                                            </h2>
                                        </div>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-modal-body">
                                                <!-- noinfo -->
                                                <fieldset class="uk-fieldset">

                                                <h4><?= $this->lang->line('username_re'); ?> & <?= $this->lang->line('email_re'); ?></h4>
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-1-2@s">
                                                        <input class="uk-input" disabled type="text" placeholder="<?= $this->session->userdata('fx_sess_username'); ?>">
                                                    </div>
                                                    <div class="uk-width-1-2@s">
                                                        <input class="uk-input" disabled type="text" placeholder="<?= $this->session->userdata('fx_sess_email'); ?>">
                                                    </div>
                                                </div>

                                                <hr class="uk-divider-icon">

                                                <h4><?= $this->lang->line('personalinfo'); ?></h4>
                                                <!-- name - surname -->
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-1-2@s">
                                                        <input class="uk-input" name="name_us" type="text" placeholder="<?= $this->lang->line('first_name'); ?>" required>
                                                    </div>
                                                    <div class="uk-width-1-2@s">
                                                        <input class="uk-input" name="surname_us" type="text" placeholder="<?= $this->lang->line('last_name'); ?>" required>
                                                    </div>
                                                </div>
                                                <!-- name - surname -->

                                                <!-- question - answer -->
                                                <div class="uk-grid-small" uk-grid>
                                                    <div class="uk-width-1-2@s">
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select" id="form-stacked-select" name="question_us">
                                                            <?php foreach ($this->m_data->getQuestion()->result() as $question_us) { ?>
                                                                <option value="<?= $question_us->id ?>"><?= $question_us->question; ?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2@s">
                                                        <input class="uk-input" name="answer_us" type="password" placeholder="<?= $this->lang->line('secret_answ'); ?>" required>
                                                    </div>
                                                </div>
                                                <!-- question - answer -->

                                                 <!-- day - month -year -->
                                                <div class="uk-grid-small" uk-grid>
                                                    <!-- day -->
                                                    <div class="uk-width-1-3@s">
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
                                                    <!-- day -->
                                                    <!-- month -->
                                                    <div class="uk-width-1-3@s">
                                                        <div class="uk-form-controls">
                                                            <select class="uk-select" name="month_us">
                                                                <option value="1"><?= $this->lang->line('month_January'); ?></option>
                                                                <option value="2"><?= $this->lang->line('month_February'); ?></option>
                                                                <option value="3"><?= $this->lang->line('month_March'); ?></option>
                                                                <option value="4"><?= $this->lang->line('month_April'); ?></option>
                                                                <option value="5"><?= $this->lang->line('month_May'); ?></option>
                                                                <option value="6"><?= $this->lang->line('month_June'); ?></option>
                                                                <option value="7"><?= $this->lang->line('month_July'); ?></option>
                                                                <option value="8"><?= $this->lang->line('month_August'); ?></option>
                                                                <option value="9"><?= $this->lang->line('month_September'); ?></option>
                                                                <option value="10"><?= $this->lang->line('month_October'); ?></option>
                                                                <option value="11"><?= $this->lang->line('month_November'); ?></option>
                                                                <option value="12"><?= $this->lang->line('month_December'); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- month -->
                                                    <!-- year -->
                                                    <div class="uk-width-1-3@s">
                                                        <input class="uk-input" type="number" name="year_us" pattern=".{4,4}" min="1936" max="2010" required title="4 characters" placeholder="<?= $this->lang->line('year'); ?>">
                                                    </div>
                                                    <!-- year -->
                                                </div>
                                                <!-- day - month -year -->

                                                </fieldset>
                                                <!-- noinfo -->
                                                <div class="uk-modal-footer uk-text-right actions">
                                                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                                                    <button class="uk-button uk-button-primary" type="submit" name="button_uppdateinfo"><?= $this->lang->line('button_change'); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- no info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-huge"></div>
        </div>
    </div>
