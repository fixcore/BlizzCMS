            <div class="container">
                <div class="space-adaptive-medium"></div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="section uk-scrollspy-inview uk-animation-slide-bottom" style="color: rgba(255,255,255,.7);" uk-scrollspy-class="">
                            <div id="donate">
                                <iframe src="https://api.paymentwall.com/api/ps/?key=<?= $this->config->item('paymentwall_project_key'); ?>&amp;uid=<?= $this->session->userdata('fx_sess_id'); ?>&amp;widget=<?= $this->config->item('paymentwall_widget_code'); ?>" width="100%" height="400px" frameborder="0" id="pw-iframe"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
