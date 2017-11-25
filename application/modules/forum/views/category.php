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



<body class="en-us Theme--bnet">

<!-- header -->
<?php $this->load->view('general/icons'); ?>

<!-- main -->

<div role="main">
	<section class="Forum">

		<header class="Forum-header">
			<div class="Container Container--content">
				<h1 class="Forum-heading">
					<?= $this->forum_model->getCategoryName($idlink); ?>
				<div class="Forum-controls">
					<button class="Forum-button Forum-button--new" id="toggle-create-topic"  data-forum-button="true" data-trigger="create.topicpost.forum" type="button">
						<span class="Overlay-element" ></span>
						<span class="Button-content">
							New Topic
						</span>
					</button>
				</div>
			</div>

		</header>
<!-- main -->

<div class="Forum-content" data-track="nexus.checkbox" id="forum-topics">
	<div class="Forum-ForumTopicList ">
		<div data-topics-container="sticky">
		<?php foreach($this->forum_model->getSpecifyCategoryPosts($idlink)->result() as $lists) { ?>
			<a xmlns="http://www.w3.org/1999/xhtml" class="ForumTopic ForumTopic--sticky has-blizzard-post is-locked is-inactive" href="<?= base_url(); ?>forum/topic/<?= $lists->id ?>" data-created-date="<?= date('d-m-Y', $lists->date); ?>"  data-creator="<?= $this->m_data->getUsernameID($lists->author); ?>">

				<span class="ForumTopic-details">
					<span class="ForumTopic-heading">
					<span class="ForumTopic-title--wrapper">
						<span class="ForumTopic-title" data-toggle="tooltip" data-tooltip-content="Content description" data-original-title="" title="">
							<!-- title -->
							<i class="blue users icon"></i><?= $lists->title; ?>
							<!-- title -->
							<i class="statusIcon statusIcon-mobile" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
						</span>
					</span>

						<i class="statusIcon statusIcon-desktop" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
					</span>
					<span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
					<span class="ForumTopic-timestamp "><?= date('d-m-Y', $lists->date); ?></span>
					<span class="ForumTopic-replies">
						<i class="inverted blue reply icon"></i>
						<span>0</span>
					</span>
				</span>
			</a>
			<?php } ?>
			<!-- test -->
			<!-- test -->
		</div>
	</div>
</div>

	</section>

</div>
