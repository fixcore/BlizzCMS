<!-- asd END -->
<div class="Navbar-container">
<nav class="Navbar-desktop">
<!-- logo START -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster');
</style>
<a href="<?= base_url(); ?>" class="" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->config->item('ProjectName'); ?> Icon">
    <h3 style="font-family: 'Lobster', cursive; position: absolute; top: 10px; font-size: 30px;"><?= $this->config->item('ProjectName'); ?></h3>
</a>
<!-- logo END -->

<div style="position: relative; margin-left: 12em;" class="Navbar-profileItems">
    <a class="Navbar-item Navbar-modalToggle is-noSelect Navbar-games" data-index='0' data-name="<?= $this->lang->line('menu_more'); ?>" data-target="Navbar-gamesDropdown">
    <div class="Navbar-label"><?= $this->lang->line('menu_more'); ?></div>
<div class="Navbar-icon Navbar-dropdownIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-dropdown">
</use>
</svg>
</div>
</a>

<a href="<?= base_url(); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('menu_home'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_home'); ?>">
    <div class="Navbar-label"><?= $this->lang->line('menu_home'); ?></div>
</a>

<a href="<?= base_url('news'); ?>" class="Navbar-item Navbar-link is-noSelect Navbar-news" data-index='2' data-name="<?= $this->lang->line('menu_news'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_news'); ?>">
    <div class="Navbar-label"><?= $this->lang->line('menu_news'); ?></div>
</a>

</div>

<div class="Navbar-profileItems">
    <a href="<?= base_url('support'); ?>" class="Navbar-support Navbar-item Navbar-link is-noSelect" data-index="0" data-name="<?= $this->lang->line('menu_support'); ?>" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('menu_support'); ?>">
    <div class="Navbar-label"><?= $this->lang->line('menu_support'); ?></div>
</a>

<?php if ($this->m_data->isLogged()) { ?>
<a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect is-active">
    <div class="Navbar-icon Navbar-employeeIcon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
            <use xlink:href="#Navbar-icon-blizz"></use>
        </svg>
    </div>
    <div class="Navbar-label Navbar-accountUnauthenticated"><?= $this->session->userdata('fx_sess_username'); ?></div>
    <div class="Navbar-icon Navbar-dropdownIcon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
            <use xlink:href="#Navbar-icon-dropdown"></use>
        </svg>
    </div>
</a>
<?php } else { ?>
<a data-target="Navbar-accountDropdown" data-name="account" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
    <div class="Navbar-icon Navbar-employeeIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-blizz">
</use>
</svg>
</div>
<div class="Navbar-label"><?= $this->lang->line('my_account'); ?></div>
<div class="Navbar-icon Navbar-dropdownIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-dropdown">
</use>
</svg>
</div>
</a>
<?php } ?>

</div>
</nav>

</div>
<!-- asd END -->

<div class="Navbar-modals">
    <div data-toggle="games" class="Navbar-modal Navbar-dropdown Navbar-gamesDropdown is-full">
    <div class="Navbar-tick">
    <div class="Navbar-tickInner">
</div>
</div>
<div class="Navbar-modalContent">
    <div class="Navbar-gamePublishers Navbar-columns8 Navbar-modalSection is-full is-center">
    <div data-publisher="<?= $this->config->item('ProjectName'); ?>" data-name="<?= $this->lang->line('menu_home'); ?>" class="Navbar-gamePublisher Navbar-columns7">
    <div class="Navbar-gamePublisherLabel animation-delay-9"><?= $this->lang->line('menu_more'); ?></div>

<nav class="Navbar-posters Navbar-imagePanel">

<a href="<?= base_url('store'); ?>" class="Navbar-poster animation-delay-1" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('store'); ?>">
    <img src="<?= base_url(); ?>assets/images/menu/more1.jpg" title="<?= $this->lang->line('store'); ?>" class="Navbar-posterImage"/>
</a>

</nav>
</div>
</div>
</div>
</div>
<div class="Navbar-constrained">
    <div data-toggle="Navbar-account" class="Navbar-modal Navbar-dropdown Navbar-accountDropdown is-constrained">
    


<div class="Navbar-modalContent">
    <div class="Navbar-accountDropdownLoggedOut">

<?php if (!$this->m_data->isLogged()) { ?>
<div class="Navbar-modalSection">
    <a href="<?= base_url(); ?>user/login" class="Navbar-accountDropdownButtonLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('menu_login'); ?>">
        <div class="Navbar-button is-full ui animated ui primary basic button" tabindex="0">
      <div class="visible content"><?= $this->lang->line('menu_login'); ?></div>
      <div class="hidden content">
        <i class="right arrow icon"></i>
      </div>
    </div>
    </a>
</div>
<?php } ?>

<?php if ($this->m_data->isLogged()) { ?>
<div class="Navbar-accountDropdownLoggedOut">
<div class="Navbar-modalSection">
<div class="Navbar-accountDropdownProfileInfo">
    <div class="Navbar-accountDropdownBattleTag">
        <?= $this->session->userdata('fx_sess_username'); ?>#<?= $this->session->userdata('fx_sess_tag'); ?>
    </div>
</div>
    <div class="Navbar-accountDropdownEmail"><?= $this->session->userdata('fx_sess_email'); ?></div>
</div>

<?php if($this->m_general->getPermissions($this->session->userdata('fx_sess_id')) == 1) { ?>
<a href="<?= base_url('admin'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('adm_panel'); ?>">
    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-settings">
    </use>
    </svg>
    </div>
    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('adm_panel'); ?></div>
</a>
<?php } ?>

<a href="<?= base_url('user/settings'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_setting'); ?>">
    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-settings">
    </use>
    </svg>
    </div>
    <div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_setting'); ?></div>
</a>

<a href="<?= base_url('user/gifts'); ?>" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('acc_gifs'); ?>">
<div class="Navbar-icon Navbar-accountDropdownLinkIcon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
<use xlink:href="#Navbar-icon-gifts">
</use>
</svg>
</div>
<div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('acc_gifs'); ?></div>
</a>

<a href="<?= base_url('user/logout'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account_out'); ?>">
<div class="Navbar-icon Navbar-accountDropdownLinkIcon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
<use xlink:href="#Navbar-icon-logout">
</use>
</svg>
</div>
<div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('account_out'); ?></div>
</a>
</div>
<?php } ?>

<?php if (!$this->m_data->isLogged()) { ?>
<a href="<?= base_url('user/register'); ?>" class="Navbar-accountDropdownLink" data-analytics="global-nav" data-analytics-placement="Nav - <?= $this->lang->line('account'); ?> - <?= $this->lang->line('create_acc'); ?>">
    <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
    <use xlink:href="#Navbar-icon-account-add">
</use>
</svg>
</div>
<div class="Navbar-accountDropdownLinkLabel"><?= $this->lang->line('create_acc'); ?></div>
</a>
<?php } ?>

</div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>