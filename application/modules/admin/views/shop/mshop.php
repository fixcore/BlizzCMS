<?php if (isset($_POST['button_delShopItm'])) {
$this->admin_model->delShopItm($_POST['button_delShopItm']);
} ?>
<!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><i class="fa fa-list fa-fw"></i><?= $this->lang->line('shop_list'); ?></h3>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Itemid</th>
                                            <th>Name</th>
                                            <th>Price DP</th>
                                            <th>Price VP</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($this->admin_model->getShopAll()->result() as $shopall) { ?>
                                        <tr>
                                            <td><?= $shopall->itemid ?></td>
                                            <td><?= $shopall->name ?></td>
                                            <td><?= $shopall->price_dp ?></td>
                                            <td><?= $shopall->price_vp ?></td>
                                            <td>
                                                <form action="" method="post" accept-charset="utf-8">
                                                    <button class="btn btn-block btn-danger" name="button_delShopItm" value="<?= $shopall->id ?>" type="submit"><i class="fa fa-eraser fa-fw"></i><?= $this->lang->line('button_delete'); ?></button>
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