<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> - <?= $this->lang->line('forums'); ?></title>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="index.html" />
	<meta property="og:title" content="Blizzard Forums" />
	<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
	<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/navbar0e26.css?v=58-88" />
	<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e26.css?v=58-88" />
	<!-- UiKit Start -->
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>
<!-- UiKit end -->
<!-- semantic ui Start -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
	<!-- semantic ui End -->
	<!-- custom START -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
	<!-- custom END -->

	<!-- custom footer -->
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<!-- semantic -->
	<script src="<?= base_url(); ?>assets/semanticui/semantic.min.js"></script>
	<!-- semantic -->
	<!-- custom footer -->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="/<?= base_url(); ?>assets/js/jquery.min.js?v=88"></script>
	<![endif]-->

</head>

<!-- <body class="en-us Theme--bnet no-js preload">-->
<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">

<!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
        <div xmlns="http://www.w3.org/1999/xhtml" class="Subnav" style="z-index: 1;">
	<div class="Container Container--content Container--breadcrumbs">

<div class="GameSite-link"> 
	<a class="GameSite-link--heading" href="<?= base_url('forums'); ?>"> 
		<?= $this->lang->line('forums'); ?> 
	</a> 
</div>

<!-- cat -->
<div class="GameSite-link"> 
	<a class="GameSite-link--heading" href="<?= base_url('forums/category/').$this->forum_model->getTopicForum($idlink); ?>"> 
		<?= $this->forum_model->getForumName($this->forum_model->getTopicForum($idlink)); ?> 
	</a> 
</div> 
	
	<div class="Breadcrumbs"> 
		
		<span class="Breadcrumb"> <i class="talk icon"></i>
			<a class="Breadcrumb-content"> 
				 <?= $this->forum_model->getSpecifyPostName($idlink); ?></span>
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

<!-- main -->

<div role="main">


<div role="main">
	<section class="Topic" data-topic='{ "id":<?= $idlink ?>, "lastPosition":0,"forum":{"id":<?= $idlink ?>},"isSticky":true,"isFeatured":false,"isLocked":true,"isHidden":false,"isFrozen":false, "isSpam":false, "pollId":0 }' data-user='{}'>
		<header class="Topic-header">
			<div class="Container Container--content">
				<h1 class="Topic-heading">
					<span class="Topic-title" data-topic-heading="true"><i class="talk icon"></i> <?= $this->forum_model->getSpecifyPostName($idlink); ?></span>
				</h1>
			</div>
		</header>

		<div class="Topic-content">

	<div class="TopicPost TopicPost--blizzard
" id="post-1" data-topic-post='{"id":"<?= $idlink ?>","valueVoted":0,"rank":{"voteUp":0,"voteDown":0},"author":{"id":"<?= $this->forum_model->getSpecifyPostAuthor($idlink); ?>","name":"<?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?>"}}'>
		<span id="1"></span>
		<div class="TopicPost-content">

			<aside class="TopicPost-author">
				<div class="Author-block">
<div class="Author Author--blizzard" id="" data-topic-post-body-content="true"><a href="#" class="Author-avatar hasNoProfile" ><img src="<?= base_url('assets/images/profiles/default.jpg'); ?>" alt="" /></a><div class="Author-details"> <span class="Author-name">
<?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?>
</span>
<span class="Author-posts">
<a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="View Post History">
<?= $this->forum_model->getCountPostAuthor($this->forum_model->getSpecifyPostAuthor($idlink)); ?> <?= $this->lang->line('forum_postCount'); ?>
</a>
</span></div></div>
</div>
</aside>

			<div class="TopicPost-body"  data-topic-post-body="true" >
				<div class="TopicPost-details">
					<div class="Timestamp-details">
					<a class="TopicPost-timestamp" data-toggle="tooltip" data-tooltip-content="<?= date('d-m-Y', $this->forum_model->getSpecifyPostDate($idlink)); ?>">
						<?= date('d-m-Y', $this->forum_model->getSpecifyPostDate($idlink)); ?>
					</a>
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
				<div class="Topic-pagination--footer">
				</div>
				<div class="Topic-pagination--mobile">
				</div>
			</div>
		</footer>
	</section>

