<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('nav_bugtracker'); ?></title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font-awesome End -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="/<?= base_url(); ?>assets/js/jquery.min.js?v=88"></script>
    <![endif]-->
</head>

<body class="en-us <?= $this->config->item('theme_name'); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->
    <br><br><br>
    <div role="main">
        <section class="Forum">
            <header class="Forum-header">
                <div class="Container Container--content">
                    <div class="space-adaptive-medium"></div>
                    <br></br>
                    <h1 class="Forum-heading" style="color: #fff;"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('nav_bugtracker'); ?></h1>
                    <div class="Forum-controls">
                        <?php if ($this->m_data->isLogged()) { ?>
                            <a href="#" uk-toggle="target: #createReport">
                                <button class="uk-button uk-button-primary">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_report'); ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="Container Container--content">
                    <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?= $this->lang->line('bugtracker_report_list'); ?></h3>
                </div>
            </header>
            <div class="Forum-content" data-track="nexus.checkbox" id="forum-topics">
                <!-- table START -->
                <div align="right" id="pagination_link"></div>
                <div class="table-responsive" id="bugtracker_table"></div>
                <!-- table END -->

                <script>
                    $(document).ready(function(){

                     function load_country_data(page)
                     {
                      $.ajax({
                       url:"<?php echo base_url(); ?>bugtracker/pagination/"+page,
                       method:"GET",
                       dataType:"json",
                       success:function(data)
                       {
                        $('#bugtracker_table').html(data.bugtracker_table);
                        $('#pagination_link').html(data.pagination_link);
                       }
                      });
                     }
                     
                     load_country_data(1);

                     $(document).on("click", ".pagination li a", function(event){
                      event.preventDefault();
                      var page = $(this).data("ci-pagination-page");
                      load_country_data(page);
                     });

                    });
                </script>
            </div>
        </section>
    </div>
