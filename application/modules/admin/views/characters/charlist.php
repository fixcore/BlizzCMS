<!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?= $this->lang->line('chars_list'); ?></h3>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Own</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($this->admin_model->getAdminCharactersList()->result() as $chars) { ?>
                                        <tr>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid ?>" title="<?= $chars->account ?>"><?= $this->m_data->getUsernameID($chars->account); ?></a></td>
                                            <td><a href="<?= base_url(); ?>admin/clist/<?= $chars->guid ?>" title="<?= $chars->name ?>"><?= $chars->name ?></a></td>
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