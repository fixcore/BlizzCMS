            <section class="Community">
                <header class="Community-header">
                    <div class="Community-wrapper">
                        <div class="Welcome">
                            <div class="Welcome-logo--container">
                                <img class="Welcome-logo" src="<?= base_url('assets/images/logo/game-logo.png'); ?>"/>
                                <p class="Welcome-text uk-text-uppercase"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?= $this->lang->line('forum_welcome'); ?></p>
                            </div>
                        </div>
                    </div>
                </header>
                <?php foreach($this->forum_model->getCategory() as $categorys) { ?>
                    <div class="ForumCategory">
                        <?php if($this->forum_model->getCategoryRows($categorys->id)) { ?>
                            <header class="ForumCategory-header">
                                <br>
                                <h1 class="ForumCategory-heading"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?= $categorys->categoryName ?></h1>
                            </header>
                        <?php } ?>
                        <div class="ForumCards ">
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
                                            <a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" style="border-color: #00aeff; border-radius: 10px;" class="ForumCard ForumCard--content ">
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
                <?php } ?>
            </section>
        </div>
    </div>
