<?php if (isset($_POST['button_delNew'])) {
    $this->admin_model->delSpecifyNew($_POST['button_delNew']);
} ?>

<?php if(isset($_POST['button_createNew'])) {
    $title = $_POST['new_title'];
    $desc  = $_POST['new_description'];
    $type  = $_POST['new_destac'];
    $image = $_FILES["new_imageup"];

    if ($image['type'] == 'image/jpeg')
    {
        $random = $this->m_data->randomUTF();
        $name_new = sha1($image['name'].$random).'.jpg';

        move_uploaded_file($image["tmp_name"], "./assets/images/news/" . $name_new);

        $this->admin_model->createNewADM($title, $name_new, $desc, $type);
    }
    else
        echo '<div class="alert alert-danger">'.$this->lang->line('image_upload_error').'. </div>';
} ?>

    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-mouse-pointer fa-fw"></i><?= $this->lang->line('admin_website'); ?> - <?= $this->lang->line('panel_admin_news_list'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" data-toggle="modal" data-target="#create-modal">
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
                                    <?php foreach($this->admin_model->getAdminNewsList()->result() as $news) { ?>
                                        <tr>
                                            <td><?= $news->title ?></td>
                                            <td><?= $news->date ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url(); ?>admin/editnews/<?= $news->id ?>">
                                                    <button class="btn btn-warning btn-circle btn-lg m-r-5"><i class="fa fa-pencil-square-o fa-fw" type="submit"></i></button>
                                                </a>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="btn btn-danger btn-circle btn-lg m-r-5" name="button_delNew" value="<?= $news->id ?>" type="submit"><i class="fa fa-trash fa-fw"></i></button>
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

        <div id="create-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="fa fa-newspaper-o fa-fw"></i> <?= $this->lang->line('form_create_news'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_news_title'); ?></label>
                                <input name="new_title" type="text" class="form-control" placeholder="<?= $this->lang->line('form_news_title'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_description'); ?></label>
                                <textarea required="" name="new_description" id="adminPanelCK" rows="10" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_highl'); ?></label>
                                <select class="form-control" name="new_destac">
                                    <option value="1"><?= $this->lang->line('option_no'); ?></option>
                                    <option value="2"><?= $this->lang->line('option_yes'); ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?= $this->lang->line('form_upload_file'); ?></label>
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <span class="fileinput-filename">
                                            <input type="file" required name="new_imageup">
                                        </span>
                                    </div>
                                </div>
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
