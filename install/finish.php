<!DOCTYPE html>
<html>
<head>
    <title>Installation - BlizzCMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>

    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="../assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- semantic -->
    <script src="../assets/semanticui/semantic.min.js"></script>
    <!-- semantic -->
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
            <!-- Top bar -->
            <div class="ui inverted three item menu">
                <a href="index.html" class="item active">Installation</a>
            </div>
            <!-- Main content -->
            <section>
                <div id="top_spacer"></div>
                <div class="center_1020" id="main">
                    <!-- Main Left column -->
                    <aside class="left">
                        <nav>
                            <a class="active"><i class="heartbeat icon"></i> Install</a>
                            <section class="sub">
                                <a><i class="browser icon"></i> Introduction</a>
                                <a><i class="alarm outline icon"></i> Requirements</a>
                                <a><i class="lab icon"></i> General</a>
                                <a><i class="database icon"></i> Database</a>
                                <a class="active"><i class="connectdevelop icon"></i> Complete installation</a>
                            </section>
                        </nav>
                        <div class="spacer"></div>
                    </aside>
                    <!-- Main right column -->
                    <aside class="right">
                        <section class="box big" id="installer_step_1">
                            <h2><i class="connectdevelop icon"></i> Last settings</h2>
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="ui info message">
                                    <div class="content">
                                        <div class="header">Languages</div>
                                        <p>At this time the default language on <strong>BlizzCMS</strong> is English, if you want to collaborate with another type of language you can do it by creating a pull request in the official repository.</p>
                                    </div>
                                </div>
                                <label for="language">Website Main Language:</label>
                                <select id="language" name="language">
                                    <option value="english">English</option>
                                    <option value="french">French</option>
                                    <option value="german">German</option>
                                    <option value="russian">Russian</option>
                                </select>
                                <div class="ui info message">
                                    <div class="content">
                                        <div class="header">How to set the URL correctly?</div>
                                        <p>Maybe your domain is: <strong>http://<?= $_SERVER['SERVER_NAME']; ?></strong> at the end of URL enter <strong>/</strong> Example: <strong>http://<?= $_SERVER['SERVER_NAME']; ?>/</strong></p>
                                        <p>Remember that if you use ssl you must use <strong>https://</strong></p>
                                    </div>
                                </div>
                                <label for="urlSev">URL of Website</label>
                                <input required type="text" id="urlSev" name="urlSev" placeholder="use http:// or https://" />
                                <div class="installer_navigation">
                                    <input type="submit" name="button_continue" class="ui purple button" value="Accept and continue">
                                </div>
                            </form>

                            <?php if(isset($_GET['ready'])) { ?>
                                <div class="ui success icon message">
                                    <i class="green check icon"></i>
                                    <div class="content">
                                        <div class="header">Installation Complete!</div>
                                        <p><i class="warning circle icon"></i><strong>Attention: Please delete install folder.</strong></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </section>
                    </aside>

                    <?php if(isset($_POST['button_continue']))
                    {
                        $urlSev   = $_POST['urlSev'];
                        $language = $_POST['language'];

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
                        echo '<script>window.location.href = "finish.php?ready";</script>';
                    }?>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
