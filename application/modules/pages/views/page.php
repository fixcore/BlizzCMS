            <div class="container">
                <div class="space-adaptive-medium"></div>
                <div class="space-adaptive-medium"></div>
                <div class="cold-md-12">
                    <div class="cold-md-1"></div>
                    <div class="cold-md-10 uk-text-break">
                        <article data-id='' data-title="" class="ArticleDetail">
                            <div class="ArticleDetail-heading">
                                <div class="ArticleDetail-headingBlock">
                                    <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"></div>
                                    <h1 class="Heading Heading--articleHeadline ArticleDetail-title" style="color: #fff;"><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->pages_model->getName($idlink) ?></h1>
                                    <div class="Heading Heading--articleByline flush-bottom">
                                        <div class="ArticleDetail-subHeadingContainer">
                                            <div class="ArticleDetail-subHeadingLeft">
                                                <span class="ArticleDetail-bylineBy">
                                                    <span itemprop="author" class="ArticleDetail-bylineAuthor text-identity"><?= $this->lang->line('news_article_published'); ?></span>
                                                </span>
                                            </div>
                                            <div class="ArticleDetail-subHeadingRight">
                                                <span class="ArticleDetail-bylineDate"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('Y-m-d', $this->pages_model->getDate($idlink)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-medium"></div>
                                </div>
                            </div>
                        </article>
                        <p><?= $this->pages_model->getDesc($idlink); ?></p>
                        <div class="space-adaptive-medium"></div>
                    </div>
                    <div class="cold-md-1"></div>
                </div>
            </div>
        </div>
    </div>
