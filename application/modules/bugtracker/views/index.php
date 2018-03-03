<?php if($this->m_permissions->getIsAdmin($this->session->userdata('fx_sess_id'))) { ?>
    <script src="<?= base_url(); ?>core/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
        selector: '.tinyeditor',
        language: '<?= $this->config->item('tinymce_language'); ?>',
        menubar: false,
        plugins: ['advlist autolink autosave link image lists charmap preview hr searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media table contextmenu directionality emoticons textcolor paste fullpage textcolor colorpicker textpattern'],
        toolbar: 'insert unlink emoticons | undo redo | formatselect fontselect fontsizeselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | blockquote | removeformat'});
    </script>
<?php } else { ?>
    <script src="<?= base_url(); ?>core/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
        selector: '.tinyeditor',
        language: '<?= $this->config->item('tinymce_language'); ?>',
        menubar: false,
        plugins: ['advlist autolink autosave link lists charmap preview hr searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime contextmenu directionality emoticons textcolor paste fullpage textcolor colorpicker textpattern'],
        toolbar: 'emoticons | undo redo | fontselect fontsizeselect | bold italic | forecolor | bullist numlist outdent indent | link unlink | removeformat'});
    </script>
<?php } ?>

    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-principal-title uk-text-white"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('nav_bugtracker'); ?></div>
                <?php if ($this->m_data->isLogged()) { ?>
                    <span class="uk-align-right">
                        <a href="#" uk-toggle="target: #createReport">
                            <button class="uk-button uk-button-primary"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_report'); ?></button>
                        </a>
                    </span>
                <?php } ?>
                <p class="uk-text-uppercase uk-text-bold uk-text-white"><?= $this->lang->line('bugtracker_report_list'); ?></p>
                <div align="right" id="pagination_link"></div>
                <div class="table-responsive" id="bugtracker_table"></div>
                <script>
                    $(document).ready(function() {
                        function load_country_data(page) {
                            $.ajax({
                                url:"<?php echo base_url(); ?>bugtracker/pagination/"+page,
                                method:"GET",
                                dataType:"json",
                                success:function(data) {
                                    $('#bugtracker_table').html(data.bugtracker_table);
                                    $('#pagination_link').html(data.pagination_link);
                                }
                            });
                        }
                        load_country_data(1);
                        $(document).on("click", ".pagination li a", function(event) {
                            event.preventDefault();
                            var page = $(this).data("ci-pagination-page");
                            load_country_data(page);
                        });
                    });
                </script>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
