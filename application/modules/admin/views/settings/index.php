<?php
    $fileConfig = $_SERVER['DOCUMENT_ROOT'].'/application/config/config.php';
?>

<?php if(isset($_POST['submitConfig'])) {
    $data = array(
        'filename' => $fileConfig,
        'configURL' => str_replace(' ', '', $_POST['configURL']),
        'actualURL' => $this->admin_model->getConfigBaseUrl($fileConfig),
        'configLang' => str_replace(' ', '', $_POST['configLang']),
        'actualLang' => $this->admin_model->getConfigLanguage($fileConfig),
        'configCharSet' => str_replace(' ', '', $_POST['configCharSet']),
        'actualCharSet' => $this->admin_model->getConfigCharSet($fileConfig),
        'configSess' => str_replace(' ', '', $_POST['configSessExpiration']),
        'actualSess' => $this->admin_model->getConfigSessExpiration($fileConfig),
    );
    $this->admin_model->settingConfig($data);
}?>

<?php
    $fileFixCore = $_SERVER['DOCUMENT_ROOT'].'/application/config/fixcore.php';
?>

<?php if(isset($_POST['submitFixCore'])) {
    $datafx = array(
        'filename' => $fileFixCore,
        'fixcoreName' => str_replace(' ', '', $_POST['fixcoreProjectName']),
        'actualName' => $this->admin_model->getFixCoreProjectName($fileFixCore),
        'fixcoreTimeZone' => str_replace(' ', '', $_POST['fixcoreTimeZone']),
        'actualTimeZone' => $this->admin_model->getFixCoreTimeZone($fileFixCore),
        'fixcoreDiscord' => str_replace(' ', '', $_POST['fixcoreDiscordInv']),
        'actualDiscord' => $this->admin_model->getFixCoreDiscordInv($fileFixCore),
        'fixcoreRealmlist' => str_replace(' ', '', $_POST['fixcoreRealmlist']),
        'actualRealmlist' => $this->admin_model->getFixCoreRealmlist($fileFixCore),
        'fixcoreStaffColor' => str_replace(' ', '', $_POST['fixcoreStaffColor']),
        'actualStaffColor' => $this->admin_model->getFixCoreStaffColor($fileFixCore),
        'fixcoreThemeName' => str_replace(' ', '', $_POST['fixcoreTheme']),
        'actualTheme' => $this->admin_model->getFixCoreThemeName($fileFixCore),
    );
    $this->admin_model->settingFixCore($datafx);
}?>

