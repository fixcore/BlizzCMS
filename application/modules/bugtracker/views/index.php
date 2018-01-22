<?php if (isset($_POST['button_createIssue'])) {
    $title = $_POST['bug_title'];
    $type = $_POST['type_Bug'];
    $desc = $_POST['bug_description'];
    $url = $_POST['bug_url'];

    $this->bugtracker_model->insertIssue($title, $type, $desc, $url);
} ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> -</title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/blizzcms-themes.css?v=58-88"/>
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
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="/<?= base_url(); ?>assets/js/jquery.min.js?v=88"></script>
    <![endif]-->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
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
                    <h1 class="Forum-heading" style="color: #fff;"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('bugtracker'); ?></h1>
                    <div class="Forum-controls">
                        <?php if ($this->m_data->isLogged()) { ?>
                            <a href="#" uk-toggle="target: #createReport">
                                <button class="uk-button uk-button-primary">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('create_report'); ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="Container Container--content">
                    <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;"><?= $this->lang->line('report_list'); ?></h3>
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


<!-- create report -->
<div id="createReport" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">
                <i class="fa fa-bug" aria-hidden="true"></i>
                Create Bug Report
            </h2>
        </div>
        <form action="" method="post" accept-charset="utf-8">
            <div class="uk-modal-body">
                <!-- content -->
                    <!-- title -->
                    <h2 class="uk-text-large"><?= $this->lang->line('expr_title'); ?></h2>
                    <div class="uk-margin uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                        <input name="bug_title" class="uk-input" required type="text" placeholder="<?= $this->lang->line('expr_title'); ?> *">
                    </div>

                    <div class="uk-margin">
                        <h2 class="uk-text-large"><?= $this->lang->line('type'); ?></h2>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="type_Bug" id="form-stacked-select">
                                <?php foreach($this->bugtracker_model->getTypes()->result() as $rowTypes) { ?>
                                    <option value="<?= $rowTypes->id ?>"><?= $rowTypes->title ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- title -->
                    <!-- text area -->
                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                    <br>

                    <div class="form-group">
                        <h2 class="uk-text-large"><?= $this->lang->line('new_desc'); ?></h2>
                        <div class="col-md-12">
                            <textarea required="" name="bug_description" id="ckeditor" rows="10" cols="80">
                                <!-- text -->
                                <p>Realm:</p> 

                                <p>Character (name, faction, level...): </p>

                                <p>Difficult mode of the instance in which you found this issue: </p>

                                <p>Complete description of your issue (do not forget to specify the issue, all conditions for making the issue to happen, and if the issue is related to a phase, specify the phase in which you found this issue): </p>

                                <p>Steps for reproducing the issue: </p>
                                <!-- text -->
                            </textarea>
                            <script>
                                CKEDITOR.replace('ckeditor');
                            </script>
                        </div>
                    </div>
                    <!-- text area -->

                    <div class="uk-margin uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: link"></span>
                        <input name="bug_url" class="uk-input" type="text" placeholder="URL">
                    </div>
                <!-- content -->
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createIssue"><?= $this->lang->line('button_crea'); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- php -->
<!-- php -->
<!-- create report end -->