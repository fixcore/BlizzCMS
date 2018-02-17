    <header id="top-head">
        <div class="uk-background-secondary" data-uk-parallax="background: #666666,black;">
            <div class="custom-parallax-header uk-background-norepeat uk-background-cover uk-background-center uk-background-image@s uk-section uk-section-large uk-flex uk-flex-middle" uk-parallax="bgx: 0,-60" uk-height viewport="offset-top: false">
                <div class="uk-width-1-1">
                    <div class="uk-container uk-container-large">
                        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-width-1-1@m">
                                <div class="uk-grid-item-match">
                                    <div>
                                        <h3 class="uk-margin-small uk-text-uppercase" style="color: #fff;"><span uk-icon="icon: cart; ratio: 1.7"></span> <?= $this->lang->line('store_welcome'); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-medium"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-3-5@l">
                <div>
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
                                        $(function() {
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
            </div>
            <div class="uk-width-2-5@l">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-3-5"></div>
                    <div class="uk-width-2-5">
                        <?php if ($this->m_data->isLogged()) { ?>
                            <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                            <span class="uk-badge"><?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?></span>
                            <span style="display:inline-block; width: 5px;"></span>
                            <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                            <span class="uk-badge"><?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <?php if(isset($_GET['complete'])): ?>
                    <div class="uk-alert-success" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?=$this->lang->line('store_success');?></p>
                    </div>
                <?php endif; ?>
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
                                <td class="uk-text-center"><a rel="item=<?= $itemsG->itemid ?>" class="uk-button uk-button-text"><?= $itemsG->name ?></a></td>
                                <td class="uk-text-center" style="color: #fff;">
                                    <?php if(!is_null($itemsG->price_vp) && !empty($itemsG->price_vp) && $itemsG->price_vp != '0') { ?>
                                        <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=vp" class="uk-button uk-button-link">
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/vp.jpg'); ?>" title="<?=$this->lang->line('panel_vp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                        </a>
                                        <span class="uk-badge"><?= $itemsG->price_vp ?></span>
                                        <span style="display:inline-block; width: 5px;"></span>
                                    <?php } ?>
                                    <?php if(!is_null($itemsG->price_dp) && !empty($itemsG->price_dp) && $itemsG->price_dp != '0') { ?>
                                        <a href="<?= base_url(); ?>cart/<?= $itemsG->id; ?>?tp=dp" class="uk-button uk-button-link">
                                            <img class="uk-border-circle" src="<?= base_url('assets/images/dp.jpg'); ?>" title="<?=$this->lang->line('panel_dp');?>" width="30px" height="30px" uk-tooltip="pos: bottom">
                                        </a>
                                        <span class="uk-badge"><?= $itemsG->price_dp ?></span>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
