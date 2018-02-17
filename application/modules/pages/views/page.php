    <header id="top-head">
        <?php $this->load->view('general/menu'); ?>
    </header>
    <br>
    <div class="uk-container">
        <div class="uk-space-xlarge"></div>
        <div class="uk-grid uk-grid-large" data-uk-grid>
            <div class="uk-width-1-5@l"></div>
            <div class="uk-width-3-5@l">
                <article class="uk-article" style="color: #fff;">
                    <h1 class="uk-article-title uk-text-uppercase" style="color: #fff;"><a class="uk-link-reset" href=""><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->pages_model->getName($idlink) ?></a></h1>
                    <p class="uk-article-meta" style="color: #fff;"><?= $this->lang->line('news_article_published'); ?> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('Y-m-d', $this->pages_model->getDate($idlink)); ?></p>
                    <p class="uk-text-break"><?= $this->pages_model->getDesc($idlink); ?></p>
                    <hr>
                </article>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
