    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header uk-card-primary">
                        <h3 class="uk-card-title uk-text-center uk-text-uppercase" style="color: #fff;"><i class="fa fa-comments" aria-hidden="true"></i> <?= $this->lang->line('message_header'); ?></h3>
                    </div>
                    <div class="uk-card-body uk-card-secondary">
                        <div class="uk-child-width-1-1" uk-grid>
                            <div>
                                <div uk-grid>
                                    <div class="uk-width-auto@m">
                                        <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                            <?php foreach($this->messages_model->getGroupsUsersPM($this->session->userdata('fx_sess_id'))->result() as $pmlist) { ?>
                                                <li>
                                                    <a href="#">
                                                        <?php if($this->m_general->getUserInfoGeneral($pmlist->author)->num_rows()) { ?>
                                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($pmlist->author)); ?>" width="20" height="20" alt="" />
                                                        <?php } else { ?>
                                                            <img class="uk-border-circle" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="20" height="20" alt="" />
                                                        <?php } ?>
                                                        <?= substr($this->m_data->getUsernameID($pmlist->author), 0, 13); ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="uk-width-expand@m">
                                        <ul id="component-tab-left" class="uk-switcher">
                                            <?php foreach($this->messages_model->getGroupsUsersPM($this->session->userdata('fx_sess_id'))->result() as $pmlist) { ?>
                                                <li>
                                                    <?php foreach($this->messages_model->getMessagesSpecificAuthor($pmlist->author, $this->session->userdata('fx_sess_id'))->result() as $messages) { ?>
                                                        <h5>
                                                            <div>
                                                                <a href="<?= base_url('profile/'.$messages->author); ?>">
                                                                    <?php if($this->m_general->getUserInfoGeneral($pmlist->author)->num_rows()) { ?>
                                                                        <img class="uk-border-rounded" src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($pmlist->author)); ?>" width="40" height="40" alt="" />
                                                                    <?php } else { ?>
                                                                        <img class="uk-border-rounded" src="<?= base_url('assets/images/profiles/default.png'); ?>" width="40" height="40" alt="" />
                                                                    <?php } ?>
                                                                    <span class="uk-text-middle"><?= $this->m_data->getUsernameID($messages->author) ?></span>
                                                                            
                                                                </a>
                                                            </div>
                                                        </h5>
                                                        <p class="uk-margin-small-bottom"><?= $messages->message; ?></p>
                                                        <p class="uk-text-right" style="font-size: 14px;">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i> <?= $this->lang->line('column_date'); ?>: <?= date('F/d/Y', $messages->date); ?>
                                                            |
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?= $this->lang->line('column_time'); ?>: <?= date('l H:i A', $messages->date); ?> 
                                                        </p>
                                                        <hr class="uk-divider-icon">
                                                    <?php } ?>
                                                    <form action="" method="POST" accept-charset="utf-8">
                                                        <div class="uk-margin">
                                                            <div class="uk-form-controls">
                                                                <div class="uk-width-1-1">
                                                                    <textarea name="replyText" required class="uk-textarea" rows="5" placeholder="<?= $this->lang->line('button_add_reply'); ?>"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <div class="uk-form-controls">
                                                                <button class="uk-button uk-button-primary uk-width-1-1" name="addReplyComment" type="submit" value="<?= $messages->author ?>"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_reply'); ?></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
