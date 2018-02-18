<?php if(isset($_POST['createPM'])) {
    $this->load->model('messages/messages_model');
    $reply = $_POST['replyText'];
    $this->messages_model->insertReply($this->session->userdata('fx_sess_id'), $idlink, $reply);
} ?>

<?php if (isset($_POST['button_changeavatar'])) {
    $valueAvatar = $_POST['radioAvatars'];
    $this->user_model->insertAvatar($valueAvatar);
} ?>

<?php if (isset($_POST['button_uppdateinfo'])) {
    $name = $_POST['name_us'];
    $surname = $_POST['surname_us'];
    $question = $_POST['question_us'];
    $answer = $_POST['answer_us'];
    $day = $_POST['day_us'];
    $month = $_POST['month_us'];
    $year = $_POST['year_us'];
    $country = $_POST['country_us'];
    $user = $this->session->userdata('fx_sess_username');
    $mail = $this->session->userdata('fx_sess_email');
    $id = $this->session->userdata('fx_sess_id');

    $this->user_model->updateInformation($id, $name, $surname, $user, $mail, $question, $answer, $year, $month, $day, $country);
} ?>

    <?php if ($this->m_modules->getMessages() == '1') { ?>
        <div id="privateMsg" uk-modal="bg-close: false">
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('form_new_message'); ?></h2>
                </div>
                <form action="" method="post" accept-charset="utf-8">
                    <div class="uk-modal-body">
                        <div class="uk-margin">
                            <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_message'); ?></label>
                            <div class="uk-form-controls">
                                <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                                <div class="uk-width-1-1">
                                    <textarea required name="replyText" id="ckeditor" rows="10" cols="80"></textarea>
                                    <script>
                                        CKEDITOR.replace('ckeditor');
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right actions">
                            <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                            <button class="uk-button uk-button-primary" type="submit" name="createPM"><?= $this->lang->line('button_send'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>

    <div id="changePassword" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-key" aria-hidden="true"></i> <?= $this->lang->line('button_change_password'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: unlock"></span>
                                <input class="uk-input" name="oldpass" type="password" required placeholder="<?= $this->lang->line('form_old_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="newpass" type="password" required placeholder="<?= $this->lang->line('form_new_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="newpassr" type="password" required placeholder="<?= $this->lang->line('form_re_password'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changepass"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="changeEmail" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $this->lang->line('button_change_email'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input" name="password" type="password" required placeholder="<?= $this->lang->line('form_password'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input class="uk-input" name="oldemail" type="email" required placeholder="<?= $this->lang->line('form_old_email'); ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input class="uk-input" name="newemail" type="email" required placeholder="<?= $this->lang->line('form_new_email'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changeemail"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="avatars" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-camera" aria-hidden="true"></i> <?= $this->lang->line('button_change_avatar'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-grid uk-grid-medium uk-child-width-1-5 uk-flex-center uk-text-center">
                                <?php foreach($this->user_model->getAllAvatars()->result() as $allAvts) { ?>
                                    <div class="col-sm-3">
                                        <img class="uk-border-rounded" src="<?= base_url('assets/images/profiles/'.$allAvts->name); ?>" width="100" height="100">
                                        <input type="radio" name="radioAvatars" checked value="<?= $allAvts->id ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_changeavatar"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <div id="personalinfo" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-uppercase"><i class="fa fa-user-o" aria-hidden="true"></i> <?= $this->lang->line('button_add_personal_info'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_username'); ?> & <?= $this->lang->line('form_email'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: hashtag"></span>
                                <input class="uk-input uk-width-1-1" type="text" placeholder="<?= $this->session->userdata('fx_sess_username'); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input" type="text" placeholder="<?= $this->session->userdata('fx_sess_email'); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_user_info'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" name="country_us">
                                <?php foreach($this->user_model->getCountry()->result() as $country_us) { ?>
                                    <option value="<?= $country_us->id; ?>"><?= $country_us->country_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" name="name_us" type="text" placeholder="<?= $this->lang->line('form_first_name'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" name="surname_us" type="text" placeholder="<?= $this->lang->line('form_last_name'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_birth_date'); ?></label>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-inline uk-width-1-4@s">
                                <div class="uk-form-controls">
                                    <select class="uk-select" name="day_us">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-2@s">
                                <div class="uk-form-controls">
                                    <select class="uk-select" name="month_us">
                                        <option value="1"><?= $this->lang->line('month_january'); ?></option>
                                        <option value="2"><?= $this->lang->line('month_february'); ?></option>
                                        <option value="3"><?= $this->lang->line('month_march'); ?></option>
                                        <option value="4"><?= $this->lang->line('month_april'); ?></option>
                                        <option value="5"><?= $this->lang->line('month_may'); ?></option>
                                        <option value="6"><?= $this->lang->line('month_june'); ?></option>
                                        <option value="7"><?= $this->lang->line('month_july'); ?></option>
                                        <option value="8"><?= $this->lang->line('month_august'); ?></option>
                                        <option value="9"><?= $this->lang->line('month_september'); ?></option>
                                        <option value="10"><?= $this->lang->line('month_october'); ?></option>
                                        <option value="11"><?= $this->lang->line('month_november'); ?></option>
                                        <option value="12"><?= $this->lang->line('month_december'); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-inline uk-width-1-4@s">
                                <input class="uk-input" type="number" name="year_us" pattern=".{4,4}" min="1936" max="2010" required title="4 characters" placeholder="<?= $this->lang->line('form_year'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_security_question'); ?></label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="question_us">
                                <?php foreach ($this->user_model->getQuestion()->result() as $question_us) { ?>
                                    <option value="<?= $question_us->id ?>"><?= $question_us->question; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: question"></span>
                                <input class="uk-input" name="answer_us" type="password" placeholder="<?= $this->lang->line('form_secret_answer'); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_uppdateinfo"><?= $this->lang->line('button_change'); ?></button>
                </div>
            </form>
        </div>
    </div>
