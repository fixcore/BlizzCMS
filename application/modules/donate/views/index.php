    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-4@l"></div>
            <div class="uk-width-2-4@l">
                <div class="uk-scrollspy-inview uk-animation-slide-bottom" style="color: rgba(255,255,255,.7);" uk-scrollspy-class="">
                    <iframe src="https://api.paymentwall.com/api/ps/?key=<?= $this->config->item('paymentwall_project_key'); ?>&amp;uid=<?= $this->session->userdata('fx_sess_id'); ?>&amp;widget=<?= $this->config->item('paymentwall_widget_code'); ?>" width="100%" height="400px" frameborder="0" id="pw-iframe"></iframe>
                </div>
            </div>
            <div class="uk-width-1-4@l"></div>
        </div>