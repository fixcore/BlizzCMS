<?php if (isset($_POST['serverRestartNow'])) {
    $this->admin_model->restartNowServer();
} ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><i class="fa fa-tachometer fa-fw"></i><?= $this->lang->line('adm_dashboard'); ?></h4>
                </div>
            </div>
            <!-- /.row -->
            <!-- statistical data -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-info"><i class="fa fa-area-chart"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15"><?= $this->admin_model->getCharOn(); ?></h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4><?= $this->lang->line('players_on'); ?></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br b-r-none">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-success"><i class="fa fa-globe"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15"><?= $this->admin_model->getAccCreated(); ?></h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4><?= $this->lang->line('account_cre'); ?></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-warning"><i class="fa fa-id-badge"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15"><?= $this->admin_model->getGmCount(); ?></h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4><?= $this->lang->line('staff_count'); ?></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br b-0">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-danger"><i class="fa fa-ban"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15"><?= $this->admin_model->getBanCount(); ?></h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4><?= $this->lang->line('bann_count'); ?></h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- website tools -->
            <div class="row">
                <form method="post" action="">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <button type="submit" name="serverRestartNow" class="btn btn-block btn-danger btn-rounded"><i class="fa fa-server"></i> Restart Server</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/.row -->
        </div>
        <!-- /.container-fluid -->