<?php if($this->m_data->isLogged() == FALSE && $this->forum_model->getTopicLocked($idlink) == 0) { ?>
<!-- isn't login -->
<section class="Section Section--secondary">
	<div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">

	    <div class="Author-data" data-topic-form=''>
			<div class="LoginPlaceholder" id="create-topic">
				<header class="LoginPlaceholder-header">
					<h1 class="LoginPlaceholder-heading"><i class="comments outline icon"></i> <?= $this->lang->line('text_login_forumstxt'); ?></h1>
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
<?php } ?>


<?php if($this->forum_model->getTopicLocked($idlink) == 1) { ?>
<!-- locked -->
<section xmlns="http://www.w3.org/1999/xhtml" class="Section Section--secondary">
	<div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
      <div class="Author-data" data-topic-form="{&quot;userId&quot;: 207424185944    }">
		<div class="LoginPlaceholder" id="create-topic">
			<header class="LoginPlaceholder-header">
				<h1 class="LoginPlaceholder-heading"><?= $this->lang->line('not_authorized'); ?></h1>
				<a class="LoginPlaceholder-button--close" data-trigger="create.topicpost.forum" data-forum-button="true"></a>
			</header>
			<div class="LoginPlaceholder-content">
				<div class="LoginPlaceholder-details">
					<div class="LogIn-message LogIn-message--center"><?= $this->lang->line('forum_topic_locked'); ?></div>
				</div>
			</div>
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
					<a href="" class="Author-avatar hasNoProfile">
						<img src="<?= base_url('assets/images/profiles/default.jpg'); ?>" alt="" /></a>
					<div class="Author-details">
						<span class="Author-name"> <?= $this->m_data->getUsernameID($commentss->author); ?> </span>
						<span class="Author-posts">
							<a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="<?= $this->lang->line('text_postHistory'); ?>" data-original-title="" title="">
							<?= $this->forum_model->getCountPostAuthor($commentss->author); ?> <?= $this->lang->line('forum_postCount'); ?>
							</a>
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
					<a class="TopicPost-timestamp" href="#" data-toggle="tooltip" data-tooltip-content="<?= date('d-m-Y', $commentss->date); ?>">
						<?= date('d-m-Y', $commentss->date); ?>
					</a>
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
					<button type="submit" name="button_removecomment" class="ui inverted blue button"><?= $this->lang->line('button_remove'); ?></button>
				</form>
			</footer>
			<?php if(isset($_POST['button_removecomment'])) {
				$this->forum_model->removeComment($commentss->id, $idlink);
			}?>
			<?php } ?>
		</div>
	</div>
</div>
<!-- first comments -->
<?php } ?>

<?php if($this->m_data->isLogged() && $this->forum_model->getTopicLocked($idlink) == 0) { ?>
<!-- comment login -->
<section xmlns="http://www.w3.org/1999/xhtml" class="Section Section--secondary">
	<div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">
	        <header class="TopicForm-header">
	            <h1 class="TopicForm-heading"><i class="comments outline icon"></i> <?= $this->lang->line('text_login_forumstxt'); ?></h1>
	        </header>
	        <div class="TopicForm-content">
	            <aside class="TopicForm-author" data-topic-form="{&quot;userId&quot;: 207424185944    }">
					<div class="Author" id="" data-topic-post-body-content="true">
						<a href="" class="Author-avatar hasNoProfile">
							<img src="<?= base_url('assets/images/profiles/default.jpg'); ?>" alt="" />
						</a>
						<div class="Author-details">
							<span class="Author-name"> <?= $this->session->userdata('fx_sess_username'); ?> </span>
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
	                </div>
            
		            <span class="TopicForm-link">
		            	<a href="#" class="TopicForm-link--conduct"><?= $this->lang->line('text_codeConduct'); ?></a>
		            </span>

		            <div class="TopicForm-action--buttons">
		            	<button type="submit" name="button_addcommentary" class="TopicForm-button TopicForm-button--reply" id="submit-button">
		            		<span class="Button-content"><i class="write icon"></i> <?= $this->lang->line('button_addreply'); ?></span>
		            	</button>
		            </div>
		        </form>

		        <?php if(isset($_POST['button_addcommentary'])){
		        	$commentary = $_POST['reply_comment'];
		        	$idsession = $this->session->userdata('fx_sess_id');
		        	$this->forum_model->insertComment($commentary, $idlink, $idsession);
		        }?>
	    </div>
	</div>
</section>
<!-- comment login -->
<?php } ?>


<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
