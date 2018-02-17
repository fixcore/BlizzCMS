    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <form action="" method="post" accept-charset="utf-8">
                    <h2 style="color: #fff;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?=$this->lang->line('store_cart_description');?>: <a rel="item=<?= $this->shop_model->getItem($idlink); ?>"><?= $this->shop_model->getName($idlink); ?></a></h2>
                    <div class="uk-space-small"></div>
                    <div class="uk-margin uk-text-center">
                        <div class="uk-inline">
                            <a rel="item=<?= $this->shop_model->getItem($idlink); ?>">
                                <img class="uk-border-rounded" src="//wow.zamimg.com/images/wow/icons/large/<?= $this->shop_model->getIcon($idlink) ?>.jpg" />
                            </a>
                        </div>
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i> <?=$this->lang->line('store_item_name');?>: <?= $this->shop_model->getName($idlink); ?></p>
                    </div>
                    <div class="uk-margin uk-text-center">
                        <p><i class="fa fa-list-ul" aria-hidden="true"></i> <?=$this->lang->line('store_select_character');?>:</p>
                        <div class="uk-inline">
                            <div class="uk-form-controls">
                                <select class="uk-select uk-form-width-medium uk-form-small" name="charSelects">
                                    <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                                        $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                                    ?>
                                        <?php foreach($this->m_characters->getGeneralCharactersSpecifyAcc($multiRealm ,$this->session->userdata('fx_sess_id'))->result() as $listchar) { ?>
                                            <option value="<?= $charsMultiRealm->realmID ?>|<?= $listchar->guid ?>"><?= $listchar->name ?> - <?= $this->m_general->getRealmName($charsMultiRealm->realmID); ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin uk-text-center">
                        <p><i class="fa fa-money" aria-hidden="true"></i> <?=$this->lang->line('store_item_price');?>:</p>
                        <div class="uk-inline">
                            <h4>
                                <?php if($_GET['tp'] == "dp"): ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                <?php else: ?>
                                    <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                <?php endif; ?>
                                <span class="uk-badge"><?= $this->shop_model->getPriceType($idlink, $_GET['tp']); ?></span>
                            </h4>
                        </div>
                    </div>
                    <div class="uk-margin uk-text-center">
                        <?php if ($_GET['tp'] == "dp")
                            $qqs = $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id'));
                        else
                            $qqs = $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id'));
                        ?>
                        <?php if ($qqs >= $this->shop_model->getPriceType($idlink, $_GET['tp'])) { ?>
                            <button type="submit" name="buyNowGetItem" class="button" title="<?= $this->lang->line('button_buy'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?= $this->lang->line('button_buy'); ?></button>
                        <?php } else { ?>
                            <div class="uk-alert-warning" uk-alert><p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?=$this->lang->line('points_insuff');?></p></div>
                        <?php } ?>
                        <!--<button class="button" title=""><i class="fa fa-gift" aria-hidden="true"></i> Gift</button>-->
                    </div>
                </form>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>

<?php if (isset($_POST['buyNowGetItem'])) {
    $charselect = $_POST['charSelects'];

    $method = $_GET['tp'];
    $price = $this->shop_model->getPriceType($idlink, $_GET['tp']);
    $result_explode = explode('|', $charselect);

    $soapUser = $this->m_data->getRealm($result_explode[0])->row_array()['console_username'];
    $soapPass = $this->m_data->getRealm($result_explode[0])->row_array()['console_password'];
    $soapHost = $this->m_data->getRealm($result_explode[0])->row_array()['hostname'];
    $soapPort = $this->m_data->getRealm($result_explode[0])->row_array()['console_port'];
    $soap_uri = $this->m_data->getRealm($result_explode[0])->row_array()['emulator'];

    $this->shop_model->insertHistory(
        $idlink, 
        $this->shop_model->getItem($idlink), 
        $this->session->userdata('fx_sess_id'), 
        $result_explode[1], 
        $method,
        $price,
        $soapUser, 
        $soapPass, 
        $soapHost, 
        $soapPort, 
        $soap_uri,
        $multiRealm);
} ?>
