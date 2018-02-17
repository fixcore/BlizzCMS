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
                    <h1 class="uk-article-title" style="color: #fff;"><a class="uk-link-reset" href=""><?= $this->news_model->getNewTitle($idlink); ?></a></h1>
                    <p class="uk-article-meta" style="color: #fff;"><?= $this->lang->line('news_article_published'); ?> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', $this->news_model->getNewlogDate($idlink)); ?></p>
                    <img class="uk-margin-medium-bottom" src="<?= base_url(); ?>assets/images/news/<?= $this->news_model->getNewImage($idlink); ?>" height="300" alt="">
                    <p><?= $this->news_model->getNewDescription($idlink); ?></p>
                    <hr class="uk-divider-icon">
                    <?php if(!$this->m_data->isLogged()) { ?>
                        <div class="glass-section">
                            <div class="topicplaceholder">
                                <div class="topicplaceholder-header">
                                    <h1 class="topicplaceholder-title uk-text-center"><span uk-icon="icon: comment; ratio: 2"></span> <?= $this->lang->line('forum_comment_header'); ?></h1>
                                </div>
                                <div class="topicplaceholder-content">
                                    <div class="topicplaceholder-details uk-align-center">
                                        <div class="topicplaceholder-message"><?= $this->lang->line('forum_comment_locked'); ?></div>
                                        <a href="<?= base_url('login'); ?>">
                                            <button class="uk-button uk-button-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> <?= $this->lang->line('button_login'); ?></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="uk-divider-icon">
                    <?php } ?>
                    <!-- !logged -->
                    <!-- logged -->
                    <?php if($this->m_data->isLogged()) { ?>
                        <div class="glass-section">
                            <div class="TopicForm is-editing">
                                <div class="TopicForm-header">
                                    <h1 class="TopicForm-heading uk-text-center"><span uk-icon="icon: comment; ratio: 2"></span> <?= $this->lang->line('forum_comment_header'); ?></h1>
                                </div>
                                <div class="TopicForm-content">
                                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
                                    <form class="Form uk-align-center" method="post" action="" data-post-form="true" accept-charset="utf-8">
                                        <textarea tabindex="1" spellcheck="true" name="reply_comment" id="ckeditor" rows="10" cols="80" required></textarea>
                                        <script>
                                            CKEDITOR.replace('ckeditor');
                                        </script>
                                        <button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="button_addcommentary" id="submit-button"><i class="fa fa-reply" aria-hidden="true"></i> <?= $this->lang->line('button_add_reply'); ?></button>
                                        <a href="#" class="TopicForm-link--conduct"><?= $this->lang->line('forum_code_conduct'); ?></a>

                                    </form>

                                    <?php if(isset($_POST['button_addcommentary'])) {
                                        $commentary = $_POST['reply_comment'];

                                        if (!is_null($commentary) && 
                                            !empty($commentary) && 
                                            $commentary != '' && 
                                            $commentary != ' ') {
                                                $idsession = $this->session->userdata('fx_sess_id');
                                                $this->news_model->insertComment($commentary, $idlink, $idsession);
                                            }
                                    }?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- logged -->
                    <?php foreach($this->news_model->getComments($idlink)->result() as $commentss) { ?>
                        <div class="TopicPost">
                            <div class="TopicPost-content">
                                <aside class="TopicPost-author">
                                    <div class="Author-block">
                                        <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                                        <div class="Author Author-staff">
                                        <?php } else { ?>
                                        <div class="Author">
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
                                                    <a href="" class="Author-posts"><?= $this->forum_model->getCountPostAuthor($commentss->author); ?> <?= $this->lang->line('forum_post_count'); ?></a>
                                                </span>
                                                <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                                                    <span class="Author-job">STAFF</span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <div class="TopicPost-body">
                                    <div class="TopicPost-details">
                                        <div class="Timestamp-details">
                                            <span class="TopicPost-timestamp"><?= date('Y/m/d', $commentss->date); ?></span>
                                        </div>
                                    </div>
                                    <?php if($this->m_data->getRank($commentss->author) > 0) { ?>
                                    <div class="TopicPost-bodyContent" style="color: <?= $this->config->item('staff_forum_color'); ?>;">
                                    <?php } else { ?>
                                    <div class="TopicPost-bodyContent">
                                    <?php } ?>
                                        <?= $commentss->commentary ?>
                                    </div>
                                    <?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0 || $this->session->userdata('fx_sess_id') == $commentss->author && $this->m_data->getTimestamp() < strtotime('+30 minutes', $commentss->date)) { ?>
                                        <footer class="TopicPost-actions">
                                            <form action="" method="post" accept-charset="utf-8">
                                                <p uk-margin>
                                                    <button name="button_removecomment" type="submit" value="<?= $commentss->id ?>" class="uk-button uk-button-danger uk-button-small"><i class="fa fa-eraser" aria-hidden="true"></i> <?= $this->lang->line('button_remove'); ?></button>
                                                </p>
                                            </form>
                                        </footer>
                                        <?php if(isset($_POST['button_removecomment'])) {
                                            $this->news_model->removeComment($_POST['button_removecomment'], $idlink);
                                        }?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </article>
            </div>
            <div class="uk-width-1-5@l"></div>
        </div>
