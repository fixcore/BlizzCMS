<?php if(isset($_POST['button_removeADM'])) {
    $this->admin_model->getRemoveADMRank($idlink);
} ?>

<?php if(isset($_POST['button_addADM'])) {
    $this->admin_model->getADDADMRank($idlink);
} ?>

<?php if(isset($_POST['action_ban'])) {
    $reason = $_POST['action_reason'];
    $this->admin_model->insertBanAcc($idlink, $reason);
}?>

<?php if(isset($_POST['button_unban'])) {
    $this->admin_model->inserUnBanAcc($idlink);
} ?>

<?php if(isset($_POST['button_RemoveRankACCWeb'])) {
    $this->admin_model->removeRankAcc($idlink);
} ?>

<?php if(isset($_POST['button_AddRankACCWeb'])) {
    $gmlevel = $_POST['gmlevel'];
    $this->admin_model->insertRankAcc($idlink, $gmlevel);
} ?>

    <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-user fa-fw"></i><?= $this->lang->line('panel_admin_user_manage'); ?> - <?= $this->m_data->getUsernameID($idlink) ?></h4>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <?php if($this->admin_model->getBanSpecify($idlink)->num_rows()) { ?>
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-heading"> <?= $this->lang->line('panel_admin_unban_account'); ?>
                                <div class="pull-right">
                                    <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                                </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post">
                                        <button name="button_unban" class="btn btn-block btn-outline btn-success"><i class="fa fa-check-circle fa-fw"></i><?= $this->lang->line('button_unban'); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <?= $this->lang->line('panel_admin_ban_account'); ?>
                                <div class="pull-right">
                                    <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                                </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form method="post" action="">
                                        <div class="form-group has-error">
                                            <input type="text" id="state-danger" required name="action_reason" class="form-control" placeholder="<?= $this->lang->line('panel_admin_reason'); ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="action_ban" class="btn btn-block btn-outline btn-danger"><i class="fa fa-ban fa-fw"></i><?= $this->lang->line('button_ban'); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                <?php } ?>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_rank_account'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <?php if($this->m_general->getGmSpecify($idlink)->num_rows()) { ?>
                                        <div class="col-md-12">
                                            <button type="submit" name="button_RemoveRankACCWeb" class="btn btn-block btn-outline btn-success"><i class="fa fa-user-times fa-fw"></i><?= $this->lang->line('button_re_grant_account'); ?></button>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form-group has-success">
                                            <input type="number" min="1" required name="gmlevel" class="form-control" placeholder="<?= $this->lang->line('panel_admin_gmlevel'); ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="button_AddRankACCWeb" class="btn btn-block btn-outline btn-success"><i class="fa fa-user-plus fa-fw"></i><?= $this->lang->line('button_grant_account'); ?></button>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <?= $this->lang->line('panel_admin_web_rank'); ?>
                            <div class="pull-right">
                                <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <?php if($this->m_general->getPermissions($idlink) == 1) { ?>
                                        <div class="col-md-12">
                                            <button name="button_removeADM" class="btn btn-block btn-outline btn-warning"><i class="fa fa-user-times fa-fw"></i><?= $this->lang->line('button_re_grant_web_acc'); ?></button>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-12">
                                            <button name="button_addADM" class="btn btn-block btn-outline btn-warning"><i class="fa fa-user-plus fa-fw"></i><?= $this->lang->line('button_grant_web_acc'); ?></button>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-user-circle-o fa-fw"></i><?= $this->lang->line('panel_admin_general_info'); ?></div>
                        <div class="panel-wrapper collapse in">
                            <table class="table color-table info-table table-hover">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('form_first_name'); ?></th>
                                        <th><?= $this->lang->line('form_last_name'); ?></th>
                                        <th><?= $this->lang->line('form_username'); ?></th>
                                        <th><?= $this->lang->line('form_email'); ?></th>
                                        <th><?= $this->lang->line('form_security_question'); ?></th>
                                        <th><?= $this->lang->line('form_secret_answer'); ?></th>
                                        <th><?= $this->lang->line('form_birth_date'); ?></th>
                                        <th><?= $this->lang->line('panel_member'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->m_general->getUserInfoGeneral($idlink)->result() as $ginfo) { ?>
                                        <tr>
                                            <td><?= $ginfo->name ?></td>
                                            <td><?= $ginfo->surname ?></td>
                                            <td><?= $ginfo->username ?></td>
                                            <td><?= $ginfo->email ?></td>
                                            <td><?= $this->m_general->getSpecifyQuestion($ginfo->question); ?></td>
                                            <td><?= $ginfo->answer ?></td>
                                            <td><?= $ginfo->year.'-'.$ginfo->month.'-'.$ginfo->day ?></td>
                                            <td><?= date('Y-m-d', $ginfo->date); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php foreach ($this->m_data->getRealms()->result() as $charsMultiRealm) { 
                    $multiRealm = $this->m_data->realmConnection($charsMultiRealm->username, $charsMultiRealm->password, $charsMultiRealm->hostname, $charsMultiRealm->char_database);
                ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-users fa-fw"></i><?= $this->lang->line('panel_chars_list'); ?> - <?= $this->m_general->getRealmName($charsMultiRealm->id); ?></div>
                        <div class="panel-wrapper collapse in">
                            <table class="table color-table info-table table-hover">
                                <thead>
                                    <tr>
                                        <th>Guid</th>
                                        <th><?= $this->lang->line('column_name'); ?></th>
                                        <th><?= $this->lang->line('column_race'); ?></th>
                                        <th><?= $this->lang->line('column_class'); ?></th>
                                        <th><?= $this->lang->line('column_level'); ?></th>
                                        <th><?= $this->lang->line('column_money'); ?></th>
                                        <th><?= $this->lang->line('column_total_kills'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($multiRealm, $idlink)->result() as $chars) { ?>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid ?>/<?= $charsMultiRealm->id ?>"><?= $chars->guid ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->name ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $this->m_general->getRaceName($chars->race); ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $this->m_general->getNameClass($chars->class); ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->level ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->money ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/managecharacter/<?= $chars->guid; ?>/<?= $charsMultiRealm->id ?>"><?= $chars->totalKills ?></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <h3><i class="fa fa-list fa-fw"></i><?= $this->lang->line('panel_admin_annotations'); ?></h3>
                                <ul class="list-icons">
                                    <?php foreach($this->admin_model->getAnnotationsSpecify($idlink)->result() as $annotations) { ?>
                                        <li><i class="fa fa-caret-right text-text-primary"></i><?= $annotations->annotation ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <h3><i class="fa fa-list-alt fa-fw"></i><?= $this->lang->line('panel_admin_mov_forum'); ?></h3>
                                <ul class="list-icons">
                                    <li><i class="fa fa-caret-right text-primary"></i>forum actions</li>
                                    <li><i class="fa fa-caret-right text-primary"></i>forum actions</li>
                                    <li><i class="fa fa-caret-right text-primary"></i>forum actions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <h3><i class="fa fa-commenting-o fa-fw"></i><?= $this->lang->line('panel_admin_last_comments'); ?></h3>
                                <ul class="list-icons">
                                    <li><i class="fa fa-caret-right text-primary"></i>comments actions</li>
                                    <li><i class="fa fa-caret-right text-primary"></i>comments actions</li>
                                    <li><i class="fa fa-caret-right text-primary"></i>comments actions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <script>
            CKEDITOR.replace('adminPanelCK');
        </script>
