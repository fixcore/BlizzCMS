<?php if (isset($_POST['button_changeLevel'])) {
    $level = $_POST['newLevel'];
    $this->admin_model->insertChangeLevelChar($idlink, $level, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_renamechar'])) {
    $newname = $_POST['newName'];
    $this->admin_model->insertCharRename($idlink, $newname, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_unban'])) {
    $this->admin_model->insertUnbanChar($idlink, $multiRealm, $idrealm);
}?>

<?php if(isset($_POST['button_banchar'])) {
    $reason = $_POST['banchar_reason'];
    $this->admin_model->insertBanChar($idlink, $reason, $multiRealm, $idrealm);
}?>

<?php if(isset($_POST['button_customize'])) {
    $this->admin_model->insertCustomizeChar($idlink, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_changerace'])) {
    $this->admin_model->insertChangeRaceChar($idlink, $multiRealm, $idrealm);
} ?>

<?php if(isset($_POST['button_changefaction'])) {
    $this->admin_model->insertChangeFactionChar($idlink, $multiRealm, $idrealm);
} ?>

    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-user fa-fw"></i><?= $this->lang->line('panel_admin_char_manage'); ?> - 
                        <?= $this->m_general->getNameCharacterSpecifyGuid($multiRealm, $idlink); ?></h4>
                </div>
            </div>
            <?php if(isset($_GET['char'])) { ?>
                <div class="alert alert-danger"><?= $this->lang->line('status_is_online'); ?></div>
            <?php } ?>

            <?php if(isset($_GET['name'])) { ?>
                <div class="alert alert-danger"><?= $this->lang->line('status_name_exist'); ?></div>
            <?php } ?>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_change_level'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body has-success">
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <input required name="newLevel" type="number" min="1" max="<?= $this->m_general->getMaxLevel(); ?>" class="form-control" placeholder="<?= $this->lang->line('column_level'); ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <button name="button_changeLevel" class="btn btn-block btn-outline btn-success"><i class="fa fa-refresh fa-fw"></i><?= $this->lang->line('button_change_level'); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_rename'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <div class="form-group has-warning">
                                        <input required name="newName" type="text" class="form-control" placeholder="<?= $this->lang->line('panel_admin_rename'); ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <button name="button_renamechar" class="btn btn-block btn-outline btn-warning"><i class="fa fa-pencil-square-o fa-fw"></i><?= $this->lang->line('panel_admin_rename'); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <?php if($this->m_general->getCharBanSpecifyGuid($idlink, $multiRealm)->num_rows()) { ?>
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <?= $this->lang->line('panel_admin_unban_char'); ?>
                                <div class="pull-right">
                                    <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                                </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post" accept-charset="utf-8">
                                        <button name="button_unban" class="btn btn-block btn-outline btn-success"><i class="fa fa-check-circle fa-fw"></i><?= $this->lang->line('button_unban'); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                <?php } else {?>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <?= $this->lang->line('panel_admin_ban_char'); ?>
                                <div class="pull-right">
                                    <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                                </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post" accept-charset="utf-8">
                                        <div class="form-group has-error">
                                            <input type="text" id="state-danger" required="" name="banchar_reason" class="form-control" placeholder="<?= $this->lang->line('panel_admin_reason'); ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="button_banchar" class="btn btn-block btn-outline btn-danger"><i class="fa fa-ban fa-fw"></i><?= $this->lang->line('button_ban'); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                <?php } ?>
            </div>
            <div class="row">
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_customize'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <button name="button_customize" class="btn btn-block btn-outline btn-info"><i class="fa fa-cog fa-fw"></i><?= $this->lang->line('panel_admin_customize'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_change_race'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <button name="button_changerace" class="btn btn-block btn-outline btn-info"><i class="fa fa-cog fa-fw"></i><?= $this->lang->line('panel_admin_change_race'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_change_faction'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <button name="button_changefaction" class="btn btn-block btn-outline btn-info"><i class="fa fa-cog fa-fw"></i><?= $this->lang->line('panel_admin_change_faction'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="well">
                        <h4><i class="fa fa-list fa-fw"></i><?= $this->lang->line('panel_admin_annotations'); ?></h4>
                        <ul class="list-icons">
                            <?php foreach($this->admin_model->getAnnotationsSpecifyChar($idlink, $idrealm)->result() as $charlistannotation) { ?>
                                <li><i class="fa fa-caret-right text-primary"></i><?= $charlistannotation->annotation ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- End Right sidebar -->
        </div>
        <!-- /.container-fluid -->
