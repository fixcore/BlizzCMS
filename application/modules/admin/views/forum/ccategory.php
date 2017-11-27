<?php if(isset($_POST['button_createCategory'])){
    $name = $_POST['cate_name'];

    $this->admin_model->insertCategory($name);
} ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title"></div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0"><?= $this->lang->line('forum_categoryCrea'); ?></h3>
                    <p class="text-muted m-b-30 font-13"></p>
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label class="col-md-12">Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Name" required="" name="cate_name">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" name="button_createCategory">Create</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>