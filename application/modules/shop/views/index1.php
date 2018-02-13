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
                        <div class="uk-grid uk-grid-small uk-child-width-1-4 uk-flex-center uk-text-center">
                            <?php foreach($this->shop_model->getShopGeneral($idlink)->result() as $itemsG) { ?>
                                <div class="uk-child-width-expand uk-grid-collapse uk-grid uk-grid-match uk-grid-stack">
                                    <div class="uk-inline-clip uk-transition-toggle uk-light"  tabindex="0">
                                        <img src="<?= base_url('assets/images/store/'); ?><?= $itemsG->image ?>" class="uk-border-rounded uk-transition-scale-up uk-transition-opaque" width="250" height="250" alt="">
                                        <div class="uk-overlay uk-light uk-position-bottom">
                                            <p class="uk-text-center uk-text-break"><a rel="item=<?= $itemsG->itemid ?>"><?= $itemsG->name ?></a></p>
                                            <p class="uk-text-center">
                                                <?php if(!is_null($itemsG->price_vp) && !empty($itemsG->price_vp) && $itemsG->price_vp != '0') { ?>
                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=vp">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                        <span class="uk-badge"><?= $itemsG->price_vp ?></span>
                                                    </a>
                                                    <span style="display:inline-block; width: 10px;"></span>
                                                <?php } ?>
                                                    <?php if(!is_null($itemsG->price_dp) && !empty($itemsG->price_dp) && $itemsG->price_dp != '0') { ?>
                                                    <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=dp">
                                                        <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                                        <span class="uk-badge"><?= $itemsG->price_dp ?></span>
                                                    </a>
                                                <?php } ?>
                                            </p>
                                        </div>
                                        <span style="display:block; height: 10px;"></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
