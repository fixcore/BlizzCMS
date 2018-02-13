            <div class="Pane Pane--adaptive Pane--flush">
                <div style="" class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                    <div class="space-adaptive-large hide show-sm"></div>
                    <div id="article-detail-container">
                        <?php if($this->changelogs_model->getAll()->num_rows()) { ?>
                            <div id="article-detail">
                                <article data-id='' data-title="" class="ArticleDetail uk-width-1-1">
                                    <div class="ArticleDetail-heading">
                                        <div class="ArticleDetail-headingBlock">
                                            <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"><i class="fa fa-wrench" aria-hidden="true"></i> <?= $this->lang->line('changelogs_list'); ?></div>
                                            <h1 class="Heading Heading--articleHeadline ArticleDetail-title" style="color: #fff;"><i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $this->changelogs_model->getChanglogTitle($idlink); ?></h1>
                                            <div class="Heading Heading--articleByline flush-bottom">
                                                <div class="ArticleDetail-subHeadingContainer">
                                                    <div class="ArticleDetail-subHeadingLeft">
                                                        <span class="ArticleDetail-bylineBy">
                                                            <span itemprop="author" class="ArticleDetail-bylineAuthor text-identity"><?= $this->lang->line('news_article_published'); ?></span>
                                                        </span>
                                                    </div>
                                                    <div class="ArticleDetail-subHeadingRight">
                                                        <span class="ArticleDetail-bylineDate"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->changelogs_model->getChanglogDate($idlink)); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-large"></div>
                                        </div>
                                        <div class="ArticleDetail-headingImageBlock">
                                            <div class="Image">
                                                <img src="<?= base_url(); ?>assets/images/changelogs/default.jpg" alt="" class="Image-image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ResponsiveBlogs">
                                        <div class="ArticleDetail-content">
                                            <p><?= $this->changelogs_model->getChanglogDesc($idlink); ?></p>
                                        </div>
                                    </div>
                                    <div class="space-adaptive-medium"></div>
                                </article>
                            </div>
                            <div id="article-sidebar">
                                <div class="ArticleSidebar hide show-md">
                                    <div class="ArticleSidebar-inner">
                                        <div data-wheel="true" class="Scrollable ArticleSidebar-scrollable">
                                            <div class="Scrollable-scrollbar scrollbar">
                                                <div class="Scrollable-track track">
                                                    <div class="Scrollable-thumb thumb">
                                                        <div class="Scrollable-end end"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Scrollable-viewport viewport">
                                                <div class="Scrollable-overview overview">
                                                    <div class="ArticleSidebar-content">
                                                        <?php foreach($this->changelogs_model->getChangelogs()->result() as $changelogsList) { ?>
                                                            <div data-id='<?= $changelogsList->id ?>' class="ArticleSidebarItem">
                                                                <a href="<?= base_url('changelogs/'); ?><?= $changelogsList->id ?>" data-external="false" data-article-id='' data-analytics="<?= $changelogsList->id ?> - <?= $changelogsList->title ?>" class="ArticleLink ArticleSidebarItem-link">
                                                                    <div style="background-image:url(<?= base_url(); ?>assets/images/changelogs/default.jpg)" class="ArticleSidebarItem-image"></div>
                                                                    <div class="ArticleSidebarItem-text">
                                                                        <div class="ArticleSidebarItem-subtitle">
                                                                            <div class="ArticleSidebarItem-subtitleLeft">
                                                                                <div class="ArticleSidebarItem-community"><i class="fa fa-wrench" aria-hidden="true"></i> <?= $this->lang->line('changelogs_list'); ?></div>
                                                                            </div>
                                                                            <div class="ArticleSidebarItem-timestamp"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $changelogsList->date); ?></div>
                                                                        </div>
                                                                        <div class="ArticleSidebarItem-title"><?= $changelogsList->title ?></div>
                                                                    </div>
                                                                    <div class="ArticleSidebarItem-progress">
                                                                        <div class="ArticleSidebarItem-progressBar"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="uk-alert-warning" uk-alert>
                                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->lang->line('changelog_not_found'); ?></p>
                            </div>
                            <div class="space-adaptive-small"></div>
                        <?php } ?>
                    </div>
                    <div class="space-adaptive-large"></div>
                </div>
            </div>
        </div>
