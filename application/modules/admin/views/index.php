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
        <!--/.row -->
        <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title"><?= $this->lang->line('players_on'); ?></h3>
                                <ul class="list-inline m-t-30 p-t-10 two-part">
                                    <li><i class="fa fa-area-chart text-info"></i></li>
                                    <li class="text-right"><span class="counter"><?= $this->admin_model->getCharOn(); ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title"><?= $this->lang->line('account_cre'); ?></h3>
                                <ul class="list-inline m-t-30 p-t-10 two-part">
                                    <li><i class="fa fa-globe text-success"></i></li>
                                    <li class="text-right"><span class="counter"><?= $this->admin_model->getAccCreated(); ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title"><?= $this->lang->line('staff_count'); ?></h3>
                                <ul class="list-inline m-t-30 p-t-10 two-part">
                                    <li><i class="icon-people text-purple"></i></li>
                                    <li class="text-right"><span class=""><?= $this->admin_model->getGmCount(); ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title"><?= $this->lang->line('bann_count'); ?></h3>
                                <ul class="list-inline m-t-30 p-t-10 two-part">
                                    <li><i class="fa fa-ban text-danger"></i></li>
                                    <li class="text-right"><span class=""><?= $this->admin_model->getBanCount(); ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--/.row -->
    </div>
    <!-- /.container-fluid -->