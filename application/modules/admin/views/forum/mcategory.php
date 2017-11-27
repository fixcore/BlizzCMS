<?php if(isset($_POST['button_deleteCategory']))
{
    $this->admin_model->deleteCategory($_POST['button_deleteCategory']);
}?>
<!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title"></div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?= $this->lang->line('forum_categoryMan'); ?></h3>
                            <p class="text-muted m-b-30"></p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($this->admin_model->getForumCategoryList()->result() as $list) { ?>
                                        <tr>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" disabled class="form-control" value="<?= $list->categoryName; ?>">
                                                </div>
                                            </td>

                                            <td>
                                                <form action="" method="post" accept-charset="utf-8">
                                                    <button name="button_deleteCategory" value="<?= $list->id ?>" type="submit" class="btn btn-danger waves-effect waves-light m-r-10">Delete</button>
                                                </form>
                                            </td>
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