<?php if(isset($_POST['button_deleteCategory'])) {
    $this->admin_model->deleteCategory($_POST['button_deleteCategory']);
} ?>

<?php if(isset($_POST['button_createCategory'])) {
    $name = $_POST['cate_name'];

    $this->admin_model->insertCategory($name);
} ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-commenting fa-fw"></i><?= $this->lang->line('adm_forums'); ?> - <?= $this->lang->line('forum_categoryMan'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createcat-modal">
                        <button class="waves-effect waves-light btn btn-success pull-right m-l-20"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
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
                                        <th>Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->admin_model->getForumCategoryList()->result() as $list) { ?>
                                        <tr>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" disabled class="form-control" value="<?= $list->categoryName; ?>">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="">
                                                    <button class="btn btn-warning btn-circle btn-lg m-r-5"><i class="fa fa-pencil-square-o fa-fw" type="submit"></i></button>
                                                </a>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="btn btn-danger btn-circle btn-lg m-r-5" name="button_deleteCategory" value="<?= $list->id ?>" type="submit"><i class="fa fa-trash fa-fw"></i></button>
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

        <div id="createcat-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-bookmark-o fa-fw"></i> <?= $this->lang->line('forum_categoryCrea'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label">Title of the Category</label>
                                <input name="cate_name" type="text" class="form-control" placeholder="Title of the Category" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" name="button_createCategory" class="btn btn-success waves-effect waves-light"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
