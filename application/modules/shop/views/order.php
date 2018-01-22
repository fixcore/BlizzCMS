<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('shop'); ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/blizzcms-themes.css?v=58-88"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/shop.css"/>
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

    <!-- Wowhead START -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>
    <!-- Wowhead START -->
    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
    <!-- custom -->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
        <div class="Container Container--content Container--breadcrumbs">
            <div class="GameSite-link"> 
                <a class="GameSite-link--heading" href="<?= base_url('store') ?>"><?=$this->lang->line('store');?></a>
            </div>
            <?php foreach($this->shop_model->getGroups()->result() as $ggroups) { ?>
                <div class="GameSite-link"> 
                    <a class="GameSite-link--heading" href="<?= base_url('store/order/').$ggroups->id; ?>"><?= $ggroups->name ?></a>
                </div>
            <?php } ?>
            <!-- cat -->
            <div class="Breadcrumbs"></div>
            <div class="User-menu"> 
                <!-- right -->
                <span class="Breadcrumb"> 
                    <a class="Breadcrumb-content"> 
                        <!-- logged -->
                        <?php if ($this->m_data->isLogged()) { ?>
                            <!-- credits -->
                            <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span>
                            | 
                            <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="20px" height="20px" uk-tooltip="pos: bottom"><span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span>
                            <!-- credits -->
                        <?php } ?>
                        <!-- logged -->
                    </a> 
                </span>
                <!-- right -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- submenu -->
    <storefront-root _nghost-c0="" ng-version="4.4.6">
        <storefront-family-page _nghost-c19="" class="">
		    <div _ngcontent-c19="" class="family-page">
			    <!-- header -->
			    <header _ngcontent-c19="">
            	    <storefront-featured-content _ngcontent-c19="" _nghost-c11="" class="ng-tns-c11-8">
                	    <div _ngcontent-c11="" class="featured-content">
                    	    <div _ngcontent-c11="" class="background ng-tns-c11-8 ng-trigger ng-trigger-fadeInOut">
                        	    <div _ngcontent-c11="" class="blur">
                            	    <div _ngcontent-c11="" class="mobile" style="background: url(<?= base_url('assets/images/backgrounds/store-mobile.jpg'); ?>) rgb(16, 20, 14);"></div>
                            	    <div _ngcontent-c11="" class="desktop" style="background: url(<?= base_url('assets/images/backgrounds/store-full.jpg'); ?>) rgb(16, 20, 14);"></div>
                        	    </div>
                        	    <div _ngcontent-c11="" class="mobile" style="background: url(<?= base_url('assets/images/backgrounds/store-prod-mobile.jpg'); ?>) rgb(16, 20, 14);"></div>
                        	    <div _ngcontent-c11="" class="desktop" style="background: url(<?= base_url('assets/images/backgrounds/store-fullbg.jpg'); ?>) rgb(16, 20, 14);"></div>
                    	    </div>
                	    </div>
            	    </storefront-featured-content>
        	    </header>
        	    <!-- header -->

        	    <!-- message -->
                <?php if(isset($_GET['complete'])): ?>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="uk-alert-success" uk-alert>
                                <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?=$this->lang->line('shop_success');?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- message -->

                <main _ngcontent-c19="">
                    <storefront-browsing-module _ngcontent-c19="" class="app-container" _nghost-c9="">
                        <div _ngcontent-c9="" class="main">
                            <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-flex-center uk-text-center">
                                <div class="uk-grid uk-grid-medium uk-child-width-1-4 uk-flex-center uk-text-center">
                                    <?php foreach($this->shop_model->getShopGeneralGP($idlink)->result() as $itemsG) { ?>
                                        <div class="uk-child-width-expand uk-grid-collapse uk-grid uk-grid-match uk-grid-stack">
                                            <storefront-browsing-card _ngcontent-c9="" _nghost-c16="">
                                                <div _ngcontent-c16="" class="browsing-card">
                                                    <storefront-link _ngcontent-c16="" _nghost-c2="">
                                                        <a _ngcontent-c2="" title="<?= $itemsG->name ?>">
                                                            <div _ngcontent-c16="" class="background">
                                                                <div _ngcontent-c16="" class="vertical" style="background: url(<?= base_url('assets/images/store/').$itemsG->image; ?>);"></div>
                                                                <div _ngcontent-c16="" class="horizontal" style="background: url(<?= base_url('assets/images/store/').$itemsG->image; ?>);"></div>
                                                            </div>
                                                            <div _ngcontent-c16="" class="content">
                                                                <div _ngcontent-c16="" class="family-img-container">
                                                                    <div _ngcontent-c16="" class="family-icon-container"></div>
                                                                </div>
                                                                <div _ngcontent-c16="" class="name uk-text-break"><a rel="item=<?= $itemsG->itemid ?>"><?= $itemsG->name ?></a></div>
                                                                <div _ngcontent-c16="" class="category"><span class="uk-label uk-label-success uk-text-capitalize"><?= $this->shop_model->getSpecifyGroup($itemsG->groups) ?></span></div>
                                                                <div _ngcontent-c16="" class="price">
                                                                    <storefront-price _ngcontent-c16="" _nghost-c18="">
                                                                        <span _ngcontent-c18="" class="price">
                                                                            <span class="full">
                                                                                <!-- price -->
                                                                                <?php if(!is_null($itemsG->price_vp) && !empty($itemsG->price_vp) && $itemsG->price_vp != '0') { ?>
                                                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=vp">
                                                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                                                        <span class="uk-badge"><?= $itemsG->price_vp ?></span>
                                                                                    </a>
                                                                                    <span style="display:inline-block; width: 10px;"></span>
                                                                                <?php } ?>
                                                                                <?php if(!is_null($itemsG->price_dp) && !empty($itemsG->price_dp) && $itemsG->price_dp != '0') { ?>
                                                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=dp">
                                                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                                                        <span class="uk-badge"><?= $itemsG->price_dp ?></span>
                                                                                    </a>
                                                                                <?php } ?>
                                                                                <!-- price -->
                                                                            </span>
                                                                        </span>
                                                                    </storefront-price>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </storefront-link>
                                                </div>
                                                <span style="display:block; height: 15px;"></span>
                                            </storefront-browsing-card>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </storefront-browsing-module>
                </main>
            </div>
        </storefront-family-page>
    </storefront-root>
</body>
</html>
