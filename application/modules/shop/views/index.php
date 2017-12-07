<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('shop'); ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/shop.css" />
    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->
    <!-- Wowhead START -->
    <script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
    <script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>
    <!-- Wowhead START -->
    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- semantic -->
    <script src="<?= base_url(); ?>assets/semanticui/semantic.min.js"></script>
    <!-- semantic -->
    <!-- custom footer -->
    <!-- custom -->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <storefront-root _nghost-c0="" ng-version="4.4.6">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
        <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
	<div class="Container Container--content Container--breadcrumbs">


<?php foreach($this->shop_model->getGroups()->result() as $ggroups) { ?>
<div class="GameSite-link"> 
	<a class="GameSite-link--heading" href="<?= base_url('store?group=').$ggroups->id; ?>"> 
		<?= $ggroups->name ?> 
	</a> 
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
                    <img src="<?= base_url('assets/images/dp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
                    <?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?>
                     | 
                    <img src="<?= base_url('assets/images/vp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
                    <?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?>
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
    <!-- menu -->
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
        			<div class="ui success message">
					  <div class="header">
					    <?=$this->lang->line('shop_success');?>
					  </div>
					</div>
        		</div>
        	</div>
        	<!-- message -->
        <?php endif; ?>

			<main _ngcontent-c19="">
            	<storefront-browsing-module _ngcontent-c19="" class="app-container" _nghost-c9="">
                	<div _ngcontent-c9="" class="main">
						<div class="ui two column centered grid">
							<div class="five column centered row">

							<?php foreach($this->shop_model->getShopGeneral()->result() as $itemsG) { ?>
								<div class="column">
									<storefront-browsing-card _ngcontent-c9="" _nghost-c16="">
										<div _ngcontent-c16="" class="browsing-card">
											<storefront-link _ngcontent-c16="" _nghost-c2="">
												<a _ngcontent-c2="" title="<?= $itemsG->name ?>">
													<div _ngcontent-c16="" class="background">
														<div _ngcontent-c16="" class="vertical" style="background: url(<?= base_url('assets/images/store/').$itemsG->image; ?>) rgb(13, 17, 39);">
														</div>
														<div _ngcontent-c16="" class="horizontal" style="background: url(<?= base_url('assets/images/store/').$itemsG->image; ?>) rgb(13, 17, 39);"></div>
													</div>
													<div _ngcontent-c16="" class="content">
														<div _ngcontent-c16="" class="family-img-container">
															<div _ngcontent-c16="" class="family-icon-container">
															</div>
														</div>
														<h6 _ngcontent-c16="" class="name">
															<a rel="item=<?= $itemsG->itemid ?>">
													          <?= $itemsG->name ?>
													        </a>
														</h6>
														<div _ngcontent-c16="" class="category"><?= $this->shop_model->getSpecifyGroup($itemsG->groups) ?></div>
														<div _ngcontent-c16="" class="price">
															<storefront-price _ngcontent-c16="" _nghost-c18="">
																<span _ngcontent-c18="" class="price">
																	<span class="full">
																		<!-- price -->
																		<?php if(!is_null($itemsG->price_vp) || !empty($itemsG->price_vp)) { ?>
																	      <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=vp">
																	        <div class="ui inverted grey button">
																	          <img src="<?= base_url('assets/images/vp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
																	          <h6><?= $itemsG->price_vp ?></h6>
																	        </div>
																	      </a>
																	      <?php } ?>
																	        <?php if(!is_null($itemsG->price_dp) || !empty($itemsG->price_dp)) { ?>
																	      <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=dp">
																	        <div class="ui inverted orange button">
																	          <img src="<?= base_url('assets/images/dp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
																	          <h6><?= $itemsG->price_dp ?></h6>
																	        </div>
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
