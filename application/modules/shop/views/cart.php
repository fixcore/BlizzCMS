<?php if (isset($_POST['buyNowGetItem'])) {
    $charselect = $_POST['charSelects'];

    $method = $_GET['tp'];
    $price = $this->shop_model->getPriceType($idlink, $_GET['tp']);

    $this->shop_model->insertHistory(
        $idlink, 
        $this->shop_model->getItem($idlink), 
        $this->session->userdata('fx_sess_id'), 
        $charselect, 
        $method,
        $price);
} ?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('cart'); ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
    <!-- custom -->
    <!-- custom -->
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/cart.css" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font-awesome End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->
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
  <a class="GameSite-link--heading" href="<?= base_url('store'); ?>"> 
    <?= $this->lang->line('shop'); ?> 
  </a> 
</div>

<!-- cat -->
  <div class="Breadcrumbs"> 
    
    <span class="Breadcrumb">
      <a class="Breadcrumb-content"> 
         <i class="fa fa-cart-plus" aria-hidden="true"></i> <?=$this->lang->line('cart');?>
      </a> 
    </span>

  </div>

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
        <nav _ngcontent-c0="" class="">
            <div _ngcontent-c0="" id="navbar"></div>
        </nav>
        <router-outlet _ngcontent-c0=""></router-outlet>
        <storefront-product-page _nghost-c6="" class="">
            <div _ngcontent-c6="" class="product-page">
                <header _ngcontent-c6="">
                    <storefront-featured-content _ngcontent-c6="" _nghost-c7="" class="ng-tns-c7-0">
                        <div _ngcontent-c7="" class="featured-content">
                            <!---->
                            <div _ngcontent-c7="" class="background ng-tns-c7-0 ng-trigger ng-trigger-fadeInOut">
                                <div _ngcontent-c7="" class="blur">
                                    <div _ngcontent-c7="" class="mobile" style="background: url(<?= base_url('assets/images/backgrounds/store-mobile.jpg'); ?>) rgb(16, 20, 14);"></div>
                                    <div _ngcontent-c7="" class="desktop" tyle="background: url(<?= base_url('assets/images/backgrounds/store-full.jpg'); ?>) rgb(16, 20, 14);"></div>
                                </div>
                                <div _ngcontent-c7="" class="mobile" style="background: url(<?= base_url('assets/images/backgrounds/store-prod-mobile.jpg'); ?>) rgb(16, 20, 14);"></div>
                                <div _ngcontent-c7="" class="desktop" style="background: url(<?= base_url('assets/images/backgrounds/store-fullbg.jpg'); ?>) rgb(16, 20, 14); transform: translate3d(0px, 156.5px, 0px); height: 442.5px;"></div>
                            </div>
                            <div _ngcontent-c7="" class="content ng-tns-c7-0" style="">
                                <div _ngcontent-c6="" class="product-selection-container" content="">
                                    <storefront-product-selection _ngcontent-c6="" _nghost-c8="">
                                        <div _ngcontent-c8="" class="product-selection">
                                            <div _ngcontent-c8="" class="header">
                                                <storefront-product-header _ngcontent-c8="" _nghost-c20="">

                                                  <div class="row">
                                                    <div class="col-sm-5"></div>
                                                    <div class="col-sm-5">
                                                      <a rel="item=<?= $this->shop_model->getItem($idlink); ?>">
                                                        <img class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/<?= $this->shop_model->getIcon($idlink) ?>.jpg" />
                                                      </a>
                                                    </div>
                                                  </div>

                                                    <div _ngcontent-c20="" class="product-header">

                                                        <div _ngcontent-c20="" class="name-category-container">
                                                            <h4 _ngcontent-c20="" class="name" style="color: #fff;">
                                                              <a rel="item=<?= $this->shop_model->getItem($idlink); ?>">
                                                                <?= $this->shop_model->getName($idlink); ?>
                                                              </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </storefront-product-header>
                                            </div>
                                <form action="" method="post" accept-charset="utf-8">
                                            <!-- pj -->
                                            <div _ngcontent-c8="" class="options">
                                                <storefront-product-option _ngcontent-c8="" _nghost-c22="">
                                                    <div _ngcontent-c22="" class="product-option">
                                                        <img _ngcontent-c22="" class="image" src="">
                                                        <div _ngcontent-c22="" class="name-price-container">
                                                            <h4 _ngcontent-c22="" class="price">
                                                                <storefront-price _ngcontent-c22="" _nghost-c25="">
                                                                    <span _ngcontent-c25="" class="price">
                                                                        <span class="full">
                                                                          <!-- pjj -->
                                                                        <select name="charSelects" class="ui dropdown" id="select">
                                                                        <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($this->session->userdata('fx_sess_id'))->result() as $listchar) { ?>
                                                                          <option value="<?= $listchar->guid ?>"><?= $listchar->name ?> - <?= $listchar->level ?></option>
                                                                        <?php } ?>
                                                                        </select>
                                                                        
                                                                        <script type="text/javascript" charset="utf-8" async defer>
                                                                            $('.ui.dropdown')
                                                                              .dropdown()
                                                                            ;
                                                                        </script>
                                                                          <!-- pjj -->
                                                                        </span>
                                                                    </span>
                                                                </storefront-price>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </storefront-product-option>
                                            </div>
                                            <!-- pj -->
                                            <div _ngcontent-c8="" class="options">
                                                <storefront-product-option _ngcontent-c8="" _nghost-c22="">
                                                    <div _ngcontent-c22="" class="product-option">
                                                        <img _ngcontent-c22="" class="image" src="">
                                                        <div _ngcontent-c22="" class="name-price-container">
                                                            <h4 _ngcontent-c22="" class="name">
                                                            <?php if($_GET['tp'] == "dp"): ?>
                                                              <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="Donor Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                            <?php else: ?>
                                                              <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="Voter Points" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                            </h4>
                                                          <?php endif; ?>
                                                            <h4 _ngcontent-c22="" class="price">
                                                                <storefront-price _ngcontent-c22="" _nghost-c25="">
                                                                    <span _ngcontent-c25="" class="price">
                                                                        <span class="full">
                                                                          <?= $this->shop_model->getPriceType($idlink, $_GET['tp']); ?>
                                                                        </span>
                                                                    </span>
                                                                </storefront-price>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </storefront-product-option>
                                            </div>
                                            <div _ngcontent-c8="" class="actions">
                                                <div _ngcontent-c8="" class="product-buttons">
                                                    <storefront-product-button-section _ngcontent-c8="" _nghost-c24="">
                                                        <div _ngcontent-c24="" class="product-button-section">
                                                            <p _ngcontent-c24=""></p>
                                                            <div _ngcontent-c24="" class="buttons">
                                                                <storefront-product-button _ngcontent-c24="" _nghost-c26="" class="primary">
                                                                    <div _ngcontent-c26="" class="product-button">
                                                                        <storefront-link _ngcontent-c26="" _nghost-c2="">
                                                                        <?php if ($_GET['tp'] == "dp")
                                                                            $qqs = $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id'));
                                                                        else
                                                                            $qqs = $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id'));
                                                                        ?>
                                                                        <?php if ($qqs >= $this->shop_model->getPriceType($idlink, $_GET['tp'])) { ?>

                                                                        <button type="submit" name="buyNowGetItem" class="button" title="<?= $this->lang->line('button_buy'); ?>">
                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                                                                            <?= $this->lang->line('button_buy'); ?>
                                                                        </button>
                                                                        <?php } else { ?>
                                                                        <div class="ui red message"><?=$this->lang->line('points_insuff');?></div>
                                                                        <?php } ?>
                                                                            
                                                                            <!--<button class="button" title="">
                                                                                <i class="fa fa-gift" aria-hidden="true"></i> 
                                                                                Buy
                                                                            </button>-->
                                                                        </storefront-link>
                                                                    </div>
                                                                </storefront-product-button>
                                                            </div>
                                                        </div>
                                                    </storefront-product-button-section>
                                                </div>
                                            </div>
                                </form>
                                        </div>
                                    </storefront-product-selection>
                                </div>
                            </div>
                        </div>
                    </storefront-featured-content>
                </header>
            </div>
        </storefront-product-page>
    </storefront-root>
</body>
</html>