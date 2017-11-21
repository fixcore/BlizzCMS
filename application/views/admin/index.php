
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><?= $this->lang->line('players_on'); ?></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right">
                                    <span class="counter text-success"><?= $this->m_general->getCharOn(); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <a href="<?= base_url('admin/users'); ?>" title="<?= $this->lang->line('account_cre'); ?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title"><?= $this->lang->line('account_cre'); ?></h3>
                                <ul class="list-inline two-part">
                                    <li class="text-right"><span class="counter text-purple"><?= $this->m_general->getAccCreated(); ?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><?= $this->lang->line('staff_count'); ?></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right"><span class="counter text-info"><?= $this->m_general->getGmCount(); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><?= $this->lang->line('bann_count'); ?></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right"><span class="text-danger"><?= $this->m_general->getBanCount(); ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!-- /.container-fluid -->