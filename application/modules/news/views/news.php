    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-principal-title uk-text-center" style="color: #fff;"><i class="fa fa-star-o" aria-hidden="true"></i> Outstanding News</div>
                <div class="uk-space-medium"></div>
                <div uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light">
                        <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                            <?php if ($this->news_model->getNewsTopsList()->num_rows()) { ?>
                                <?php foreach($this->news_model->getNewsTopsList()->result() as $listTop) { ?>
                                    <li>
                                        <div class="uk-text-center">
                                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                <img src="<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($listTop->id_new); ?>" alt="">
                                                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                                    <p class="uk-h4 uk-margin-remove uk-text-truncate"><?= $this->news_model->getNewTitle($listTop->id_new); ?></p>
                                                    <p><a href="<?= base_url(); ?>news/<?= $listTop->id_new ?>" class="uk-button uk-button-primary uk-button-small"><?= $this->lang->line('button_learn_more'); ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <div class="uk-h3 uk-text-uppercase" style="color: #fff;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->lang->line('news_recent_list'); ?></div>
                <div class="Divider Divider--light"></div>
                <?php if ($this->news_model->getNewsList()->num_rows()) { ?>
                    <?php foreach($this->news_model->getNewsList()->result() as $list) { ?>
                        <a href="<?= base_url(); ?>news/<?= $list->id ?>">
                            <div class="uk-card uk-card-default uk-card-hover uk-grid-collapse uk-child-width-1-3@s uk-margin uk-animation-fade" uk-grid>
                                <div class="uk-card-media-left uk-cover-container uk-overflow-hidden">
                                    <img src="<?= base_url(); ?>assets/images/news/<?= $list->image ?>" alt="" uk-cover>
                                    <canvas width="100" height="100"></canvas>
                                </div>
                                <div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-uppercase uk-text-break"><?= $list->title ?></h3>
                                        <p><?= substr(ucfirst(strtolower(strip_tags($list->description))), 0, 260).' ...'; ?></p>
                                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?= date('Y-m-d', $list->date); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
