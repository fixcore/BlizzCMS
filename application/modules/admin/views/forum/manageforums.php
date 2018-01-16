<?php if(isset($_POST['button_deleteForum'])) {
    $this->admin_model->deleteForum($_POST['button_deleteForum']);
} ?>

<?php if(isset($_POST['button_createForum'])) {
    $name = $_POST['forum_name'];
    $desc = $_POST['forum_description'];
    $icon = $_POST['forum_icon'];
    $type = $_POST['forum_type'];
    $cate = $_POST['forum_cate'];

    $this->admin_model->insertForum($name, $cate, $desc, $icon, $type);
} ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-commenting fa-fw"></i><?= $this->lang->line('adm_forums'); ?> - <?= $this->lang->line('forum_forumMan'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createfor-modal">
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
                                    <?php foreach($this->admin_model->getForumForumList()->result() as $list) { ?>
                                        <tr>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" disabled class="form-control" value="<?= $list->name; ?>">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="">
                                                    <button class="btn btn-warning btn-circle btn-lg m-r-5"><i class="fa fa-pencil-square-o fa-fw" type="submit"></i></button>
                                                </a>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="btn btn-danger btn-circle btn-lg m-r-5" name="button_deleteForum" value="<?= $list->id ?>" type="submit"><i class="fa fa-trash fa-fw"></i></button>
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

        <div id="createfor-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-comments-o fa-fw"></i> <?= $this->lang->line('forum_forumCrea'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label">Title of the Forum</label>
                                <input name="forum_name" type="text" class="form-control" placeholder="Title of the Forum" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Enter a brief description of the forum</label>
                                <input name="forum_description" type="text" class="form-control" placeholder="Enter a brief description of the forum" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Icon Name</label>
                                <input name="forum_icon" type="text" class="form-control" placeholder="IconName.jpg or IconName.png" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Type</label>
                                <select class="form-control" name="forum_type">
                                    <option value="1">Everyone</option>
                                    <option value="2">STAFF</option>
                                    <option value="3">STAFF - Everyone</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select class="form-control" name="forum_cate">
                                    <?php foreach($this->admin_model->getForumCategoryList()->result() as $categ) { ?>
                                        <option value="<?= $categ->id ?>"><?= $categ->categoryName ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" name="button_createForum" class="btn btn-success waves-effect waves-light"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
