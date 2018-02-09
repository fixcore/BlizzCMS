<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_store'); ?></title>
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

    <!-- Wowhead -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>

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
            <header class="Community-header">
                <div class="Community-wrapper">
                    <div class="Welcome">
                        <div class="Welcome-logo--container">   
                            <p class="Welcome-text uk-text-uppercase"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?= $this->lang->line('store_welcome'); ?></p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="Forum-content">
                <div uk-grid>
                    <div class="uk-width-1-1">
                        <div class="section">
                            <div uk-grid>
                                <div class="uk-width-3-4">
                                    <form method="post" action="">
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-inline uk-width-1-3@s">
                                                <div class="uk-form-controls">
                                                    <select class="uk-select" id="selectCategory">
                                                        <option value="0"><?= $this->lang->line('store_select_categories'); ?></option>
                                                        <option value="0"><?= $this->lang->line('store_all_categories'); ?></option>
                                                        <?php foreach($this->shop_model->getGroups()->result() as $ggroups) { ?>
                                                            <option value="<?= $ggroups->id ?>"><?= $ggroups->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <script>
                                                        $(function(){
                                                          // bind change event to select
                                                          $('#selectCategory').on('change', function () {
                                                              var url = $(this).val(); // get selected value
                                                              if (url) { // require a URL
                                                                  window.location = "<?= base_url('store/'); ?>"+url; // redirect
                                                              }
                                                              return false;
                                                          });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <?php if ($this->m_data->isLogged()) { ?>
                                                <div class="uk-inline uk-width-1-3@s">
                                                    <a href="">
                                                        <button class="uk-button uk-button-primary"><i class="fa fa-question-circle" aria-hidden="true"></i> <?=$this->lang->line('store_support');?></button>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </form>
                                </div>
                                <div class="uk-width-1-4">
                                    <?php if ($this->m_data->isLogged()) { ?>
                                        <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span>
                                        <span style="display:inline-block; width: 5px;"></span>
                                        <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_GET['complete'])): ?>
                        <div class="uk-width-1-1">
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?=$this->lang->line('store_success');?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="uk-width-1-1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <table class="uk-table uk-table-divider">
                                <thead>
                                    <tr>
                                        <th class="uk-width-small" style="color: #fff;"><i class="fa fa-book" aria-hidden="true"></i> <?=$this->lang->line('column_icon');?></th>
                                        <th class="uk-width-medium uk-text-center" style="color: #fff;"><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('store_item_name');?></th>
                                        <th class="uk-width-medium uk-text-center" style="color: #fff;"><i class="fa fa-cart-plus" aria-hidden="true"></i> <?=$this->lang->line('store_item_price');?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->shop_model->getShopGeneral($idlink)->result() as $itemsG) { ?>
                                        <tr>
                                            <td colspan="" rowspan="" headers="">
                                                <a rel="item=<?= $itemsG->itemid ?>">
                                                    <img width="50" height="50" class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/<?= $itemsG->iconname ?>.jpg" />
                                                </a>
                                            </td>
                                            <td class="uk-text-center"><a rel="item=<?= $itemsG->itemid ?>"><?= $itemsG->name ?></a></td>
                                            <td class="uk-text-center" style="color: #fff;">
                                                <?php if(!is_null($itemsG->price_vp) && !empty($itemsG->price_vp) && $itemsG->price_vp != '0') { ?>
                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=vp">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                        <span class="uk-badge"><?= $itemsG->price_vp ?></span>
                                                    </a>
                                                    <span style="display:inline-block; width: 5px;"></span>
                                                <?php } ?>
                                                <?php if(!is_null($itemsG->price_dp) && !empty($itemsG->price_dp) && $itemsG->price_dp != '0') { ?>
                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=dp">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                        <span class="uk-badge"><?= $itemsG->price_dp ?></span>
                                                    </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
