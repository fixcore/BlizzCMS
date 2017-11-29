<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('settings'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
<!-- semantic ui Start -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
<!-- semantic ui End -->
<!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
<!-- custom END -->

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


<div class="Page-container">
    <div class="Page-content en-US">
    <div style="" class="HeroPane HeroPane--large HeroPane--adaptive">

<div class="HeroPane-content">
    <div class="align-center">
    <div class="space-huge hide show-sm">
</div>

<div class="Heading Heading--siteTitle" id="locations-title" style="color: #fff;">
  <?= $this->session->userdata('fx_sess_username'); ?>
</div>

<div class="space-medium">
</div>
<div class="max-md">
    <div class="h5">
    <div id="locations-description" class="text-light">
      <i style="color: white;" class="heartbeat icon"></i>
      <br><br>
    </div>
</div>
</div>
<div class="space-adaptive-large">
</div>
</div>
<div class="align-center">
    <div class="TileGroup max-lg">
    <div class="Grid row TileGroup-grid">

<!-- forms -->
<?php if(isset($_POST['button_changepass'])){
 $oldpass = $_POST['oldpass'];
 $newpass = $_POST['newpass'];
 $reppass = $_POST['newpassr'];

 if ($reppass == $newpass)
 {
    if($this->m_general->getExpansionAction() == 1)
    {
      $compare = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $oldpass);

      $newpassI = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $newpass);

      if($this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
      {
        if ($newpassI == $this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')))
          echo '<div class="ui inverted red segment"><p>'.$this->lang->line('password_same').'</p></div>';
        else
        {
          $this->user_model->changePasswordI($this->session->userdata('fx_sess_id'), $newpassI);
        }
      }
      else
        echo '<div class="ui inverted red segment"><p>'.$this->lang->line('pass_omatch').'</p></div>';
    }
    elseif ($this->m_general->getExpansionAction() == 2)
    {
      $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $oldpass);

      $newpassI = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $newpass);

      $newpassII = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $newpass);

      if($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
      {
        if ($newpassII == $this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')))
          echo '<div class="ui inverted red segment"><p>'.$this->lang->line('password_same').'</p></div>';
        else
        {
          $this->user_model->changePasswordII($this->session->userdata('fx_sess_id'), $newpassI, $newpassII);
        }
      }
      else
        echo '<div class="ui inverted red segment"><p>'.$this->lang->line('pass_omatch').'</p></div>';
    }
    else
      echo '<div class="ui inverted red segment"><p>'.$this->lang->line('expansion_notfound').'</p></div>';
 }
 else
  echo '<div class="ui inverted red segment"><p>'.$this->lang->line('pass_nmatch').'</p></div>';
}?>

