<!DOCTYPE html>
<html>
<head>
    <title>Installation - BlizzCMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <script src="js/html5shiv.js"></script>
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="../core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="../core/uikit/js/uikit.min.js"></script>
    <script src="../core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="../core/font-awesome/css/font-awesome.min.css">
    <!-- font-awesome End -->

    <!-- custom footer -->
    <script src="../core/js/jquery-3.3.1.min.js"></script>
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
                                <a><i class="fa fa-wrench" aria-hidden="true"></i> General</a>
                                <a><i class="fa fa-database" aria-hidden="true"></i> Database</a>
                                <a class="active"><i class="fa fa-connectdevelop" aria-hidden="true"></i> Complete installation</a>
                            </section>
                        </nav>
                        <div class="spacer"></div>
                    </aside>
                    <!-- Main right column -->
                    <aside class="right">
                        <section class="box big" id="installer_step_1">
                            <h2><i class="fa fa-connectdevelop" aria-hidden="true"></i> Complete installation</h2>
                            <?php if(isset($_GET['ready'])) { ?>
                                <div class="uk-alert-success" uk-alert>
                                    <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-check-square-o" aria-hidden="true"></i> Installation Complete!</p>
                                    <p class="uk-text-center uk-text-bold">Attention user, please delete install folder.</p>
                                </div>
                            <?php } else { ?>
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="uk-alert-warning" uk-alert>
                                        <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-globe" aria-hidden="true"></i> Languages</p>
                                        <p class="uk-text-center">At this time the default language on <strong>BlizzCMS</strong> is English, if you want to collaborate with another type of language you can do it by creating a pull request in the official repository <strong>(Branch: devs)</strong>.</p>
                                    </div>
                                    <label for="language">Website Main Language:</label>
                                    <select id="language" name="language">
                                        <option value="english">English</option>
                                        <option value="french">French</option>
                                        <option value="german">German</option>
                                        <option value="russian">Russian</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="hungarian">Hungarian</option>
                                    </select>
                                    <div class="uk-alert-primary" uk-alert>
                                        <p class="uk-text-center uk-text-uppercase uk-text-bold"><i class="fa fa-question-circle" aria-hidden="true"></i> How to set the URL correctly?</p>
                                        <p class="uk-text-center">Maybe your domain is: <strong>http://<?= $_SERVER['SERVER_NAME']; ?></strong> at the end of URL enter <strong>/</strong> Example: <strong>http://<?= $_SERVER['SERVER_NAME']; ?>/</strong></p>
                                        <p class="uk-text-center">Remember that if you use ssl you must use <strong>https://</strong></p>
                                    </div>
                                    <label for="urlSev">URL of Website</label>
                                    <input required type="text" id="urlSev" name="urlSev" placeholder="use http:// or https://" />
                                    <div class="installer_navigation">
                                        <button class="uk-button uk-button-primary" type="submit" name="button_continue">Accept and finish <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            <?php } ?>
                        </section>
                    </aside>

                    <?php if(isset($_POST['button_continue']))
                    {
                        $urlSev   = $_POST['urlSev'];
                        $language = $_POST['language'];
                        $urlSev = preg_replace('/\s+/', '', $urlSev);

                        $fileContents = file_get_contents("config.php.dist");

                        $search = array
                        (
                            'BlizzCMSURL',
                            'BlizzCMSMAINLANGUAGE'
                        );

                        $replace = array
                        (
                            $urlSev,
                            $language
                        );

                        $newContents = str_replace($search, $replace, $fileContents);
                        $handle = fopen("config.php.dist","w");
                        fwrite($handle, $newContents);
                        fclose($handle);

                        rename("config.php.dist", "../application/config/config.php");

                        $lock = fopen('.lock', 'w');
                        fclose($lock);

                        echo '<script>window.location.href = "finish.php?ready";</script>';
                    }?>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
