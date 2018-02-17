    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-large"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <h2 class="uk-text-primary uk-text-center"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('button_login'); ?></h2>
                <p class="uk-text-center" style="color: #fff;"><?= $this->lang->line('login_description'); ?></p>

                <?php if(isset($_GET['password'])) {
                    echo '<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('password_error').'</p></div>';
                } ?>

                <?php if(isset($_GET['account'])) {
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a><p class="uk-text-center"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '.$this->lang->line('account_error').'</p></div>';
                } ?>

                <?= form_open(base_url('user/verify2')); ?>
                    <div class="uk-margin" uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-inline; delay: 300; repeat: true">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <?= form_input($email_form); ?>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin" uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-inline; delay: 300; repeat: true">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <?= form_input($password_form); ?>
                            </div>
                        </div>
                    </div>
                    <?= form_submit($submit_form); ?>
                <?= form_close(); ?>
                <hr>
                <a href="<?= base_url('register'); ?>">
                    <button class="uk-button uk-button-secondary uk-width-1-1" name="<?= $this->lang->line('no_account'); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> <?= $this->lang->line('button_account_create'); ?></button>
                </a>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
