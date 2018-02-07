<?php if (isset($_POST['button_deleteItem'])) {
    $this->admin_model->delShopItm($_POST['button_deleteItem']);
} ?>

<?php if (isset($_POST['button_createItem'])) {
    $itemname   = $_POST['itemname'];
    $category   = $_POST['categorySelect'];
    $type       = $_POST['type_shop'];
    $pricedp    = $_POST['priceDP'];
    $pricevp    = $_POST['priceVP'];
    $itemid     = $_POST['itemID'];
    $iconname   = $_POST['iconName'];
    $imagename  = $_POST['imageName'];

    $this->admin_model->insertShop($itemid, $type, $itemname, $pricedp, $pricevp, $iconname, $category, $imagename);
} ?>

    <div class="content-padder content-background">
        <div class="uk-section-xsmall uk-section-default header">
            <div class="uk-container uk-container-large">
                <div class="uk-grid-small uk-width-1-1" uk-grid>
                    <div class="uk-width-3-4@s">
                        <h4><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?= $this->lang->line('admin_store'); ?> - <?= $this->lang->line('admin_manage_items'); ?></h4>
                    </div>
                    <div class="uk-width-1-4@s">
                        <a href="" class="" uk-toggle="target: #newItem">
                            <button class="uk-button uk-button-secondary uk-width-1-1"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@xl">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header uk-card-primary uk-text-center uk-text-uppercase"><i class="fa fa-cube" aria-hidden="true"></i> <?= $this->lang->line('admin_manage_items'); ?></div>
                            <div class="uk-card-body">
                                <table id="myTable" class="uk-table uk-table-justify uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th><?= $this->lang->line('column_id'); ?></th>
                                            <th><?= $this->lang->line('column_name'); ?></th>
                                            <th><?= $this->lang->line('store_item_price'); ?> DP</th>
                                            <th><?= $this->lang->line('store_item_price'); ?> VP</th>
                                            <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($this->admin_model->getShopAll()->result() as $shopall) { ?>
                                            <tr>
                                                <td><?= $shopall->itemid ?></td>
                                                <td><?= $shopall->name ?></td>
                                                <td><?= $shopall->price_dp ?></td>
                                                <td><?= $shopall->price_vp ?></td>
                                                <td class="uk-text-center" uk-margin>
                                                    <a href="#" class="uk-button uk-button-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <span class="" style="display:inline-block; width: 5px;"></span>
                                                    <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                        <button class="uk-button uk-button-danger" name="button_deleteItem" value="<?= $shopall->id ?>" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newItem" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-cube" aria-hidden="true"></i> <?= $this->lang->line('form_create_item'); ?></h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_store_item_name'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="itemname" required type="text" placeholder="<?= $this->lang->line('form_store_item_name'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_category'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="categorySelect">
                                <?php foreach ($this->admin_model->getCategoryStore()->result() as $groupsStore) { ?>
                                    <option value="<?= $groupsStore->id ?>"><?= $groupsStore->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('form_type');?></label>
                        <div class="uk-form-controls">
                            <label><input class="uk-radio" type="radio" name="type_shop" id="item1" value="1" checked> <?=$this->lang->line('option_item');?></label>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('store_item_price');?> DP</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="priceDP" type="text" placeholder="0" value="0" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('store_item_price');?> VP</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="priceVP" type="text" placeholder="0" value="0" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('form_store_item_id');?></label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="itemID" type="text" placeholder="Item Id" required>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('form_forum_icon_name');?></label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" name="iconName" type="text" placeholder="inv_belt_45" value="inv_belt_45" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?=$this->lang->line('form_store_image_name');?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <input class="uk-input" name="imageName" type="text" placeholder="image.jpg" value="image.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_createItem"><?= $this->lang->line('button_create'); ?></button>
                </div>
            </form>
        </div>
    </div>
