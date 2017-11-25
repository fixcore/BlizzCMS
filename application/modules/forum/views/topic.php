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
<body class="en-us Theme--bnet">

<!-- header -->
<?php $this->load->view('general/icons'); ?>

<!-- main -->

<div role="main">


<div role="main">
	<section class="Topic" data-topic='{ "id":<?= $idlink ?>, "lastPosition":0,"forum":{"id":<?= $idlink ?>},"isSticky":true,"isFeatured":false,"isLocked":true,"isHidden":false,"isFrozen":false, "isSpam":false, "pollId":0 }' data-user='{}'>
		<header class="Topic-header">
			<div class="Container Container--content">
				<h1 class="Topic-heading">
					<span class="Topic-title" data-topic-heading="true"><?= $this->forum_model->getSpecifyPostName($idlink); ?></span>
				</h1>

				<div class="Topic-controls">
          <button class="Topic-button Topic-button--reply" id="Button-reply" >
            <span class="Button-content"><i class="reply icon"></i>Reply</span>
          </button>
        </div>
			</div>
		</header>

		<div class="Topic-content">

	<div class="TopicPost TopicPost--blizzard
" id="post-1" data-topic-post='{"id":"<?= $idlink ?>","valueVoted":0,"rank":{"voteUp":0,"voteDown":0},"author":{"id":"<?= $this->forum_model->getSpecifyPostAuthor($idlink); ?>","name":"<?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?>"}}'>
		<span id="1"></span>
		<div class="TopicPost-content">

			<aside class="TopicPost-author">
				<div class="Author-block">
<div class="Author Author--blizzard" id="" data-topic-post-body-content="true"><a href="#" class="Author-avatar hasNoProfile" ><img src="http://bnetcmsus-a.akamaihd.net/cms/user_avatar/S6VPDCUDYAHS1287737062331.gif" alt="" /></a><div class="Author-details"> <span class="Author-name">
<?= $this->m_data->getUsernameID($this->forum_model->getSpecifyPostAuthor($idlink)); ?>
</span>
<span class="Author-posts">
<a class="Author-posts" href="#" data-toggle="tooltip" data-tooltip-content="View Post History">
0 posts
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

        <div class="TopicPost-bodyContent" data-topic-post-body-content="true">
          <?= $this->forum_model->getSpecifyPostContent($idlink); ?>
        </div>
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

	<section class="Section Section--secondary">
	<div data-topic-post="true" tabindex="0" class="TopicForm is-editing" id="topic-reply">

      <div class="Author-data" data-topic-form = '{}'>
<div class="LoginPlaceholder" id="create-topic"> <header class="LoginPlaceholder-header"><h1 class="LoginPlaceholder-heading">Join the Conversation</h1></header> <div class="LoginPlaceholder-content"> <aside class="LoginPlaceholder-author"> <div class="Author" id="" data-topic-post-body-content="true"><div class="Author-avatar Author-avatar--default"></div><div class="Author-details"><span class="Author-name is-blank"></span> <span class="Author-posts is-blank"></span></div></div> <div class="Author-ignored is-hidden" data-topic-post-ignored-author="true"> <span class="Author-name"> </span><div class="Author-posts Author-posts--ignored">Ignored</div></div> </aside> <div class="LoginPlaceholder-details"> <div class="LogIn-message">Have something to say? Log in to join the conversation.</div> <a class="LogIn-button" href="<?= base_url('user/login'); ?>"> <span class="LogIn-button-content" >Log In</span> </a> </div> </div> </div>      </div>

  </div>
	</section>
</div>