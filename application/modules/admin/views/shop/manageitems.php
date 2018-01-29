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

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-shopping-cart fa-fw"></i><?= $this->lang->line('admin_store'); ?> - <?= $this->lang->line('panel_admin_item_list'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createite-modal">
                        <button class="waves-effect waves-light btn btn-success pull-right m-l-20"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_create'); ?></button>
                    </a>
                </div>
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table id="myTable" class="table color-table info-table table-striped">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('column_id'); ?></th>
                                        <th><?= $this->lang->line('column_name'); ?></th>
                                        <th><?= $this->lang->line('store_item_price'); ?> DP</th>
                                        <th><?= $this->lang->line('store_item_price'); ?> VP</th>
                                        <th class="text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->admin_model->getShopAll()->result() as $shopall) { ?>
                                        <tr>
                                            <td><?= $shopall->itemid ?></td>
                                            <td><?= $shopall->name ?></td>
                                            <td><?= $shopall->price_dp ?></td>
                                            <td><?= $shopall->price_vp ?></td>
                                            <td class="text-center">
                                                <a href="">
                                                    <button class="btn btn-warning btn-circle btn-lg m-r-5"><i class="fa fa-pencil-square-o fa-fw" type="submit"></i></button>
                                                </a>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="btn btn-danger btn-circle btn-lg m-r-5" name="button_deleteItem" value="<?= $shopall->id ?>" type="submit"><i class="fa fa-trash fa-fw"></i></button>
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <div id="createite-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-cube fa-fw"></i> <?= $this->lang->line('form_create_item'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_store_item_name'); ?></label>
                                <input name="itemname" type="text" class="form-control" placeholder="<?= $this->lang->line('form_store_item_name'); ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?= $this->lang->line('form_category'); ?></label>
                                <select class="form-control" name="categorySelect">
                                    <?php foreach ($this->admin_model->getCategoryStore()->result() as $groupsStore) { ?>
                                        <option value="<?= $groupsStore->id ?>"><?= $groupsStore->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?=$this->lang->line('form_type');?></label>
                                <div class="radio-list">
                                    <label class="radio-inline p-0">
                                        <div class="radio radio-info">
                                            <input required="" type="radio" checked="yes" name="type_shop" id="item1" value="1">
                                            <label for="radio1"><?=$this->lang->line('option_item');?></label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?=$this->lang->line('store_item_price');?> DP</label>
                                <input name="priceDP" type="text" class="form-control" placeholder="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?=$this->lang->line('store_item_price');?> VP</label>
                                <input name="priceVP" type="text" class="form-control" placeholder="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?=$this->lang->line('form_store_item_id');?></label>
                                <input name="itemID" type="text" class="form-control" placeholder="Item Id" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label"><?=$this->lang->line('form_forum_icon_name');?></label>
                                <input name="iconName" type="text" class="form-control" placeholder="inv_belt_45" value="inv_belt_45" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?=$this->lang->line('form_store_image_name');?></label>
                                <input name="imageName" type="text" class="form-control" placeholder="image.jpg" value="image.jpg">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><?=$this->lang->line('button_close');?></button>
                                <button type="submit" name="button_createItem" class="btn btn-success waves-effect waves-light"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_create'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
