    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-principal-title" style="color: #fff;"><i class="fa fa-bug" aria-hidden="true"></i> <?= $this->lang->line('nav_bugtracker'); ?></div>
                <?php if ($this->m_data->isLogged()) { ?>
                    <span class="uk-align-right">
                        <a href="#" uk-toggle="target: #createReport">
                            <button class="uk-button uk-button-primary"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_create_report'); ?></button>
                        </a>
                    </span>
                <?php } ?>
                <p class="uk-text-uppercase uk-text-bold" style="color: #fff;"><?= $this->lang->line('bugtracker_report_list'); ?></p>
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
