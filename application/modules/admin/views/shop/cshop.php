<?php if (isset($_POST['button_saveNewIteStore'])) {
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
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> <?= $this->lang->line('shop_create'); ?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><?= $this->lang->line('store_productName'); ?></label>
                                                        <input type="text" name="itemname" required="" class="form-control" placeholder="<?= $this->lang->line('store_productName'); ?>"> </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><?= $this->lang->line('expr_category');?></label>
                                                        <select class="form-control" name="categorySelect" data-placeholder="<?= $this->lang->line('expr_category');?>" tabindex="1">
                                                            <?php foreach ($this->admin_model->getCategoryStore()->result() as $groupsStore) { ?>
                                                            <option value="<?= $groupsStore->id ?>"><?= $groupsStore->name ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><?=$this->lang->line('type');?></label>
                                                        <div class="radio-list">
                                                            
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input required="" type="radio" checked="yes" name="type_shop" id="item1" value="1">
                                                                    <label for="radio1"><?=$this->lang->line('item');?></label>
                                                                </div>
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><?=$this->lang->line('price');?> DP</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                                            <input type="number" required="" class="form-control" name="priceDP" placeholder="0" value="0"> </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><?=$this->lang->line('price');?> VP</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                                            <input type="number" required="" class="form-control" name="priceVP" placeholder="0" value="0"> </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>ITEM ID</label>
                                                        <input name="itemID" type="text" required="" class="form-control"> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>ICON NAME</label>
                                                        <input type="text" required="" name="iconName" placeholder="inv_belt_45" value="inv_belt_45" class="form-control"> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>IMAGE FILE NAME</label>
                                                        <input name="imageName" required="" type="text" placeholder="image.jpg" value="image.jpg" class="form-control"> </div>
                                                </div>
                                            </div>
                                            <hr> </div>
                                        <div class="form-actions m-t-40">
                                            <button type="submit" name="button_saveNewIteStore" class="btn btn-success"> <i class="fa fa-check"></i> <?=$this->lang->line('button_save');?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->