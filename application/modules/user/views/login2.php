<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('login'); ?></title>
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

    <div data-url="https://d9me64que7cqs.cloudfront.net/components/Icon/Icon-6e31618f7193f6dc334044c35440d52262a57acee5f4393fd60c597d1f12fb749b4e25d9e4b275a3379cbbd592aa756fcf8cab6bdbea43f95ff50e29699136d8.svg" class="SvgLoader"></div>

    <div class="Page-container">
        <div class="Page-content en-GB">
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <div class="Pane-content">
                    <div class="Grid row Home-storiesEventsGrid">
                        <div class="GridItem col-md-2"></div>
                        <div class="GridItem col-md-8">
                            <!-- content START -->
                                <h2 class="uk-text-primary"><?= $this->lang->line('account_log'); ?></h2>
                                <p style="color: #fff;"><?= $this->lang->line('log_acc_des'); ?></p>
                                <!-- custom -->
                                <form method="post" action="">
                                    <div uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-inline; delay: 500; repeat: true">
                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                <input class="uk-input uk-placeholder uk-text-primary" name="login_email" required placeholder="<?= $this->lang->line('email_re'); ?>" type="email">
                                            </div>
                                            <div class="uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                <input class="uk-input uk-placeholder uk-text-primary" style="color: #fff;" name="login_password" required placeholder="<?= $this->lang->line('password_re'); ?>" type="password">
                                            </div>
                                        </div>
                                    </div>

                                    <button class="ui blue submit button" type="submit" name="button_login"><i class="address card outline icon"></i> <?= $this->lang->line('button_log'); ?></button>

                                </form>
                                <!-- custom -->
                                <h4><a href="<?= base_url('register'); ?>" title="<?= $this->lang->line('no_account'); ?>"> <i class="add user icon"></i> <?= $this->lang->line('no_account'); ?></a></h4>
                            <!-- content END -->

                            <?php if(isset($_POST['button_login']))
                            {
                                $email    = $_POST['login_email'];
                                $password = $_POST['login_password'];

                                $id = $this->m_data->getIDEmail($email);

                                if ($id == "0")
                                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p>'.$this->lang->line('account_error').': '.$this->lang->line('account_error_info').'</p></div>';
                                else
                                {
                                    $password = $this->m_data->encryptBattlenet($email, $password);

                                    if (strtoupper($this->m_data->getPasswordBnetID($id)) == strtoupper($password))
                                    {
                                        $this->m_data->arraySession($id);
                                    }
                                    else
                                        echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p>'.$this->lang->line('password_error').': '.$this->lang->line('password_error_info').'</p></div>';
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
