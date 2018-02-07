<?php if(isset($_POST['finishingIt'])) {
    $mailUser = $_POST['rankMail'];
    $hostname = $_POST['hostname'];
    $username = $_POST['host_user'];
    $password = $_POST['host_pass'];
    $database = $_POST['host_db'];
    $realm_id = $_POST['host_realmid'];
    $soapuser = $_POST['soap_user'];
    $soappass = $_POST['soap_pass'];
    $soapport = $_POST['soap_port'];

    $qq = $this->m_data->getIDEmail($mailUser);

    if ($qq != '0')
    {
        $this->admin_model->getADDADMRank($qq, '1');
    }

    $this->m_modules->insertRealm($hostname, $username, $password, $database, $realm_id, $soapuser, $soappass, $soapport);

    $this->home_model->updateInstallation();

    redirect(base_url(),'refresh');
} ?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title><?= $this->config->item('ProjectName'); ?></title>
    <script src="<?= base_url(); ?>core/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">
    <!-- font-awesome End -->
    <!-- custom footer -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
    <!-- custom footer -->
</head>

<body class="en-us <?= $this->config->item('theme_name'); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <div class="Page-container">
        <div class="Page-content en-US">
            <form action="" method="POST" accept-charset="utf-8">
                <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <h3 class="uk-card-title uk-text-uppercase uk-text-bold uk-text-center"><i class="fa fa-star-o" aria-hidden="true"></i> Rank ADM</h3>
                            <p>Please enter the email of the account that will receive the administrator rank</p>
                            <p>If you do not have an account available please write "<strong>NULL</strong>" <i>without the quotes</i></p>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" placeholder="EMAIL" name="rankMail" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="finishingIt"><i class="fa fa-cog fa-spin fa-fw"></i> Finish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
                            <h3 class="uk-card-title uk-text-uppercase uk-text-bold uk-text-center"><i class="fa fa-server" aria-hidden="true"></i> Create REALM</h3>
                            <p>
                                <fieldset class="uk-fieldset">
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Hostname</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="hostname" type="text" placeholder="Example: 127.0.0.1" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Database User</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_user" type="text" placeholder="Example: root" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Database Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_pass" type="password" placeholder="Example: ascent" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Database Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_db" type="text" placeholder="Example: characters" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Realm ID</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" name="host_realmid" type="number" placeholder="Auth -> realmlist -> ID" required>
                                            </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Soap User</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="soap_user" type="text" placeholder="Example: fixcore" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Soap Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="soap_pass" type="password" placeholder="Example: blizzcms" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Soap Port</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="soap_port" type="number" placeholder="Example: 7878" required>
                                        </div>
                                    </div>
                                </fieldset>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