<?php if(isset($_POST['button_changeemail'])) {
  $password = $_POST['password'];
  $oldemail = $_POST['oldemail'];
  $newemail = $_POST['newemail'];

    if($this->m_general->getExpansionAction() == 1)
    {
      $compare = $this->m_data->encryptAccount($this->session->userdata('fx_sess_username'), $password);

      if(strtoupper($this->session->userdata('fx_sess_email')) == strtoupper($oldemail))
      {
        if($this->m_data->getPasswordAccountID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
        {
            $this->user_model->changeEmailI($this->session->userdata('fx_sess_id'), $newemail);
        }
        else
          echo '<div class="ui inverted red segment"><p>'.$this->lang->line('pass_omatch').'</p></div>';
      }
      else
        echo '<div class="ui inverted red segment"><p>'.$this->lang->line('email_omatch').'</p></div>';

    }
    elseif ($this->m_general->getExpansionAction() == 2)
    {
      $compare = $this->m_data->encryptBattlenet($this->session->userdata('fx_sess_email'), $password);

      $newpasscompare = $this->m_data->encryptBattlenet($newemail, $password);

      if ($this->user_model->getExistEmail(strtoupper($newemail)) > 0)
        echo '<div class="ui inverted red segment"><p>'.$this->lang->line('email_use').'</p></div>';
      else
      {
        if(strtoupper($this->session->userdata('fx_sess_email')) == strtoupper($oldemail))
        {
          if($this->m_data->getPasswordBnetID($this->session->userdata('fx_sess_id')) == strtoupper($compare))
          {
              $this->user_model->changeEmailII($this->session->userdata('fx_sess_id'), $newemail, $newpasscompare);
          }
          else
            echo '<div class="ui inverted red segment"><p>'.$this->lang->line('pass_omatch').'</p></div>';
        }
        else
          echo '<div class="ui inverted red segment"><p>'.$this->lang->line('email_omatch').'</p></div>';
      }
    }
    else
      echo '<div class="ui inverted red segment"><p>'.$this->lang->line('expansion_notfound').'</p></div>';
}?>
<!-- forms -->

<!-- step START -->
<div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
  <a href="#" id="changePassword">
    <div style="" class="Tile Tile--transparent Tile--innerBorder ExampleTile" data-index='0'>
      <div class="Tile-content">
        <div class="ExampleTile-content align-center">
          <div class="text-accent-warm">
            <div class="Icon Icon--jumbo hide inline-xs">
              <!-- image START -->
              <h2 class="ui center aligned icon header" style="color: white;">
                <i class="lock icon"></i>
                <?= $this->lang->line('chang_pass'); ?>
              </h2>
              <!-- image END -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
<!-- step END -->

<!-- step START -->
<div class="GridItem col-xs-6 col-md-4 TileGroup-gridItem">
  <a href="#" id="changeEmail">
    <div style="" class="Tile Tile--transparent Tile--innerBorder ExampleTile" data-index='0'>
      <div class="Tile-content">
        <div class="ExampleTile-content align-center">
          <div class="text-accent-warm">
            <div class="Icon Icon--jumbo hide inline-xs">
              <!-- image START -->
              <h2 class="ui center aligned icon header" style="color: white;">
                <i class="mail icon"></i>
                <?= $this->lang->line('chang_email'); ?>
              </h2>
              <!-- image END -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
<!-- step END -->

  <div class="ui changepass mini modal">
    <div class="header"><?= $this->lang->line('chang_pass'); ?></div>
    <div class="content">
<form action="" method="post" accept-charset="utf-8">
      <!-- old pass -->
      <div class="ui fluid corner labeled icon input">
        <i class="unhide icon"></i>
        <input name="oldpass" type="password" required placeholder="<?= $this->lang->line('old_password'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- old pass -->
      <hr>
      <!-- old pass -->
      <div class="ui fluid corner labeled icon input">
        <i class="lock icon"></i>
        <input name="newpass" type="password" required placeholder="<?= $this->lang->line('new_password'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- old pass -->
      <hr>
      <!-- old pass -->
      <div class="ui fluid corner labeled icon input">
        <i class="lock icon"></i>
        <input name="newpassr" type="password" required placeholder="<?= $this->lang->line('pascword_re'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- old pass -->
    </div>
    <div class="actions">
      <input class="ui primary basic button" type="submit" name="button_changepass" value="<?= $this->lang->line('button_change'); ?>">
      <input class="ui negative basic button" type="button" value="<?= $this->lang->line('button_cancel'); ?>">
    </div>
</form>
  </div>


<div class="ui changeemail mini modal">
    <div class="header"><?= $this->lang->line('chang_email'); ?></div>
    <div class="content">
<form action="" method="post" accept-charset="utf-8">
      <!-- pass -->
      <div class="ui fluid corner labeled icon input">
        <i class="lock icon"></i>
        <input name="password" type="password" required placeholder="<?= $this->lang->line('password_re'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- pass -->
      <hr>
      <!-- old email -->
      <div class="ui fluid corner labeled icon input">
        <i class="mail icon"></i>
        <input name="oldemail" type="email" required placeholder="<?= $this->lang->line('old_email'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- old email -->
      <hr>
      <!-- new pass -->
      <div class="ui fluid corner labeled icon input">
        <i class="mail icon"></i>
        <input name="newemail" type="email" required placeholder="<?= $this->lang->line('new_email'); ?>">
        <a class="ui corner label">
          <i class="asterisk icon"></i>
        </a>
      </div>
      <!-- new pass -->
    </div>
    <div class="actions">
      <input class="ui primary basic button" type="submit" name="button_changeemail" value="<?= $this->lang->line('button_change'); ?>">
      <input class="ui negative basic button" type="button" value="<?= $this->lang->line('button_cancel'); ?>">
    </div>
</form>
  </div>

<script>
  $('.ui.changepass.mini.modal')
  .modal('attach events', '#changePassword', 'show');
</script>

<script>
  $('.ui.changeemail.mini.modal')
  .modal('attach events', '#changeEmail', 'show');
</script>



</div>
</div>
</div>
</div>
</div>

<div class="space-huge"></div>

</div>
</div>