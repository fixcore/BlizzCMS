<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('home'); ?></title>
    <script src="<?= base_url(); ?>assets/js/9013706011.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzard-dc9d0faea4c4a01c35477637614e4bbab87305d0b07b1dfb8e0f09a21283294707def12b40e4cb9f13b56d8cbd92e8b40a3c956f0da1b5cf1d25b558efeffc31.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-65d540bb92d74ad1518ba050a969a68fe7cca3e0b202351c63b7742d39e87267a3bd8210f6a567b4b05819727690c48601a94036e4e498deb0519f50edb50a65.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- UiKit Start -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>core/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="<?= base_url(); ?>core/uikit/js/uikit.min.js"></script>
    <script src="<?= base_url(); ?>core/uikit/js/uikit-icons.min.js"></script>
    <!-- UiKit end -->
    <!-- font-awesome Start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font-awesome End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- custom footer -->
</head>

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">
    <!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
        <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
    <div class="Container Container--content Container--breadcrumbs">

<div class="GameSite-link"> 
    <a class="GameSite-link--heading" href="<?= base_url('news'); ?>"> 
        <?= $this->lang->line('news'); ?> 
    </a> 
</div> 
    
    <div class="Breadcrumbs"> 
        
        <span class="Breadcrumb">
            <a class="Breadcrumb-content"> 
                 <i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->news_model->getNewTitle($idlink); ?>
            </a> 
        </span>

    </div>

<div class="User-menu"> 
    <!-- right -->
    <span class="Breadcrumb"> 
        <a class="Breadcrumb-content"> 
            <!-- logged -->
            <?php if ($this->m_data->isLogged()) { ?>
                    <!-- credits -->
                    <img src="<?= base_url('assets/images/dp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
                    <?= $this->m_general->getCharDPTotal($this->session->userdata('fx_sess_id')); ?>
                     | 
                    <img src="<?= base_url('assets/images/vp.jpg'); ?>" alt="" style="width: 20px; height: 20px;">
                    <?= $this->m_general->getCharVPTotal($this->session->userdata('fx_sess_id')); ?>
                    <!-- credits -->
            <?php } ?>
            <!-- logged -->
        </a> 
    </span>
    <!-- right -->
</div>

    </div>
</div>

    </div>
    </div>
    </div>
    <!-- submenu -->

    <!-- content START -->
    <div class="Page-container">
        <div class="Page-content en-US">
            <div style="" class="HeroPane HeroPane--detail HeroPane--adaptive">
                <div style="background-image:url(<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($idlink) ?>)" class="HeroPane-background"></div>
                <div class="HeroPane-padding">
                    <div class="HeroPane-mobilePadding"></div>
                    <div class="HeroPane-desktopPadding"></div>
                </div>
                <div class="HeroPane-content">
                    <div class="max-sm max-left align-left">
                        <div class="Heading Heading--articleHeadline" style="color: #fff;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= $this->news_model->getNewTitle($idlink); ?></div>
                        <div class="space-medium"></div>
                        <div class="space-adaptive-large"></div>
                    </div>
                </div>
            </div>
            <div class="Pane Pane--flush Pane--adaptive Pane--backgroundTop Pane--innerBorderTop">
                <div style="" class="Pane-content">
                    <div class="space-adaptive-medium"></div>
                    <div class="max-sm max-left align-left">
                        <div class="Markup Markup--html">
                            <p><?= $this->news_model->getNewDescription($idlink); ?></p>
                        </div>
                        <div class="space-medium"></div>
                        <div class="space-medium"></div>
                    </div>
                    <div class="space-large hide show-sm"></div>
                    <div class="space-small hide-sm"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- content END -->

<hr class="uk-divider-icon">


<!-- comments -->

