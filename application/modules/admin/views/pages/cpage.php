<?php if(isset($_POST['button_createNew'])) {
    $desc = $_POST['page_description'];
    $title  = $_POST['page_title'];

    $this->admin_model->insertPage($title, $desc);

} ?>

<script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><i class="fa fa-file-text-o fa-fw"></i><?= $this->lang->line('adm_createPages'); ?></h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-md-12"><?= $this->lang->line('expr_title'); ?></label>
                                    <div class="col-md-12">
                                        <input name="page_title" type="text" class="form-control" placeholder="<?= $this->lang->line('expr_title'); ?>" required> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><?= $this->lang->line('new_desc'); ?></label>
                                    <div class="col-md-12">
                                        <textarea required="" name="page_description" id="adminPanelCK" rows="10" cols="80">
                                        </textarea>
                                    </div>
                                </div>

                                <button type="submit" name="button_createNew" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-pencil fa-fw"></i><?= $this->lang->line('button_crea'); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
<script>
    CKEDITOR.replace( 'adminPanelCK' );
</script>