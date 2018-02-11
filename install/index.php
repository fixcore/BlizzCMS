<?php if(isset($_POST['button_startinstall'])) {
    $server_name = $_POST['server_name'];
    $realmlist = $_POST['realmlist'];
    $expansion = $_POST['expansion'];

    $weburl = $_POST['weburl'];
    $language = $_POST['language'];
    $weburl = preg_replace('/\s+/', '', $weburl);

    $website_host = $_POST['blizzcms_hostname'];
    $website_user = $_POST['blizzcms_username'];
    $website_pass = $_POST['blizzcms_password'];
    $website_dbweb = $_POST['blizzcms_database'];
    $auth_host = $_POST['realmd_hostname'];
    $auth_user = $_POST['realmd_username'];
    $auth_pass = $_POST['realmd_password'];
    $auth_dbweb = $_POST['realmd_database'];

    $fileFixcore = file_get_contents("fixcore.php.dist");

    $Fixcoresearch = array(
        'ProjectName_fixcore',
        'ProjectRealmlist_fixcore',
        'ProjectExpansion_fixcore'
    );

    $Fixcorereplace = array(
        $server_name,
        $realmlist,
        $expansion
    );

    $newFixcore = str_replace($Fixcoresearch, $Fixcorereplace, $fileFixcore);
    $openFixcore = fopen("fixcore.php.dist","w");
    fwrite($openFixcore, $newFixcore);
    fclose($openFixcore);

    rename("fixcore.php.dist", "../application/config/fixcore.php");

    $fileConfig = file_get_contents("config.php.dist");

    $Configsearch = array(
        'BlizzCMSURL',
        'BlizzCMSMAINLANGUAGE'
    );

    $Configreplace = array(
        $weburl,
        $language
    );

    $newConfig = str_replace($Configsearch, $Configreplace, $fileConfig);
    $openConfig = fopen("config.php.dist","w");
    fwrite($openConfig, $newConfig);
    fclose($openConfig);

    rename("config.php.dist", "../application/config/config.php");

    $fileDatabase = file_get_contents("database.php.dist");

    $Databasesearch = array(
        'blizzcms_hostname', 
        'blizzcms_username',
        'blizzcms_password',
        'blizzcms_database',
        'realmd_hostname', 
        'realmd_username',
        'realmd_password',
        'realmd_database',
    );

    $Databasereplace = array(
        $website_host, 
        $website_user, 
        $website_pass, 
        $website_dbweb, 
        $auth_host, 
        $auth_user, 
        $auth_pass, 
        $auth_dbweb, 
    );

    /* Execute Sqls */
    require('settings.php');
    $Blizzcms = connect($website_host, $website_user, $website_pass, $website_dbweb);
    $Cmsdb = glob("SQL/*.sql");

    if (count($Cmsdb))
    {
        foreach($Cmsdb as $update)
        {
            SplitSQL($Blizzcms, $update);
        }
    }

    $newDatabase = str_replace($Databasesearch, $Databasereplace, $fileDatabase);
    $openDatabase = fopen("database.php.dist","w");
    fwrite($openDatabase, $newDatabase);
    fclose($openDatabase);

    rename("database.php.dist", "../application/config/database.php");

    echo '<script>window.location.href = "index.php?continue";</script>';
}?>

<!DOCTYPE html>
<html>
<head>
    <title>Installation | BlizzCMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="../assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="../assets/css/blizzcms-template.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="../core/uikit/css/uikit.min.css"/>
    <script src="../core/uikit/js/uikit.min.js"></script>
    <script src="../core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="../core/js/jquery-3.3.1.min.js"></script>
</head>

