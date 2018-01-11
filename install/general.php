<!DOCTYPE html>
<html>
<head>
    <title>Installation - BlizzCMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="../core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="../core/uikit/js/uikit.min.js"></script>
    <script src="../core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font-awesome End -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->

    <script src="js/ui.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            UI.initialize();
        })
    </script>

    <!--[if IE]>
    <style type="text/css">
        #main .right h2 img {
            position:relative;
        }
    </style>
    <![endif]-->

    <!--[if LTE IE 7]>
    <style type="text/css">
        #main .right .statistics span {
            width:320px;
        }
    </style>
    <![endif]-->
</head>

<body>
    <div id="popup_bg"></div>
    <!-- confirm box -->
    <div id="confirm" class="popup">
        <h1 class="popup_question" id="confirm_question"></h1>
        <div class="popup_links">
            <a href="javascript:void(0)" class="popup_button" id="confirm_button"></a>
            <a href="javascript:void(0)" class="popup_hide" id="confirm_hide" onClick="UI.hidePopup()">Cancel</a>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- alert box -->
    <div id="alert" class="popup">
        <h1 class="popup_message" id="alert_message"></h1>
        <div class="popup_links">
            <a href="javascript:void(0)" class="popup_button" id="alert_button">Okay</a>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div id="wrap">
        <div id="fixer">
            <!-- Main content -->
            <section>
                <div id="top_spacer"></div>
                <div class="center_1020" id="main">
                    <!-- Main Left column -->
                    <aside class="left">
                        <nav>
                            <a class="active"><i class="fa fa-chrome" aria-hidden="true"></i> Install</a>
                            <section class="sub">
                                <a><i class="fa fa-info-circle" aria-hidden="true"></i> Introduction</a>
                                <a><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Requirements</a>
                                <a class="active"><i class="fa fa-wrench" aria-hidden="true"></i> General</a>
                                <a><i class="fa fa-database" aria-hidden="true"></i> Database</a>
                                <a><i class="fa fa-connectdevelop" aria-hidden="true"></i> Complete installation</a>
                            </section>
                        </nav>
                        <div class="spacer"></div>
                    </aside>
                    <!-- Main right column -->
                    <aside class="right">
                        <section class="box big" id="installer_step_1">
                            <h2><i class="fa fa-wrench" aria-hidden="true"></i> General Settings</h2>
                            <form method="post" action="">
                                <label for="server_name">Server name</label>
                                <input required type="text" id="server_name" name="server_name" pattern=".{2,9}" required title="2 characters minimum and 9 maximum" placeholder="MyServer" />
                                <label for="realmlist">Realmlist</label>
                                <input required type="text" id="realmlist" name="realmlist" placeholder="logon.domain.com" />
                                <label for="expansion">Expansion:</label>
                                    <select id="expansion" name="expansion">
                                        <option value="1">Vanilla</option>
                                        <option value="2">The Burning Crusade</option>
                                        <option value="3">Wrath of the Lich King</option>
                                        <option value="4">Cataclysm</option>
                                        <option value="5">Mist of Pandaria</option>
                                        <option value="6">Warlords of Draenor</option>
                                        <option value="7">Legion</option>
                                        <option value="8">Battle for Azeroth</option>
                                    </select>
                                <!-- soap -->
                                <label for="soap_ip">Soap ip</label>
                                <input required type="text" id="soap_ip" name="soap_ip" placeholder="127.0.0.1" />
                                <label for="soap_user">Soap User</label>
                                <input required type="text" id="soap_user" name="soap_user" placeholder="fixcore" />
                                <label for="soap_password">Soap Password</label>
                                <input required type="password" id="soap_password" name="soap_password" placeholder="blizzcms" />
                                <label for="soap_port">Soap Port</label>
                                <input required type="text" id="soap_port" name="soap_port" placeholder="7878" />
                                <!-- soap -->
                                <!-- realm -->
                                <label for="soap_port">Realm Port</label>
                                <input required type="text" id="realm_port" name="realm_port" placeholder="8085" />
                                <!-- realm -->
                                <div class="installer_navigation">
                                    <a href="requirements.html"><button class="uk-button uk-button-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous step</button></a>
                                    <button class="uk-button uk-button-primary" type="submit" name="button_general">Next Step <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                </div>
                            </form>

                            <?php if(isset($_POST['button_general']))
                            {
                                $server_name 	= $_POST['server_name'];
                                $realmlist 		= $_POST['realmlist'];
                                $expansion 		= $_POST['expansion'];
                                $soapip 		= $_POST['soap_ip'];
                                $soapuser 		= $_POST['soap_user'];
                                $soappass 		= $_POST['soap_password'];
                                $soapport 		= $_POST['soap_port'];
                                $realmport 		= $_POST['realm_port'];

                                $fileContents = file_get_contents("fixcore.php.dist");

                                $search = array
                                (
                                    'ProjectName_fixcore', 
                                    'ProjectRealmlist_fixcore',
                                    'ProjectSoapIP_fixcore',
                                    'ProjectSoapUsername_fixcore',
                                    'ProjectSoapPass_fixcore',
                                    'ProjectSoapPort_fixcore',
                                    'ProjectRealmPort_fixcore',
                                    'ProjectExpansion_fixcore'
                                );

                                $replace = array
                                (
                                    $server_name, 
                                    $realmlist, 
                                    $soapip, 
                                    $soapuser, 
                                    $soappass, 
                                    $soapport, 
                                    $realmport, 
                                    $expansion
                                );

                                $newContents = str_replace($search, $replace, $fileContents);
                                $handle = fopen("fixcore.php.dist","w");
                                fwrite($handle, $newContents);
                                fclose($handle);

                                rename("fixcore.php.dist", "../application/config/fixcore.php");
                                echo '<script>window.location.href = "database.php";</script>';
                            }?>
                        </section>
                    </aside>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
