    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <?php if($this->changelogs_model->getAll()->num_rows()) { ?>
                    <article class="uk-article" style="color: #fff;">
                        <h1 class="uk-article-title" style="color: #fff;"><a class="uk-link-reset" href=""><?= $this->changelogs_model->getChanglogTitle($idlink); ?></a></h1>
                        <p class="uk-article-meta" style="color: #fff;"><?= $this->lang->line('news_article_published'); ?> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->changelogs_model->getChanglogDate($idlink)); ?></p>
                        <img class="uk-margin-medium-bottom" src="<?= base_url(); ?>assets/images/changelogs/default.jpg" height="300" alt="">
                        <p><?= $this->changelogs_model->getChanglogDesc($idlink); ?></p>
                    </article>
                <?php } else { ?>
                    <div class="uk-alert-warning" uk-alert>
                        <p class="uk-text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->lang->line('changelog_not_found'); ?></p>
                    </div>
                    <div class="space-adaptive-small"></div>
                <?php } ?>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
