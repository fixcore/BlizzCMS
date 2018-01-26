<?php if (isset($_POST['button_delChan'])) {
    $this->admin_model->delChangelog($_POST['button_delChan']);
} ?>

<?php if(isset($_POST['button_createNew'])) {
    $desc = $_POST['chang_description'];
    $title  = $_POST['chang_title'];

    $this->admin_model->insertChangelog($title, $desc);
} ?>

    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-mouse-pointer fa-fw"></i><?= $this->lang->line('admin_website'); ?> - <?= $this->lang->line('panel_admin_changelogs_list'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#createlog-modal">
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
                                        <th><?= $this->lang->line('column_date'); ?></th>
                                        <th class="text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->admin_model->getChangelogs() as $changelogs) { ?>
                                        <tr>
                                            <td><?= $changelogs->title ?></td>
                                            <td><?= $changelogs->date ?></td>
                                            <td class="text-center">
                                                <a href="">
                                                    <button class="btn btn-warning btn-circle btn-lg m-r-5"><i class="fa fa-pencil-square-o fa-fw" type="submit"></i></button>
                                                </a>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="btn btn-danger btn-circle btn-lg m-r-5" name="button_delChan" value="<?= $changelogs->id ?>" type="submit"><i class="fa fa-trash fa-fw"></i></button>
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

        <div id="createlog-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-list-alt fa-fw"></i> <?= $this->lang->line('form_create_changelog'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_changelog_title'); ?></label>
                                <input name="chang_title" type="text" class="form-control" placeholder="<?= $this->lang->line('form_changelog_title'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_description'); ?></label>
                                <textarea required="" name="chang_description" id="adminPanelCK" rows="10" cols="80"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><?= $this->lang->line('button_close'); ?></button>
                                <button type="submit" name="button_createNew" class="btn btn-success waves-effect waves-light"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_create'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            CKEDITOR.replace('adminPanelCK');
        </script>
