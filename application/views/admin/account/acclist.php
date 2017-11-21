<!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?= $this->lang->line('users_list'); ?></h3>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($this->m_general->getAdminAccountsList()->result() as $accs) { ?>
                                        <tr>
                                            <td><a href="<?= base_url(); ?>admin/alist/<?= $accs->id ?>" title="<?= $accs->username ?>"><?= $accs->username ?></a></td>
                                            <td><a href="<?= base_url(); ?>admin/alist/<?= $accs->id ?>" title="<?= $accs->email ?>"><?= $accs->email ?></a></td>
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