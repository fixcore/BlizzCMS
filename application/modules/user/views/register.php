<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('register'); ?></title>
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
            <div id="home-promoted-carousel-container" class="position-relative">
                <div class="Overlay Overlay--bottom" id="home-promoted-scroll-overlay">
                    <div class="Overlay-content">
                        <div class="align-center">
                            <div data-carousel="#home-promoted-carousel" data-transition-delay="0" class="CarouselScroll is-autoscroll is-autoscroll-interrupt CarouselScroll--singleLine" id="home-promoted-scroll">
                                <div class="CarouselScroll-template">
                                    <div class="CarouselScroll-item">
                                        <div class="CarouselScroll-inner"></div>
                                    </div>
                                </div>
                                <div class="CarouselScroll-container">
                                    <div class="CarouselScroll-item"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Pane Pane--adaptiveHg Pane--adaptiveSpaceLarge Home-storiesPane">
                <div class="Pane-content">
                    <div class="Grid row Home-storiesEventsGrid">
                        <div class="GridItem col-md-2"></div>
                        <div class="GridItem col-md-8">
                            <!-- content START -->
                            <h2 class="uk-text-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('create_acc'); ?></h2>
                            <p style="color: #fff;"><?= $this->lang->line('cr_acc_des'); ?></p>
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="reg_country">
                                            <?php foreach($this->m_data->getCountry()->result() as $countrys) { ?>
                                                <option value="<?= $countrys->id; ?>"><?= $countrys->country_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input" type="text" name="reg_firstname" pattern=".{2,}" required title="2 characters minimum" placeholder="<?= $this->lang->line('first_name'); ?>">
                                    </div>
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                                        <input class="uk-input" type="text" name="reg_lastname" pattern=".{2,}" required title="2 characters minimum" placeholder="<?= $this->lang->line('last_name'); ?>">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="reg_dateMonthNace">
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
                                    <div class="uk-inline">
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="reg_dateDayNace">
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
                                    <div class="uk-inline">
                                        <input class="uk-input" type="number" name="reg_dateYearNace" pattern=".{4,4}" min="1936" max="2010" required title="4 characters" placeholder="<?= $this->lang->line('year'); ?>">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: hashtag"></span>
                                        <input class="uk-input" type="text" name="reg_username" pattern=".{3,}" required title="3 characters minimum" placeholder="<?= $this->lang->line('username_re'); ?>">
                                    </div>
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input" type="email" name="reg_email" required placeholder="<?= $this->lang->line('email_re'); ?>">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input" type="password" name="reg_password" pattern=".{5,}" required title="5 characters minimum" placeholder="<?= $this->lang->line('password_re'); ?>">
                                    </div>
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input" type="password" name="reg_pascword" pattern=".{5,}" required title="5 characters minimum" placeholder="<?= $this->lang->line('pascword_re'); ?>">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="reg_question">
                                                <?php foreach($this->m_data->getQuestion()->result() as $question) { ?>
                                                    <option value="1"><?= $question->question; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: question"></span>
                                        <input class="uk-input" type="text" name="reg_SecretAnswer" pattern=".{1,}" required title="1 characters minimum" placeholder="<?= $this->lang->line('secret_answ'); ?>">
                                    </div>
                                </div>
                                <button class="ui blue submit button" type="submit" name="button_register"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('button_reg'); ?></button>
                            </form>
                        </div>
                        <!-- content END -->

                        <?php if (isset($_POST['button_register']))
                        {
                            $country = $_POST['reg_country'];
                            $name    = strtoupper($_POST['reg_firstname']);
                            $surname = strtoupper($_POST['reg_lastname']);
                            $month   = $_POST['reg_dateMonthNace'];
                            $day     = $_POST['reg_dateDayNace'];
                            $year    = $_POST['reg_dateYearNace'];
                            $username= strtoupper($_POST['reg_username']);
                            $email   = strtoupper($_POST['reg_email']);
                            $password= strtoupper($_POST['reg_password']);
                            $pascword= strtoupper($_POST['reg_pascword']);
                            $question= $_POST['reg_question'];
                            $answer  = $_POST['reg_SecretAnswer'];

                            if ($password == $pascword)
                            {
                                if ($this->m_data->getSpecifyAccount($username)->num_rows() > 0)
                                {
                                    echo $this->lang->line('acc_exist');
                                }
                                else
                                    $this->m_data->insertRegister($name, $surname, $username, $email, $question, $password, $answer, $year, $month, $day);
                            }
                            else
                                echo $this->lang->line('pass_nmatch');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
