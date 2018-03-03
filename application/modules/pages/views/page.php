    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <article class="uk-article uk-text-white">
                    <h1 class="uk-article-title uk-text-uppercase uk-text-white"><a class="uk-link-reset" href=""><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->pages_model->getName($idlink) ?></a></h1>
                    <p class="uk-article-meta uk-text-white"><?= $this->lang->line('news_article_published'); ?> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('Y-m-d', $this->pages_model->getDate($idlink)); ?></p>
                    <p class="uk-text-break"><?= $this->pages_model->getDesc($idlink); ?></p>
                    <hr>
                </article>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
