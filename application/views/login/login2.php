<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('login'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
<!-- semantic ui Start -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
<!-- semantic ui End -->
<!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
<!-- custom END -->
</head>

<body lang="en" data-locale="en-gb" data-device="desktop" data-name="index">

<!-- header -->
<?php $this->load->view('general/icons'); ?>

<div data-url="https://d9me64que7cqs.cloudfront.net/components/Icon/Icon-6e31618f7193f6dc334044c35440d52262a57acee5f4393fd60c597d1f12fb749b4e25d9e4b275a3379cbbd592aa756fcf8cab6bdbea43f95ff50e29699136d8.svg" class="SvgLoader">
</div>

<div class="Page-container">
    <div class="Page-content en-GB">
    <div id="home-promoted-carousel-container" class="position-relative">

<div class="Overlay Overlay--bottom" id="home-promoted-scroll-overlay">
    <div class="Overlay-content">
    <div class="align-center">
    <div data-carousel="#home-promoted-carousel" data-transition-delay="0" class="CarouselScroll is-autoscroll is-autoscroll-interrupt CarouselScroll--singleLine" id="home-promoted-scroll">
    <div class="CarouselScroll-template">
    <div class="CarouselScroll-item">
    <div class="CarouselScroll-inner">
</div>
</div>
</div>
<div class="CarouselScroll-container">
    <div class="CarouselScroll-item">
</div>
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
    <div style="color: #fff;">
    <h2><?= $this->lang->line('account_log'); ?></h2>
      <p><?= $this->lang->line('log_acc_des'); ?></p>
    <form class="ui form attached" method="post" action="">
      <div class="two fields">

        <div class="field">
          <label style="color: #fff;"><?= $this->lang->line('email_re'); ?></label>
          <input name="login_email" placeholder="<?= $this->lang->line('email_re'); ?>" required type="email">
        </div>
        <div class="field">
          <label style="color: #fff;"><?= $this->lang->line('password_re'); ?></label>
          <input name="login_password" placeholder="<?= $this->lang->line('password_re'); ?>" required type="password">
        </div>
      </div>
      <button class="ui blue submit button" type="submit" name="button_login"><i class="address card outline icon"></i> <?= $this->lang->line('button_log'); ?></button>
    </form>
        <h4><a href="<?= base_url('user/register'); ?>" title="<?= $this->lang->line('no_account'); ?>"> <i class="add user icon"></i> <?= $this->lang->line('no_account'); ?></a></h4>
    </div>
    <!-- content END -->

    <?php if(isset($_POST['button_login']))
    {
      $email    = $_POST['login_email'];
      $password = $_POST['login_password'];

      $id = $this->m_data->getIDEmail($email);

      if ($id == "0")
        echo $this->lang->line('account_error');
      else
      {
        $password = $this->m_data->encryptBattlenet($email, $password);

        if (strtoupper($this->m_data->getPasswordBnetID($id) == strtoupper($password)))
        {
          $this->m_data->arraySession($id);
        }
        else
          echo $this->lang->line('password_error');
      }
        
    } ?>

    </div>

</div>
</div>
</div>
<div class="Divider Home-blueDivider">
</div>

</div>
</div>