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
                    <h4 class="page-title"><i class="fa fa-commenting fa-fw"></i><?= $this->lang->line('admin_forums'); ?> - <?= $this->lang->line('admin_manege_forums'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createfor-modal">
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
                                        <th><?= $this->lang->line('form_title'); ?></th>
                                        <th class="text-center"><?= $this->lang->line('column_action'); ?></th>
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
                        <h4 class="modal-title"><i class="fa fa-comments-o fa-fw"></i> <?= $this->lang->line('form_create_forums'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_forum_title'); ?></label>
                                <input name="forum_name" type="text" class="form-control" placeholder="<?= $this->lang->line('form_forum_title'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_forum_description'); ?></label>
                                <input name="forum_description" type="text" class="form-control" placeholder="<?= $this->lang->line('form_forum_description'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_forum_icon_name'); ?></label>
                                <input name="forum_icon" type="text" class="form-control" placeholder="<?= $this->lang->line('placeholder_forum_icon'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_type'); ?></label>
                                <select class="form-control" name="forum_type">
                                    <option value="1"><?= $this->lang->line('option_everyone'); ?></option>
                                    <option value="2"><?= $this->lang->line('option_staff'); ?></option>
                                    <option value="3"><?= $this->lang->line('option_all'); ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_category'); ?></label>
                                <select class="form-control" name="forum_cate">
                                    <?php foreach($this->admin_model->getForumCategoryList()->result() as $categ) { ?>
                                        <option value="<?= $categ->id ?>"><?= $categ->categoryName ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><?= $this->lang->line('button_close'); ?></button>
                                <button type="submit" name="button_createForum" class="btn btn-success waves-effect waves-light"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_create'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