<?php if (isset($_POST['button_createRealm'])) {
    $hostname = $_POST['hostname'];
    $username = $_POST['host_user'];
    $password = $_POST['host_pass'];
    $database = $_POST['host_db'];
    $realm_id = $_POST['realmid'];
    $soapuser = $_POST['soap_user'];
    $soappass = $_POST['soap_pass'];
    $soapport = $_POST['soap_port'];

    $this->m_modules->insertRealm($hostname, $username, $password, $database, $realm_id, $soapuser, $soappass, $soapport);
} ?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-mouse-pointer" aria-hidden="true"></i> <?= $this->lang->line('admin_website'); ?> - Settings</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-wrench" aria-hidden="true"></i> Settings</div>
                            <div class="uk-card-body">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Main Settings</a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Website Settings</a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Database Settings</a></li>
                                </ul>
                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Base Site URL</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="configURL" value="<?= $this->admin_model->getConfigBaseUrl($fileConfig); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Default Language</label>
                                                <div class="uk-form-controls">
                                                    <select class="uk-select" name="configLang">
                                                        <option value="english">English</option>
                                                        <option value="french">French</option>
                                                        <option value="german">German</option>
                                                        <option value="hungarian">Hungarian</option>
                                                        <option value="russian">Russian</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="thai">Thai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Default Character Set</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="configCharSet" value="<?= $this->admin_model->getConfigCharSet($fileConfig); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Session Expiration</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="configSessExpiration" value="<?= $this->admin_model->getConfigSessExpiration($fileConfig); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitConfig" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Project Name</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreProjectName" value="<?= $this->admin_model->getFixCoreProjectName($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Timezone</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreTimeZone" value="<?= $this->admin_model->getFixCoreTimeZone($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Discord ID</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreDiscordInv" value="<?= $this->admin_model->getFixCoreDiscordInv($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Realmlist</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreRealmlist" value="<?= $this->admin_model->getFixCoreRealmlist($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Forum STAFF Color</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreStaffColor" value="<?= $this->admin_model->getFixCoreStaffColor($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Theme Name</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="fixcoreTheme" value="<?= $this->admin_model->getFixCoreThemeName($fileFixCore); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Hostname</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Username</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Password</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Name</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="uk-divider-icon">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Hostname</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Username</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Password</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Name</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: database"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-wrench" aria-hidden="true"></i> Module Settings</div>
                            <div class="uk-card-body">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Recaptcha Settings</a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Bugtracker Settings</a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Donate Settings</a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Store Settings</a></li>
                                </ul>
                                <ul class="uk-switcher uk-margin">
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Recaptcha Site Key</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Recaptcha Secret Key</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Description Text</label>
                                                <div class="uk-form-controls">
                                                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                                                    <div class="uk-width-1-1">
                                                        <textarea required="" name="" id="ckeditor" rows="10" cols="80"></textarea>
                                                        <script>
                                                            CKEDITOR.replace('ckeditor');
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Paymentwall Key</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Paymentwall Secret Key</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Paymentwall Widget Code</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: cog"></span>
                                                        <input class="uk-input" type="text" name="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="" method="post" accept-charset="utf-8">
                                            <div class="uk-margin">
                                                <label class="uk-form-label uk-text-uppercase">Store Type</label>
                                                <div class="uk-form-controls">
                                                    <select class="uk-select" name="">
                                                        <option value="1">Store with Images</option>
                                                        <option value="2">Store with Icons</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-form-controls">
                                                    <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-server" aria-hidden="true"></i> Realms</div>
                            <div class="uk-card-body">
                                <table id="myTable" class="uk-table uk-table-justify uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th>Realm ID</th>
                                            <th>Realm Name</th>
                                            <th>Character Database Name</th>
                                            <th>Soap Port</th>
                                            <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->admin_model->getShopGroupList()->result() as $list) { ?>
                                            <tr>
                                                <td>
                                                    <input type="text" class="uk-input" value="<?= $list->name; ?>" disabled>
                                                </td>
                                                <td>
                                                    <input type="text" class="uk-input" value="<?= $list->name; ?>" disabled>
                                                </td>
                                                <td>
                                                    <input type="text" class="uk-input" value="<?= $list->name; ?>" disabled>
                                                </td>
                                                <td>
                                                    <input type="text" class="uk-input" value="<?= $list->name; ?>" disabled>
                                                </td>
                                                <td class="uk-text-center" uk-margin>
                                                    <form action="" method="post" accept-charset="utf-8">
                                                        <button class="uk-button uk-button-danger" name="button_deleteRealm" value="<?= $list->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="uk-margin">
                                    <a href="" uk-toggle="target: #newRealm">
                                        <button class="uk-button uk-button-primary uk-width-1-1" name="submitFixCore" type="submit"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Realm</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newRealm" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-server" aria-hidden="true"></i> Add Realm</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Realm ID</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="number" name="realmid" placeholder="Auth -> realmlist -> ID" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap User</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="soap_user" placeholder="Example: fixcore" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="password" name="soap_pass" placeholder="Example: blizzcms" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase">Soap Port</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="number" name="soap_port" placeholder="Example: 7878" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Hostname</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="hostname" placeholder="Example: 127.0.0.1" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database User</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="host_user" placeholder="Example: root" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Password</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="password" name="host_pass" placeholder="Example: ascent" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><strong>Character</strong> Database Name</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="host_db" placeholder="Example: characters" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createRealm"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>

<?php 
/* database section config END */
$fileDatabase   = $_SERVER['DOCUMENT_ROOT'].'/application/config/database.php'; //database
/* database section config END */
/* captcha section config START */
$fileCaptcha    = $_SERVER['DOCUMENT_ROOT'].'/application/config/recaptcha.php'; //captcha
/* captcha section config END */


/* bugtracker section config START */
if ($this->m_modules->getStatusLadBugtracker() == '1')
{
    $fileCaptcha    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/bugtracker/config/bugtracker.php'; //bugtracker
}
/* bugtracker section config END */

/* donate section config START */
if ($this->m_modules->getDonation() == '1')
{
    $fileDonate    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/donate/config/donate.php'; //donate
}
/* donate section config END */

/* store section config START */
if ($this->m_modules->getStatusStore() == '1')
{
    $fileStore    = $_SERVER['DOCUMENT_ROOT'].'/application/modules/shop/config/store.php'; //donate
}
/* store section config END */

?>
