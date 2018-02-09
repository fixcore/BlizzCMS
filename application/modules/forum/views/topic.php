<?php if (isset($_POST['button_editTopic'])) {
    $title = $_POST['edittopic_title'];
    $description = $_POST['edittopic_description'];

    if (isset($_POST['check_highl']) && $_POST['check_highl'] == '1')
        $highl = '1'; else $highl = '0';

    if (isset($_POST['check_lock']) && $_POST['check_lock'] == '1')
        $lock = '1'; else $lock = '0';

    $this->forum_model->updateTopic($idlink, $title, $description, $lock, $highl);
}?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $this->config->item('ProjectName'); ?> | <?= $this->lang->line('nav_forums'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-general.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/blizzcms-app.css">
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
    <div class="Subnav">
        <div class="Container Container--content Container--breadcrumbs">
            <div class="GameSite-link">
                <a class="GameSite-link--heading"><i class="Icon"></i>World of Warcraft</a>
            </div>
            <div class="Breadcrumbs">
                <span class="Breadcrumb">
                    <a href="<?= base_url('forums'); ?>" class="Breadcrumb-content">
                        <span class="Breadcrumb-divider Home"><i class="Icon"></i></span>
                        <?= $this->lang->line('nav_forums'); ?>
                    </a>
                </span>
                <span class="Breadcrumb">
                    <span class="Breadcrumb-divider"><i class="Icon"></i></span>
                    <a class="Breadcrumb-content is-active"><?= $this->forum_model->getSpecifyPostName($idlink); ?></a>
                </span>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- submenu -->
    <br><br><br>
    <div role="main">
        <section class="Topic" data-topic='{ "id":<?= $idlink ?>, "lastPosition":0,"forum":{"id":<?= $idlink ?>},"isSticky":true,"isFeatured":false,"isLocked":true,"isHidden":false,"isFrozen":false, "isSpam":false, "pollId":0 }' data-user='{}'>
            <header class="Topic-header">
                <div class="Container Container--content">
                    <h1 class="Topic-heading">
                        <a class="Game-logo"></a>
                        <span class="Topic-title" data-topic-heading="true" style="color: #fff;"><?= $this->forum_model->getSpecifyPostName($idlink); ?></span>
                        <?php if($this->m_data->isLogged()) { ?>
                            <?php if($this->forum_model->getSpecifyPostAuthor($idlink) == $this->session->userdata('fx_sess_id')) { ?>
                                <p uk-margin>
                                    <a uk-toggle="target: #editTopic" class="Forum-button Forum-button--new" id="toggle-create-topic" data-forum-button="true" data-trigger="create.topicpost.forum">
                                        <span class="Button-content"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?= $this->lang->line('button_edit_topic'); ?></span>
                                    </a>
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </h1>
                </div>
            </header>
            <div class="Topic-content">
                <div class="TopicPost TopicPost--blizzard" id="post-1" data-topic-post='{"id":"<?= $idlink ?>","valueVoted":0,"rank":{"voteUp":0,"voteDown":0},"author":{"id":"<?= $this->forum_model->getSpecifyPostAuthor($idlink); ?>","name":"<?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?>"}}'>
                    <span id="1"></span>
                    <div class="TopicPost-content">
                        <aside class="TopicPost-author">
                            <div class="Author-block">
                                <?php if($this->m_data->getRank($this->forum_model->getSpecifyPostAuthor($idlink)) > 0) { ?>
                                <div class="Author Author--blizzard" id="" data-topic-post-body-content="true">
                                <?php } else { ?>
                                <div class="Author" id="" data-topic-post-body-content="true">
                                <?php } ?>
                                    <a href="<?= base_url('profile/'.$this->m_data->getIDAccount($this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)))); ?>" class="Author-avatar hasProfile">
                                        <?php if($this->m_general->getUserInfoGeneral($this->forum_model->getSpecifyPostAuthor($idlink))->num_rows()) { ?>
                                            <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($this->forum_model->getSpecifyPostAuthor($idlink))); ?>" alt="" />
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/images/profiles/default.png'); ?>" alt="" />
                                        <?php } ?>
                                    </a>
                                    <div class="Author-details">
                                        <span class="Author-name"><?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?></span>
                                        <span class="Author-posts">
                                            <a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="View Post History"><?= $this->forum_model->getCountPostAuthor($this->forum_model->getSpecifyPostAuthor($idlink)); ?> <?= $this->lang->line('forum_post_count'); ?></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="TopicPost-body"  data-topic-post-body="true">
                            <div class="TopicPost-details">
                                <div class="Timestamp-details">
                                    <a class="TopicPost-timestamp" data-toggle="tooltip" data-tooltip-content="<?= date('F/d/Y - l H:i A', $this->forum_model->getSpecifyPostDate($idlink)); ?>"><?= date('F/d/Y - l H:i A', $this->forum_model->getSpecifyPostDate($idlink)); ?></a>
                                    <span class="TopicPost-rank TopicPost-rank--none" data-topic-post-rank="true"></span>
                                </div>
                            </div>
                            <!-- colors -->
                            <?php if($this->m_data->getRank($this->forum_model->getSpecifyPostAuthor($idlink)) > 0) { ?>
                                <div class="TopicPost-bodyContent" style="color: #<?= $this->config->item('staff_forum_color'); ?>; data-topic-post-body-content="true">
                                        <?= $this->forum_model->getSpecifyPostContent($idlink); ?>
                                </div>
                            <?php } else { ?>
                                <div class="TopicPost-bodyContent" style="color: white;" data-topic-post-body-content="true">
                                    <?= $this->forum_model->getSpecifyPostContent($idlink); ?>
                                </div>
                            <?php } ?>
                            <!-- colors -->
                        </div>
                    </div>
                </div>
                <footer class="Topic-footer">
                    <div class="Container Container--content">
                        <div class="Topic-pagination--footer"></div>
                        <div class="Topic-pagination--mobile"></div>
                    </div>
                </footer>
        </section>

        <?php if(!$this->m_data->isLogged() && $this->forum_model->getTopicLocked($idlink) == 0) { ?>
            <!-- isn't login -->
            <section class="Section Section--secondary">
                <div class="LoginPlaceholder" id="topic-reply">
                    <header class="LoginPlaceholder-header">
                        <h1 class="LoginPlaceholder-heading"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('forum_comment_header'); ?></h1>
                    </header>
                    <div class="LoginPlaceholder-content">
                        <aside class="LoginPlaceholder-author">
                            <div class="Author" id="" data-topic-post-body-content="true">
                                <div class="Author-avatar Author-avatar--default"></div>
                                <div class="Author-details">
                                    <span class="Author-name is-blank"></span>
                                    <span class="Author-posts is-blank"></span>
                                </div>
                            </div>
                            <div class="Author-ignored is-hidden" data-topic-post-ignored-author="true">
                                <span class="Author-name"></span>
                                <div class="Author-posts Author-posts--ignored"></div>
                            </div>
                        </aside>
                        <div class="LoginPlaceholder-details">
                            <div class="LogIn-message"><?= $this->lang->line('forum_comment_locked'); ?></div>
                            <a class="LogIn-button" href="<?= base_url('login'); ?>">
                                <span class="LogIn-button-content" ><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('button_login'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- isn't login -->
        <?php } ?>

        <?php if($this->forum_model->getTopicLocked($idlink) == 1) { ?>
            <!-- locked -->
            <section class="Section Section--secondary">
                <div class="LoginPlaceholder" id="topic-reply">
                    <header class="LoginPlaceholder-header">
                        <h1 class="LoginPlaceholder-heading"><i class="fa fa-lock" aria-hidden="true"></i> <?= $this->lang->line('forum_not_authorized'); ?></h1>
                    </header>
                    <div class="LoginPlaceholder-content">
                        <aside class="LoginPlaceholder-author">
                            <div class="Author" id="" data-topic-post-body-content="true">
                                <div class="Author-avatar Author-avatar--default"></div>
                                <div class="Author-details">
                                    <span class="Author-name is-blank"></span>
                                    <span class="Author-posts is-blank"></span>
                                </div>
                            </div>
                            <div class="Author-ignored is-hidden" data-topic-post-ignored-author="true">
                                <span class="Author-name"></span>
                                <div class="Author-posts Author-posts--ignored"></div>
                            </div>
                        </aside>
                        <div class="LoginPlaceholder-details">
                            <div class="LogIn-message"><?= $this->lang->line('forum_topic_locked'); ?></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- locked -->
        <?php } ?>

        <?php foreach ($this->forum_model->getComments($idlink)->result() as $commentss) { ?>
            <!-- first comments -->
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
                                <a href="<?= base_url('profile/'.$commentss->author); ?>" class="Author-avatar hasProfile">
                                    <?php if($this->m_general->getUserInfoGeneral($commentss->author)->num_rows()) { ?>
                                        <img src="<?= base_url('assets/images/profiles/').$this->m_data->getNameAvatar($this->m_data->getImageProfile($commentss->author)); ?>" alt="" />
                                    <?php } else { ?>
                                        <img src="<?= base_url('assets/images/profiles/default.png'); ?>" alt="" />
                                    <?php } ?>
                                </a>
                                <div class="Author-details">
                                    <span class="Author-name"><?= $this->m_data->getUsernameID($commentss->author); ?></span>
                                    <span class="Author-posts">
                                        <a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="<?= $this->lang->line('forum_post_history'); ?>" data-original-title="" title=""><?= $this->forum_model->getCountPostAuthor($commentss->author); ?> <?= $this->lang->line('forum_post_count'); ?></a>
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
                                <a class="TopicPost-timestamp" href="#" data-toggle="tooltip" data-tooltip-content="<?= date('F/d/Y - l H:i A', $commentss->date); ?>"><?= date('F/d/Y - l H:i A', $commentss->date); ?></a>
                            </div>
                        </div>
                        <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                        <div class="TopicPost-bodyContent" style="color: <?= $this->config->item('staff_forum_color'); ?>;" data-topic-post-body-content="true">
                        <?php } else { ?>
                        <div class="TopicPost-bodyContent" data-topic-post-body-content="true">
                        <?php } ?>
                            <?= $commentss->commentary ?>
                        </div>
                        <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0 || $this->session->userdata('fx_sess_id') == $commentss->author && $this->m_data->getTimestamp() < strtotime('+30 minutes', $commentss->date)) { ?>
                            <footer class="TopicPost-actions" data-topic-post-body-content="true">
                                <form action="" method="post" accept-charset="utf-8">
                                    <p uk-margin>
                                        <button name="button_removecomment" type="submit" value="<?= $commentss->id ?>" class="uk-button uk-button-danger"><i class="fa fa-eraser" aria-hidden="true"></i> <?= $this->lang->line('button_remove'); ?></button>
                                    </p>
                                </form>
                            </footer>
                            <?php if(isset($_POST['button_removecomment'])) {
                                $this->forum_model->removeComment($_POST['button_removecomment'], $idlink);
                            }?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- first comments -->
        <?php } ?>

        <?php if($this->m_data->isLogged() && $this->forum_model->getTopicLocked($idlink) == 0) { ?>
            <!-- comment login -->
            <section class="Section Section--secondary">
                <div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
                    <header class="TopicForm-header">
                        <h1 class="TopicForm-heading"><i class="fa fa-comments-o" aria-hidden="true"></i> <?= $this->lang->line('forum_comment_header'); ?></h1>
                    </header>
                    <div class="TopicForm-content">
                        <aside class="TopicForm-author" data-topic-form="{&quot;userId&quot;: 207424185944    }">
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
                                    <span class="Author-posts">
                                        <?= $this->forum_model->getCountPostAuthor($this->session->userdata('fx_sess_id')); ?> <?= $this->lang->line('forum_post_count'); ?>
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
                                <a href="#" class="TopicForm-link--conduct"><?= $this->lang->line('forum_code_conduct'); ?></a>
                            </span>
                            <div class="TopicForm-action--buttons">
                                <button type="submit" name="button_addcommentary" class="TopicForm-button TopicForm-button--reply" id="submit-button">
                                    <span class="Button-content"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_add_reply'); ?></span>
                                </button>
                            </div>
                        </form>

                        <?php if(isset($_POST['button_addcommentary'])){
                            $commentary = $_POST['reply_comment'];

                            if (!is_null($commentary) && 
                                !empty($commentary) && 
                                $commentary != '' && 
                                $commentary != ' ') {
                                $idsession = $this->session->userdata('fx_sess_id');
                                $this->forum_model->insertComment($commentary, $idlink, $idsession);
                            }

                        }?>
                    </div>
                </div>
            </section>
            <!-- comment login -->
        <?php } ?>
    </div>

    <div id="editTopic" class="uk-modal-container" uk-modal="bg-close: false">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><i class="fa fa-pencil" aria-hidden="true"></i> <?= $this->lang->line('button_edit_topic'); ?></h2>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <div class="uk-modal-body">
                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_title'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
                                <input class="uk-input" name="edittopic_title" required value="<?= $this->forum_model->getTopicTitle($idlink); ?>" type="text" placeholder="<?= $this->forum_model->getTopicTitle($idlink); ?>">
                            </div>
                        </div>
                    </div>

                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                        <script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
                    <?php } else { ?>
                        <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                    <?php } ?>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-uppercase"><?= $this->lang->line('form_description'); ?></label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1">
                                <textarea required="" name="edittopic_description" id="ckeditor_edit" rows="10" cols="80"><?= $this->forum_model->getTopicDescription($idlink); ?></textarea>
                                <script>
                                    CKEDITOR.replace('ckeditor_edit');
                                </script>
                            </div>
                        </div>
                    </div>
                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
                        <div class="uk-margin">
                            <div class="uk-form-controls">
                                <div class="uk-width-1-1 uk-text-center">
                                    <label><input id="hightl" class="uk-checkbox" type="checkbox" name="check_highl" value="1"> <?= $this->lang->line('form_highl'); ?></label>
                                    <span style="display:inline-block; width: 14px;"></span>
                                    <label><input id="llock" class="uk-checkbox" type="checkbox" name="check_lock" value="1"> <?= $this->lang->line('form_lock'); ?></label>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="uk-modal-footer uk-text-right actions">
                    <button class="uk-button uk-button-default uk-modal-close" type="button"><?= $this->lang->line('button_cancel'); ?></button>
                    <button class="uk-button uk-button-primary" type="submit" name="button_editTopic"><?= $this->lang->line('button_save'); ?></button>
                </div>
            </form>
        </div>
    </div>
