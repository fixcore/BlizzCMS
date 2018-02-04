    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title"></div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0"><i class="fa fa-pencil-square-o fa-fw"></i><?= $this->lang->line('news_manage'); ?> - <?= $this->admin_model->getGeneralNewsSpecifyName($idlink); ?></h3>
                        <p class="text-muted m-b-30 font-13"></p>
                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12"><?= $this->lang->line('form_news_title'); ?></label>
                                <div class="col-md-12">
                                    <input name="new_title" type="text" value="<?= $this->admin_model->getGeneralNewsSpecifyName($idlink); ?>" class="form-control" placeholder="<?= $this->lang->line('form_news_title'); ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"><?= $this->lang->line('form_description'); ?></label>
                                <div class="col-md-12">
                                    <textarea required="" name="new_description" id="adminPanelCK" rows="10" cols="80"><?= $this->admin_model->getGeneralNewsSpecifyDesc($idlink); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12"><?= $this->lang->line('form_highl'); ?></label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="new_destac">
                                        <option value="1"><?= $this->lang->line('option_no'); ?></option>
                                        <option value="2"><?= $this->lang->line('option_yes'); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12"><?= $this->lang->line('form_upload_file'); ?></label>
                                <div class="col-sm-12">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <span class="fileinput-filename">
                                                <input required type="file" name="new_imageup">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="button_updateNew" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-refresh fa-fw"></i><?= $this->lang->line('button_save'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- End Right sidebar -->
        </div>
        <!-- /.container-fluid -->
        <script>
            CKEDITOR.replace('adminPanelCK');
        </script>


<?php if(isset($_POST['button_updateNew'])) {
    $title = $_POST['new_title'];
    $desc  = $_POST['new_description'];
    $type  = $_POST['new_destac'];
    $image = $_FILES["new_imageup"];

    if ($image['type'] == 'image/jpeg')
    {
        $random = $this->m_data->randomUTF();
        $name_new = sha1($image['name'].$random).'.jpg';

        move_uploaded_file($image["tmp_name"], "./assets/images/news/" . $name_new);

        $this->admin_model->updateNewADM($idlink, $title, $name_new, $desc, $type);
    }
    else
        echo '<div class="alert alert-danger">'.$this->lang->line('image_upload_error').'. </div>';
} ?>
