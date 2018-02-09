<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_bugtracker'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
</head>

<body class="en-us <?= $this->config->item('theme_name'); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <section class="Forum">
                <header class="Forum-header">
                    <div class="space-adaptive-medium"></div>
                    <div class="Container Container--content">
                        <div class="space-adaptive-medium"></div>
                        <h1 class="Forum-heading" style="color: #fff;"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('nav_bugtracker'); ?></h1>
                        <div class="Forum-controls">
                            <?php if ($this->m_data->isLogged()) { ?>
                                <a href="#" uk-toggle="target: #createReport">
                                    <button class="uk-button uk-button-primary"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_report'); ?></button>
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
    </div>

    <div id="createReport" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('form_create_bug_report'); ?></h2>
            </div>
            <?= form_open(base_url('bugtracker/create')); ?>
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <?= form_input($title_from); ?>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_type'); ?></label>
                        <div class="uk-form-controls">
                            <!-- dropdown -->
                            <?php 
                                $array = array();
                                foreach($this->bugtracker_model->getTypes() as $row ){
                                    $array[] = $row->title;
                                }
                                echo form_dropdown('type_Bug',  $array , '', $classDrop);
                            ?>
                            <!-- dropdown -->
                        </div>
                    </div>

                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <?= form_textarea('bug_description', $this->config->item('textarea'), 'id="ckeditor"'); ?>
                                <script>
                                    CKEDITOR.replace('ckeditor');
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: link"></span>
                                <?= form_input($url_form); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <?= form_button('button_cancel', $this->lang->line('button_cancel'), $close_form); ?>
                    <?= form_submit($submit_form); ?>
                </div>
            <?php form_close(); ?>
        </div>
    </div>
