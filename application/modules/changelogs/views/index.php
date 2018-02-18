    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <?php if($this->changelogs_model->getAll()->num_rows()) { ?>
            <div class="uk-grid uk-grid-large" data-uk-grid>
                <div class="uk-width-1-6@l"></div>
                <div class="uk-width-4-6@l">
                    <div class="uk-h3 uk-text-uppercase" style="color: #fff;"><i class="fa fa-spinner fa-pulse fa-fw"></i> <?= $this->lang->line('changelogs_recent_article'); ?></div>
                    <div class="Divider Divider--light"></div>
                    <div class="uk-card uk-card-default uk-card-hover uk-grid-collapse uk-child-width-1-2@s uk-margin uk-animation-fade" uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-overflow-hidden">
                            <img src="<?= base_url(); ?>assets/images/changelogs/default.jpg" alt="" uk-cover>
                            <canvas width="50" height="50"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-text-uppercase uk-text-break"><?= $this->changelogs_model->getChanglogTitle($this->changelogs_model->getLastID()); ?></h3>
                                <p><?= substr(ucfirst(strtolower(strip_tags($this->changelogs_model->getChanglogDesc($this->changelogs_model->getLastID())))), 0, 260).' ...'; ?></p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->changelogs_model->getChanglogDate($this->changelogs_model->getLastID())); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-h3 uk-text-uppercase uk-text-center" style="color: #fff;"><span uk-icon="icon: cog; ratio: 2"></span> <?= $this->lang->line('changelogs_list'); ?></div>
                    <div class="uk-space-medium"></div>
                    <div uk-slider>
                        <div class="uk-position-relative uk-visible-toggle uk-light">
                            <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                                <?php foreach($this->changelogs_model->getChangelogs()->result() as $changelogsList) { ?>
                                    <li>
                                        <div class="uk-card uk-card-secondary">
                                            <div class="uk-card-media-top">
                                                <img src="<?= base_url(); ?>assets/images/changelogs/default.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body uk-text-center">
                                                <h4 class="uk-card-title"><?= $changelogsList->title ?></h4>
                                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $changelogsList->date); ?></p>
                                                <p><a href="<?= base_url('changelogs/'); ?><?= $changelogsList->id ?>" class="uk-button uk-button-primary uk-width-1-1"><i class="fa fa-eye" aria-hidden="true"></i> <?= $this->lang->line('button_learn_more'); ?></a></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-6@l"></div>
            </div>
        <?php } else { ?>
            <div class="uk-grid uk-grid-large" data-uk-grid>
                <div class="uk-width-1-6@l"></div>
                <div class="uk-width-4-6@l">
                    <div class="uk-alert-warning" uk-alert>
                        <p class="uk-text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->lang->line('changelog_not_found'); ?></p>
                    </div>
                </div>
                <div class="uk-width-1-6@l"></div>
            </div>
        <?php } ?>
