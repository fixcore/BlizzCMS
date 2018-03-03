    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-6@l"></div>
            <div class="uk-width-4-6@l">
                <?php if($this->changelogs_model->getAll()->num_rows()) { ?>
                    <article class="uk-article uk-text-white">
                        <h1 class="uk-article-title uk-text-white"><a class="uk-link-reset" href=""><?= $this->changelogs_model->getChanglogTitle($idlink); ?></a></h1>
                        <p class="uk-article-meta uk-text-white"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->changelogs_model->getChanglogDate($idlink)); ?></p>
                        <img class="uk-margin-medium-bottom" src="<?= base_url(); ?>assets/images/changelogs/<?= $this->changelogs_model->getChanglogImage($idlink); ?>" height="300" alt="">
                        <p><?= $this->changelogs_model->getChanglogDesc($idlink); ?></p>
                    </article>
                <?php } else { ?>
                    <div class="uk-alert-warning" uk-alert>
                        <p class="uk-text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->lang->line('changelog_not_found'); ?></p>
                    </div>
                    <div class="space-adaptive-small"></div>
                <?php } ?>
            </div>
            <div class="uk-width-1-6@l"></div>
        </div>