<body class="en-us glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <div class="Page-container">
        <div class="Page-content en-US">
            <form action="" method="POST" accept-charset="utf-8" autocomplete="off">
                <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                            <h3 class="uk-card-title uk-text-uppercase uk-text-bold uk-text-center">Welcome to BlizzCMS</h3>
                            <p class="uk-text-center"><img class="uk-border-circle" src="images/aebc52c351072a4c934b9aa025c4ca4a.png" width="100" height="100" alt="" uk-scrollspy="cls: uk-animation-fade; delay: 400; repeat: true"></p>
                            <p>We are pleased to present a new <strong>Free CMS</strong> for <strong>World of Warcraft</strong>! this cms is in constant development based on the <strong>CodeIgniter</strong> Framework and clean <strong>PHP</strong> code. For now the main functionalities are concentrated in an integrated forum, store, user panel and more...</p>
                            <hr class="uk-divider-icon">
                            <h4 class="uk-card-title uk-text-uppercase uk-text-center">What do I need to run this <strong>website</strong>?</h4>
                            <ul uk-accordion>
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#" style="color: #fff;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Requirements</a>
                                    <div class="uk-accordion-content">
                                        <p>
                                            <div class="uk-alert-warning" uk-alert>
                                                <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-server" aria-hidden="true"></i> Host Requirements</p>
                                                <p class="uk-text-center uk-text-danger uk-text-bold">Minimum PHP 5.6</p>
                                                <hr class="uk-divider-icon">
                                                <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-cogs" aria-hidden="true"></i> Apache Modules Required</p>
                                                <p class="uk-text-center">mod_rewrite, mod_headers, mod_expires, mod_deflate</p>
                                                <hr class="uk-divider-icon">
                                                <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-cogs" aria-hidden="true"></i> PHP Extensions Required</p>
                                                <p class="uk-text-center">php_curl, php_openssl, php_soap, php_gd, php_mbstring, php_json</p>
                                            </div>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#" style="color: #fff;"><i class="fa fa-info-circle" aria-hidden="true"></i> How to enable required modules/extensions</a>
                                    <div class="uk-accordion-content">
                                        <p>
                                            <div class="uk-alert-primary" uk-alert>
                                                <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-question-circle" aria-hidden="true"></i> How to Enable Apache Modules?</p>
                                                <p class="uk-text-center">Go into your Apache directory and find the <b>httpd.conf</b> file. Mine was located in "C:\wamp\bin\apache\apache2.4.27\conf\". Open the file with a text editor and search (CTRL+F) for one of the modules you need to enable. To enable them, simply remove the #-character in front of the line.</p>
                                                <p class="uk-text-center"><img src="images/apache.jpg" style="border:1px solid #ccc; height: 85%; width: 85%" /></p>
                                                <hr class="uk-divider-icon">
                                                <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-question-circle" aria-hidden="true"></i> How to Enable PHP Extensions?</p>
                                                <p class="uk-text-center">Go into your PHP directory and find the <b>php.ini</b> file. Mine was located in "C:\wamp\bin\php\php5.6.31". Open the file with a text editor and search (CTRL+F) for one of the modules you need to enable. To enable them, simply remove the ;-character in front of the line.</p>
                                                <p class="uk-text-center"><img src="images/php.jpg" style="border:1px solid #ccc; height: 85%; width: 85%" /></p>
                                            </div>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <hr class="uk-divider-icon">
                            <?php if(isset($_GET['continue'])) { ?>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <div class="uk-alert-danger" uk-alert>
                                            <p class="uk-text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Warning:</strong> Please delete install folder!</p>
                                        </div>
                                        <a href="/" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><i class="fa fa-spinner fa-pulse fa-fw"></i> Continue Installation</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="button_startinstall"><i class="fa fa-refresh fa-spin fa-fw"></i> Start Installation</button>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
                            <h3 class="uk-card-title uk-text-uppercase uk-text-bold uk-text-center"><i class="fa fa-wrench" aria-hidden="true"></i> Settings</h3>
                            <p>
                                <fieldset class="uk-fieldset">
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Server Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="server_name" type="text" placeholder="Example: MyServer" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Language</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="language" style="background-color: rgba(0,0,0,0.4);">
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
                                        <label class="uk-form-label uk-text-uppercase">Expansion</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="expansion" style="background-color: rgba(0,0,0,0.4);">
                                                <option value="1">Vanilla</option>
                                                <option value="2">The Burning Crusade</option>
                                                <option value="3">Wrath of the Lich King</option>
                                                <option value="4">Cataclysm</option>
                                                <option value="5">Mist of Pandaria</option>
                                                <option value="6">Warlords of Draenor</option>
                                                <option value="7">Legion</option>
                                                <option value="8">Battle for Azeroth</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Realmlist</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="realmlist" type="text" placeholder="Example: logon.domain.com" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase">Url of Website</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="weburl" type="text" placeholder="Example: http://domain.com/ or https://domain.com/" required>
                                        </div>
                                    </div>
                                    <hr class="uk-divider-icon">
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Hostname</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="blizzcms_hostname" type="text" placeholder="Example: 127.0.0.1" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Username</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="blizzcms_username" type="text" placeholder="Example: root" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="blizzcms_password" type="password" placeholder="Example: ascent" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Website</strong> Database Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="blizzcms_database" type="text" placeholder="Example: blizzcms" required>
                                        </div>
                                    </div>
                                    <hr class="uk-divider-icon">
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Hostname</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="realmd_hostname" type="text" placeholder="Example: 127.0.0.1" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Username</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="realmd_username" type="text" placeholder="Example: root" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="realmd_password" type="password" placeholder="Example: ascent" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label uk-text-uppercase"><strong>Auth</strong> Database Name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="realmd_database" type="text" placeholder="Example: auth" required>
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
</body>
</html>
