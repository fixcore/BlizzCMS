<?php if(isset($_POST['button_addcommentary'])) {
    $commentary = $_POST['reply_comment'];
    $idsession = $this->session->userdata('fx_sess_id');
    $this->news_model->insertComment($commentary, $idlink, $idsession);
} ?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_news'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-article.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app-article.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('assets/css/blizzcms-template.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url('theme/'); ?><?= $this->config->item('theme_name'); ?>/css/<?= $this->config->item('theme_name'); ?>.css"/>

    <!-- UIkit -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css"/>
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/font-awesome/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url(); ?>core/js/jquery-3.3.1.min.js"></script>
</head>

<body class="en-us <?= $this->config->item('theme_name'); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    <div class="Navigation is-dropdown Navigation--hg">
        <div class="Navigation-wrapper">
            <div touch-action="none" class="Navigation-container">
                <ul class="List List--horizontal Navigation-list">
                    <li class="ListItem ListItem--horizontal Navigation-item">
                        <a data-name="topic" class="is-selected Navigation-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->news_model->getNewTitle($idlink); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="Navigation-scroll Navigation-scrollLeft"><span>&lsaquo;</span></div>
        <div class="Navigation-scroll Navigation-scrollRight"><span>&rsaquo;</span></div>
    </div>
    </div>
    </div>
    </div>
    <!-- submenu -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <div class="Pane Pane--adaptive Pane--flush">
                <div style="" class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                    <div class="space-adaptive-large hide show-sm"></div>
                    <div id="article-detail-container">
                        <div id="article-detail">
                            <article data-id='' data-title="" class="ArticleDetail">
                                <div class="ArticleDetail-heading">
                                    <div class="ArticleDetail-headingBlock">
                                        <div class="Heading Heading--articleSubheading ArticleDetail-community flush-top"><i class="fa fa-list-alt" aria-hidden="true"></i> <?= $this->lang->line('news_article_subheading'); ?></div>
                                        <h1 class="Heading Heading--articleHeadline ArticleDetail-title" style="color: #fff;"><?= $this->news_model->getNewTitle($idlink); ?></h1>
                                        <div class="Heading Heading--articleByline flush-bottom">
                                            <div class="ArticleDetail-subHeadingContainer">
                                                <div class="ArticleDetail-subHeadingLeft">
                                                    <span class="ArticleDetail-bylineBy">
                                                        <span itemprop="author" class="ArticleDetail-bylineAuthor text-identity"><?= $this->lang->line('news_article_published'); ?></span>
                                                    </span>
                                                </div>
                                                <div class="ArticleDetail-subHeadingRight">
                                                    <span class="ArticleDetail-bylineDate"><i class="fa fa-clock-o" aria-hidden="true"></i> January 21, 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-large"></div>
                                    </div>
                                    <div class="ArticleDetail-headingImageBlock">
                                        <div class="Image">
                                            <img src="<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($idlink); ?>" alt="" class="Image-image"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="ResponsiveBlogs">
                                    <div class="ArticleDetail-content">
                                        <p><?= $this->news_model->getNewDescription($idlink); ?></p>
                                    </div>
                                </div>
                                <div class="space-adaptive-medium"></div>
                                <hr class="uk-divider-icon">
                                <!-- comments -->
                                <!-- !logged -->
                                <?php if(!$this->m_data->isLogged()) { ?>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <section class="Section Section--secondary">
                                                <div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
                                                    <div class="Author-data" data-topic-form=''>
                                                        <div class="LoginPlaceholder" id="create-topic">
                                                            <header class="LoginPlaceholder-header">
                                                                <h1 class="LoginPlaceholder-heading" style="color: #fff;"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('forum_comment_header'); ?></h1>
                                                            </header>
                                                            <div class="LoginPlaceholder-content">
                                                                <div class="LoginPlaceholder-details">
                                                                    <div class="LogIn-message"><?= $this->lang->line('forum_comment_locked'); ?></div>
                                                                    <a class="LogIn-button" href="<?= base_url('login'); ?>">
                                                                        <span class="LogIn-button-content" ><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('button_login'); ?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <hr class="uk-divider-icon">
                                <?php } ?>
                                <!-- !logged -->
                                <!-- logged -->
                                <?php if($this->m_data->isLogged()) { ?>
                                    <section xmlns="http://www.w3.org/1999/xhtml" class="Section Section--secondary">
                                        <div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
                                            <header class="TopicForm-header">
                                                <h1 class="TopicForm-heading"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('forum_comment_header'); ?></h1>
                                            </header>
                                            <div class="TopicForm-content">
                                                <aside class="TopicForm-author" data-topic-form="{&quot;userId&quot;: 207424185944}">
                                                    <div class="Author" id="" data-topic-post-body-content="true">
                                                        <a href="" class="Author-avatar hasNoProfile">
                                                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows()) { ?>
                                                                <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" alt="" />
                                                            <?php } else { ?>
                                                                <img src="<?= base_url('assets/images/profiles/default.png'); ?>" alt="" />
                                                            <?php } ?>
                                                        </a>
                                                        <div class="Author-details">
                                                            <span class="Author-name"><?= $this->session->userdata('fx_sess_username'); ?></span>
                                                            <span class="Author-posts"><?= $this->forum_model->getCountPostAuthor($this->session->userdata('fx_sess_id')); ?> <?= $this->lang->line('forum_post_count'); ?></span>
                                                        </div>
                                                    </div>
                                                </aside>

                                                <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                                                <form class="Form" id="topic-reply-form" method="post" action="" data-post-form="true" accept-charset="utf-8">
                                                    <div class="TopicForm-group TopicForm-group-content TopicForm-group--isActivated" data-topic-form="true">
                                                        <textarea required="" class="TopicForm-control needsclick TopicForm-control--detail active" data-topic-post-body-edit="true" tabindex="1" spellcheck="true" name="reply_comment" id="ckeditor" rows="10" cols="80"></textarea>
                                                        <script>
                                                            CKEDITOR.replace('ckeditor');
                                                        </script>
                                                    </div>
                                                    <span class="TopicForm-link">
                                                        <a href="#" class="TopicForm-link--conduct"><?= $this->lang->line('forum_code_conduct'); ?></a>
                                                    </span>
                                                    <div class="TopicForm-action--buttons">
                                                        <button type="submit" name="button_addcommentary" class="TopicForm-button TopicForm-button--reply" id="submit-button">
                                                            <span class="Button-content"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_add_reply'); ?></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                <?php } ?>
                                <!-- logged -->
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <?php foreach($this->news_model->getComments($idlink)->result() as $commentss) { ?>
                                            <div class="TopicPost">
                                                <div class="TopicPost-content">
                                                    <aside class="TopicPost-author">
                                                        <div class="Author-block">
                                                        <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                                                            <div class="Author Author--blizzard" id="" data-topic-post-body-content="true">
                                                        <?php } else { ?>
                                                            <div class="Author" id="" data-topic-post-body-content="true">
                                                        <?php } ?>
                                                                <a href="" class="Author-avatar hasNoProfile">
                                                                    <?php if($this->m_general->getUserInfoGeneral($commentss->author)->num_rows()) { ?>
                                                                        <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($commentss->author)); ?>" alt="" />
                                                                    <?php } else { ?>
                                                                        <img src="<?= base_url('assets/images/profiles/default.png'); ?>" alt="" />
                                                                    <?php } ?>
                                                                </a>
                                                                <div class="Author-details">
                                                                    <span class="Author-name"><?= $this->m_data->getUsernameID($commentss->author); ?></span>
                                                                    <span class="Author-posts">
                                                                        <a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="View Post History" data-original-title="" title=""><?= $this->forum_model->getCountPostAuthor($commentss->author); ?> <?= $this->lang->line('forum_post_count'); ?></a>
                                                                    </span>
                                                                    <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                                                                        <span class="Author-job">STAFF</span>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </aside>
                                                    <div class="TopicPost-body" data-topic-post-body="true">
                                                        <div class="TopicPost-details">
                                                            <div class="Timestamp-details">
                                                                <a class="TopicPost-timestamp" href="#" data-toggle="tooltip" data-tooltip-content="<?= date('Y/m/d', $commentss->date); ?>"><?= date('Y/m/d', $commentss->date); ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="TopicPost-bodyContent" style="color: 00b4ff;" data-topic-post-body-content="true"><?= $commentss->commentary ?></div>
                                                        <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0 || $this->session->userdata('fx_sess_id') == $commentss->author && $this->m_data->getTimestamp() < strtotime('+30 minutes', $commentss->date)) { ?>
                                                            <footer class="TopicPost-actions" data-topic-post-body-content="true">
                                                                <form action="" method="post" accept-charset="utf-8">
                                                                    <p uk-margin>
                                                                        <button name="button_removecomment" type="submit" value="<?= $commentss->id ?>" class="uk-button uk-button-danger"><i class="fa fa-eraser" aria-hidden="true"></i> <?= $this->lang->line('button_remove'); ?></button>
                                                                    </p>
                                                                </form>
                                                            </footer>
                                                            <?php if(isset($_POST['button_removecomment'])) {
                                                                $this->news_model->removeComment($_POST['button_removecomment'], $idlink);
                                                            } ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
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
                                                    <?php if ($this->news_model->getNewsList()->num_rows()) { ?>
                                                        <?php foreach($this->news_model->getNewsList()->result() as $list) { ?>
                                                            <div data-id='' class="ArticleSidebarItem">
                                                                <a href="<?= base_url('news/'.$list->id); ?>" data-external="false" data-article-id='' data-analytics="News - Sidebar" class="ArticleLink ArticleSidebarItem-link">
                                                                    <div style="background-image: url(<?= base_url(); ?>assets/images/news/<?= $list->image ?>)" class="ArticleSidebarItem-image"></div>
                                                                    <div class="ArticleSidebarItem-text">
                                                                        <div class="ArticleSidebarItem-subtitle">
                                                                            <div class="ArticleSidebarItem-subtitleLeft">
                                                                                <div class="ArticleSidebarItem-community"><i class="fa fa-list-alt" aria-hidden="true"></i> <?= $this->lang->line('news_article_subheading'); ?></div>
                                                                            </div>
                                                                            <div class="ArticleSidebarItem-timestamp"><?= date('Y-m-d', $list->date); ?></div>
                                                                        </div>
                                                                        <div class="ArticleSidebarItem-title"><?= $list->title ?></div>
                                                                    </div>
                                                                    <div class="ArticleSidebarItem-progress">
                                                                        <div class="ArticleSidebarItem-progressBar"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-adaptive-large"></div>
                </div>
            </div>
        </div>
