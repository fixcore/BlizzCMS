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
<head>
    <title>Installation | <?= $this->config->item('ProjectName'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/css/blizzcms-general.css">

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="Page-container">
        <div class="Page-content en-US">
            <form action="" method="POST" accept-charset="utf-8" autocomplete="off">
                <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <h3 class="uk-card-title uk-text-uppercase uk-text-bold uk-text-center"><i class="fa fa-star-o" aria-hidden="true"></i> ADM Rank</h3>
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
                                        <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Hostname</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="hostname" type="text" placeholder="Example: 127.0.0.1" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database User</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_user" type="text" placeholder="Example: root" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_pass" type="password" placeholder="Example: ascent" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="host_db" type="text" placeholder="Example: characters" required>
                                        </div>
                                    </div>
                                    <hr class="uk-divider-icon">
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