<!-- !logged -->
<?php if(!$this->m_data->isLogged()) { ?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <!-- isn't login -->
    <section class="Section Section--secondary">
        <div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
            <div class="Author-data" data-topic-form=''>
                <div class="LoginPlaceholder" id="create-topic">
                    <header class="LoginPlaceholder-header">
                        <h1 class="LoginPlaceholder-heading"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('text_login_forumstxt'); ?></h1>
                    </header>
                    <div class="LoginPlaceholder-content">
                        <div class="LoginPlaceholder-details">
                            <div class="LogIn-message"><?= $this->lang->line('text_login_forums'); ?></div>
                            <a class="LogIn-button" href="<?= base_url('login'); ?>">
                                <span class="LogIn-button-content" ><?= $this->lang->line('button_log'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- isn't login -->
    </div>
</div>
<hr class="uk-divider-icon">
<?php } ?>
<!-- !logged -->

<?php if($this->m_data->isLogged()) { ?>
<!-- logged -->
    <section xmlns="http://www.w3.org/1999/xhtml" class="Section Section--secondary">
        <div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
            <header class="TopicForm-header">
                <h1 class="TopicForm-heading"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('text_login_forumstxt'); ?></h1>
            </header>
            <div class="TopicForm-content">
                <aside class="TopicForm-author" data-topic-form="{&quot;userId&quot;: 207424185944    }">
                    <div class="Author" id="" data-topic-post-body-content="true">
                        <a href="" class="Author-avatar hasNoProfile">
                            <?php if($this->m_general->getUserInfoGeneral($this->session->userdata('fx_sess_id'))->num_rows() > 0) { ?>
                                <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->session->userdata('fx_sess_id'))); ?>" alt="" />
                            <?php } else { ?>
                                <img src="<?= base_url('assets/images/profiles/default.jpg'); ?>" alt="" />
                            <?php } ?>
                        </a>
                        <div class="Author-details">
                            <span class="Author-name"><?= $this->session->userdata('fx_sess_username'); ?></span>
                            <span class="Author-posts">
                                <?= $this->forum_model->getCountPostAuthor($this->session->userdata('fx_sess_id')); ?> <?= $this->lang->line('forum_postCount'); ?>
                            </span>
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
                        <a href="#" class="TopicForm-link--conduct"><?= $this->lang->line('text_codeConduct'); ?></a>
                    </span>
                    <div class="TopicForm-action--buttons">
                        <button type="submit" name="button_addcommentary" class="TopicForm-button TopicForm-button--reply" id="submit-button">
                            <span class="Button-content"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_addreply'); ?></span>
                        </button>
                    </div>
                </form>

                <?php if(isset($_POST['button_addcommentary'])){
                    $commentary = $_POST['reply_comment'];
                    $idsession = $this->session->userdata('fx_sess_id');
                    $this->news_model->insertComment($commentary, $idlink, $idsession);
                }?>
            </div>
        </div>
    </section>
<!-- logged -->
<?php } ?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- content -->
<?php foreach($this->news_model->getComments($idlink)->result() as $commentss) { ?>
        <div class="TopicPost">
    <!-- Deprecated: Deeplink for existing Quotes 02/19/2016 -->
    <div class="TopicPost-content">
        <aside class="TopicPost-author">
            <div class="Author-block">
                <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                    <div class="Author Author--blizzard" id="" data-topic-post-body-content="true">
                <?php } else { ?>
                    <div class="Author" id="" data-topic-post-body-content="true">
                <?php } ?>
                    <a href="" class="Author-avatar hasNoProfile">
                        <?php if($this->m_general->getUserInfoGeneral($commentss->author)->num_rows() > 0) { ?>
                            <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($commentss->author)); ?>" alt="" />
                        <?php } else { ?>
                            <img src="<?= base_url('assets/images/profiles/default.jpg'); ?>" alt="" />
                        <?php } ?>
                    </a>
                    <div class="Author-details">
                        <span class="Author-name"><?= $this->m_data->getUsernameID($commentss->author); ?></span>
                        <span class="Author-posts">
                            <a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="View Post History" data-original-title="" title=""><?= $this->forum_model->getCountPostAuthor($commentss->author); ?> <?= $this->lang->line('forum_postCount'); ?></a>
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
            <div class="TopicPost-bodyContent" style="color: 00b4ff;" data-topic-post-body-content="true">
                <?= $commentss->commentary ?>
            </div>
            <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0 || $this->session->userdata('fx_sess_id') == $commentss->author && $this->m_data->getTimestamp() < strtotime('+30 minutes', $commentss->date)) { ?>
                <footer class="TopicPost-actions" data-topic-post-body-content="true">
                    <form action="" method="post" accept-charset="utf-8">
                        <p uk-margin>
                            <button name="button_removecomment" type="submit" class="uk-button uk-button-danger"><?= $this->lang->line('button_remove'); ?></button>
                        </p>
                    </form>
                </footer>
                <?php if(isset($_POST['button_removecomment'])) {
                    $this->forum_model->removeComment($commentss->id, $idlink);
                }?>
            <?php } ?>
        </div>
    </div>
</div>

<?php } ?>
        <!-- content -->
    </div>
</div>