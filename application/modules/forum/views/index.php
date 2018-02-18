    <header id="top-head">
        <div class="uk-background-secondary" data-uk-parallax="background: #666666,black;">
            <div class="custom-parallax-header uk-background-norepeat uk-background-cover uk-background-center uk-background-image@s uk-section uk-section-large uk-flex uk-flex-middle" uk-parallax="bgx: 0,-60" uk-height viewport="offset-top: false">
                <div class="uk-width-1-1">
                    <div class="uk-container uk-container-large">
                        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-width-1-1@m">
                                <div class="uk-grid-item-match">
                                    <div>
                                        <h3 class="uk-margin-small uk-text-uppercase" style="color: #fff;"><span uk-icon="icon: comments; ratio: 1.7"></span> <?= $this->lang->line('forum_welcome'); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-small"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <?php foreach($this->forum_model->getCategory() as $categorys) { ?>
                    <div class="ForumCategory">
                        <?php if($this->forum_model->getCategoryRows($categorys->id)) { ?>
                            <h4 class="uk-text-uppercase" style="color: #fff;"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?= $categorys->categoryName ?></h4>
                        <?php } ?>
                        <div class="ForumCards" uk-scrollspy="cls: uk-animation-fade; repeat: true">
                            <?php foreach($this->forum_model->getCategoryForums($categorys->id) as $sections) { ?>
                                <?php if ($sections->type == 1 || $sections->type == 3) { ?>
                                    <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" class="ForumCard ForumCard--content">
                                        <i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/<?= $sections->icon ?>')"></i>
                                        <div class="ForumCard-details">
                                            <h1 class="ForumCard-heading"><?= $sections->name ?></h1>
                                            <span class="ForumCard-description"><?= $sections->description ?></span>
                                        </div>
                                    </a>
                                <?php } else if($sections->type == 2) { ?>
                                    <?php if($this->m_data->isLogged()) { ?>
                                        <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                                            <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" style="border-color: #00aeff; border-radius: 10px;" class="ForumCard ForumCard--content">
                                                <i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/icons/<?= $sections->icon ?>')"></i>
                                                <div class="ForumCard-details">
                                                    <h1 class="ForumCard-heading"><?= $sections->name ?></h1>
                                                    <span class="ForumCard-description"><?= $sections->description ?></span>
                                                </div>
                                            </a>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="uk-space-large"></div>
                <?php } ?>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
        <div class="uk-space-large"></div>
