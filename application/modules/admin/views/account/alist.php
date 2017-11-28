<?php if(isset($_POST['button_removeADM'])){
    $this->admin_model->getRemoveADMRank($idlink);
} ?>

<?php if(isset($_POST['button_addADM'])){
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

<?php if(isset($_POST['button_AddRankACCWeb'])){
    $gmlevel = $_POST['gmlevel'];
    $this->admin_model->insertRankAcc($idlink, $gmlevel);
} ?>
<script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12"></div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title"><?= $this->lang->line('user_manage'); ?> - <?= $this->m_data->getUsernameID($idlink) ?></h3>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                <?php if($this->admin_model->getBanSpecify($idlink)->num_rows() > 0) { ?>
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-heading"> <?= $this->lang->line('unban_acc'); ?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post">
                                        <button name="button_unban" class="btn btn-block btn-outline    btn-success"><?= $this->lang->line('unban'); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-sm-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading"> <?= $this->lang->line('ban_acc'); ?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form method="post" action="">
                                        <div class="form-group has-error">
                                            <input type="text" id="state-danger" required name="action_reason" class="form-control" placeholder="<?= $this->lang->line('reason'); ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="action_ban" class="btn btn-block btn-outline btn-danger"><?= $this->lang->line('ban'); ?></button>
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
                            <div class="panel-heading"> <?= $this->lang->line('rank_acc'); ?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                <form action="" method="post" accept-charset="utf-8">
                                    <?php if($this->m_general->getGmSpecify($idlink)->num_rows() > 0) { ?>
										<div class="col-md-12">
                                            <button type="submit" name="button_RemoveRankACCWeb" class="btn btn-block btn-outline btn-success"><?= $this->lang->line('re_gran_acc'); ?></button>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form-group has-success">
                                            <input type="number" min="1" required name="gmlevel" class="form-control" placeholder="<?= $this->lang->line('gmlevel'); ?>">
                                        </div>
										<div class="col-md-12">
                                            <button type="submit" name="button_AddRankACCWeb" class="btn btn-block btn-outline btn-success"><?= $this->lang->line('grant_acc'); ?></button>
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
                            <div class="panel-heading"> <?= $this->lang->line('web_rank'); ?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>  </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="" method="post" accept-charset="utf-8">
                                        <?php if($this->m_general->getPermissions($idlink) == 1) { ?>
										<div class="col-md-12">
                                            <button name="button_removeADM" class="btn btn-block btn-outline btn-warning"><?= $this->lang->line('reW_gran_acc'); ?></button>
                                        </div>
                                        <?php } else { ?>
										<div class="col-md-12">
                                            <button name="button_addADM" class="btn btn-block btn-outline btn-warning"><?= $this->lang->line('grantW_acc'); ?></button>
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
                            <div class="panel-heading"><?= $this->lang->line('general_info'); ?></div>
                            <div class="panel-wrapper collapse in">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Last name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Birth (Y-m-d)</th>
                                            <th>Registrarion Date</th>
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
                        <div class="panel panel-default">
                            <div class="panel-heading"><?= $this->lang->line('char_list'); ?></div>
                            <div class="panel-wrapper collapse in">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Guid</th>
                                            <th>Name</th>
                                            <th>Race</th>
                                            <th>Class</th>
                                            <th>Level</th>
                                            <th>Money</th>
                                            <th>TotalKills</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php foreach($this->m_general->getGeneralCharactersSpecifyAcc($idlink)->result() as $chars) { ?>
                                        <tr>
                                            <td align="center"><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid ?>"><?= $chars->guid ?></a></td>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid; ?>"><?= $chars->name ?></td></a>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid; ?>"><?= $this->m_general->getRaceName($chars->race); ?></td></a>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid; ?>"><?= $this->m_general->getNameClass($chars->class); ?></td></a>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid; ?>"><?= $chars->level ?></td></a>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid; ?>"><?= $chars->money ?></td></a>
                                            <td><a <?= base_url(); ?>admin/clist/href="<?= $chars->guid; ?>"><?= $chars->totalKills ?></td></a>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <h3><?= $this->lang->line('annotations'); ?></h3>
                                <?php foreach($this->admin_model->getAnnotationsSpecify($idlink)->result() as $annotations) { ?>
                                    <li><?= $annotations->annotation ?></li>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <h3><?= $this->lang->line('mov_forum'); ?></h3>

                                    <li>forum actions</li>
                                    <li>forum actions</li>
                                    <li>forum actions</li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <h3><?= $this->lang->line('last_comments'); ?></h3>

                                    <li>comments actions</li>
                                    <li>comments actions</li>
                                    <li>comments actions</li>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
<script>
    CKEDITOR.replace( 'adminPanelCK' );
</script>