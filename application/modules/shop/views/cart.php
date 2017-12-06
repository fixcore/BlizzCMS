<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('shopping_cart'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-26b4d398e5ef87ac677896e9ff940ebf3ff9a773b2d40151f1ee0688a79f58d7a4df1d7b7a67702e8f96e354bb40eb77f69d6069635e638a47632474421f721f.css">
<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
<!-- semantic ui Start -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
<!-- semantic ui End -->
<!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
<!-- custom END -->
<script>var whTooltips = {colorLinks: true, iconizeLinks: false, renameLinks: false};</script>
<script type="text/javascript" src="//wow.zamimg.com/widgets/power.js"></script>
<!-- custom footer -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- semantic -->
<script src="<?= base_url(); ?>assets/semanticui/semantic.min.js"></script>
<!-- semantic -->
<!-- custom footer -->

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
    
    <div class="Breadcrumbs"> 
        
        <span class="Breadcrumb"> <i class="bookmark icon"></i>
            <a class="Breadcrumb-content"> 
                 <?= $this->lang->line('shopping_cart'); ?>
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

<div data-url="https://d9me64que7cqs.cloudfront.net/components/Icon/Icon-6e31618f7193f6dc334044c35440d52262a57acee5f4393fd60c597d1f12fb749b4e25d9e4b275a3379cbbd592aa756fcf8cab6bdbea43f95ff50e29699136d8.svg" class="SvgLoader">
</div>

<div class="Page-container">
    <div class="Page-content en-GB">

<div class="Pane Pane--adaptiveSpaceLarge">
<!-- content -->
<div class="ui center aligned icon header">
  <br>
  <div class="ui huge header" style="color: white;"><?= $this->lang->line('shopping_cart'); ?></div>
</div>
<!-- content -->
</div>

<!-- division -->
<div class="ui segment">
  <div class="ui left internal rail">
    <div class="ui segment" style="background:rgba(255,255,255,1)">
      <div class="ui vertical buttons">

        <!-- checkbox -->
        <div class="ui form">
          <div class="grouped fields">
            <label><?= $this->lang->line('select_char_shop'); ?></label>
            
          <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($this->session->userdata('fx_sess_id'))->result() as $charlist) { ?>
            <div class="field">
              <div class="ui slider checkbox">
                <input type="radio" name="throughput" checked="checked" name="char_selected" value="1">
                <label>
                  <div class="ui horizontal list">
                    <div class="item">
                      <img class="ui mini circular image" src="<?= base_url('assets/images/races/'); ?><?= $this->m_general->getRaceIcon($charlist->race); ?>">
                      <div class="content">
                        <div class="ui sub header"><?= $charlist->name ?></div>
                        Lvl <?= $charlist->level ?>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          <?php } ?>


          </div>
        </div>
        <!-- checkbox -->

      </div>
    </div>
  </div>

<?php if ($this->shop_model->getCar()->num_rows() < 1) { ?>
  <div class="ui center aligned icon header">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
      <a href="<?= base_url('shop'); ?>" title="">
        <div class="ui orange message"><?= $this->lang->line('buy_frist'); ?></div>
      </a>
    </div>
  </div>
<?php } ?>

<?php foreach ($this->shop_model->getCar()->result() as $caritems) { ?>

<form action="" method="post" accept-charset="utf-8">

  <div class="ui center aligned icon header">
    <div class="col-sm-3"></div>
  
    <div class="col-sm-5">
      <!-- content -->
      <h3 class="ui header">
        <img src="//wow.zamimg.com/images/wow/icons/large/<?= $caritems->icon ?>.jpg" class="ui circular image">
        <a href="#" rel="item=<?= $caritems->itemid ?>">
          <?= $caritems->name ?>
        </a>
          <div class="">
          <?php if($caritems->mode == "vp"): ?>
            <img src="<?= base_url('assets/images/vp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
          <?php else: ?>
            <img src="<?= base_url('assets/images/dp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
          <?php endif ?>
            <?= $caritems->price ?>
          </div>
            
      </h3>
      <!-- content -->
    </div>

    <div class="col-md-4">
      <button class="ui red basic button" type="submit" name="button_buyNow" value="<?= $caritems->id ?>"><?= $this->lang->line('button_remove'); ?></button>
    </div>


  </div>
</form>
  <?php } ?>


<!-- action buy -->
<div class="ui center aligned icon header">
  <div class="col-sm-3"></div>
  <div class="col-sm-9">
  <hr>
  <div class="col-sm-3"></div>
  <div class="col-sm-5">
    <?= $this->lang->line('total'); ?>:
    <!-- total vp -->
    <?php if ($this->shop_model->getTotalBuyVP() > 0) { ?>
    <img src="<?= base_url('assets/images/vp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
    <?= $this->shop_model->getTotalBuyVP(); ?>
    <?php } ?>
    <!-- total vp -->
    <!-- total dp -->
    <?php if ($this->shop_model->getTotalBuyDP() > 0) { ?>
     | 
    <img src="<?= base_url('assets/images/dp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
    <?= $this->shop_model->getTotalBuyDP(); ?>
    <?php } ?>
  </div>
    <!-- total dp -->
    <!-- button pay -->
    <div class="col-md-3">
    <?php if ($this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')) >= $this->shop_model->getTotalBuyVP() && $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')) >= $this->shop_model->getTotalBuyDP()) { ?>
      <form action="" method="post" accept-charset="utf-8">
        <button class="ui primary basic button" name="button_continueBuyNow"><?= $this->lang->line('button_continue'); ?></button>
      </form>
    <?php } else { ?>
    <div class="ui red message"><?= $this->lang->line('points_insuff'); ?></div>
    <?php } ?>
    </div>
    <!-- button pay -->
  </div>
</div>
<!-- action buy -->

</div>
<!-- division -->

<?php if (isset($_POST['button_buyNow'])) {
  $id = $_POST['button_buyNow'];
  $this->shop_model->removeSpecifyCarItem($id);
} ?>

<?php if (isset($_POST['button_continueBuyNow'])) {

} ?>

</div>
</div>