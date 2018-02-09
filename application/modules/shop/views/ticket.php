<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?></title>
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
            <div class="container">
                <div class="space-adaptive-medium"></div>
                <h1 class="uk-text-center text-heavy text-upper" style="color: #fff;"><i class="fa fa-question-circle" aria-hidden="true"></i> <?= $this->lang->line('store_support'); ?></h1>
                <h3 class="uk-text-center" style="color: #fff;"><?= $this->lang->line('store_support_description'); ?></h3>
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <table class="uk-table uk-table-divider">
                            <thead>
                                <tr>
                                    <th style="color: #fff;"><i class="fa fa-book" aria-hidden="true"></i> <?= $this->lang->line('column_id'); ?></th>
                                    <th class="uk-text-center" style="color: #fff;"><i class="fa fa-bookmark" aria-hidden="true"></i> <?= $this->lang->line('form_title'); ?></th>
                                    <th class="uk-text-center" style="color: #fff;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('column_date'); ?></th>
                                    <th class="uk-text-center" style="color: #fff;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?= $this->lang->line('column_status'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href=""><span class="uk-light">1</span></a>
                                    </td>
                                    <td class="uk-text-center">
                                        <a href=""><span class="uk-light">test</span></a>
                                    </td>
                                    <td class="uk-text-center">
                                        <a href=""><span class="uk-light">01-02-2018</span></a>
                                    </td>
                                    <td class="uk-text-center">
                                        <a href=""><span class="uk-label">Open</span></a>
                                    </td>
                                <tr>
                            </tbody>
                        </table>
                        <?php if ($this->m_data->isLogged()) { ?>
                            <div class="space-adaptive-small"></div>
                            <div class="uk-margin uk-text-center">
                                <a uk-toggle="target: #newTicket">
                                    <button class="uk-button uk-button-primary"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_ticket'); ?></button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="newTicket" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_ticket'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="" required type="text" placeholder="<?= $this->lang->line('form_title'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_subject'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="">
                                <option value="1">test</option>
                            </select>
                        </div>
                    </div>

                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <textarea required="" name="" id="ckeditor" rows="10" cols="80"></textarea>
                                <script>
                                    CKEDITOR.replace('ckeditor');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name=""><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
