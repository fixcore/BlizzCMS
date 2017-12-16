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

<body class="en-us Theme--<?= $this->m_general->getTheme(); ?> glass-header preload" lang="en" data-locale="en-gb" data-device="desktop" data-name="index">

<!-- header -->
    <?php $this->load->view('general/icons'); ?>
    <!-- submenu -->
    </div>
    </div>
    </div>
    <!-- submenu -->

<div role="main">
	<section class="Community">
		<header class="Community-header">
			<div class="Community-wrapper">
			<div class="Welcome">
				<div class="Welcome-logo--container">	
					<p class="Welcome-text"><i class="talk outline icon"></i> <?= $this->lang->line('forum_welcometext'); ?></span></p>
				</div>
			</div>
		</div>
		</header>

<!-- category START -->
<?php foreach($this->forum_model->getCategory() as $categorys) { ?>
<div class="ForumCategory ">
	<header class="ForumCategory-header">
	<br>
		<h1 class="ForumCategory-heading"><i class="bookmark icon"></i> <?= $categorys->categoryName ?></h1>
			<button class="Community-button--search" id="toggle-search-field" data-trigger="toggle.search.field" type="button">
				<span class="Button-content">
					<i class="Icon"></i>
				</span>
			</button>
	</header>

<div class="ForumCards ">

<?php foreach($this->forum_model->getCategoryForums($categorys->id) as $sections) { ?>
	<?php if ($sections->type == 1 || $sections->type == 3) { ?>
		<a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" class="ForumCard ForumCard--content  ">
			<i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/icons/<?= $sections->icon ?>')"></i>
			<div class="ForumCard-details">
				<h1 class="ForumCard-heading"><?= $sections->name ?>
				</h1>
					<span class="ForumCard-description"><?= $sections->description ?></span>
			</div>
		</a>
	<?php } elseif($sections->type == 2) { ?>
	<?php if($this->m_data->isLogged()) { ?>
	<?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
	<a href="<?= base_url('forums'); ?>/category/<?= $sections->id ?>" style="border-color: #00aeff; border-radius: 10px;" class="ForumCard ForumCard--content ">
		<i class="ForumCard-icon" style="background-image: url('<?= base_url();?>assets/images/forums/icons/<?= $sections->icon ?>')"></i>
		<div class="ForumCard-details">
			<h1 class="ForumCard-heading"><?= $sections->name ?>
			</h1>
				<span class="ForumCard-description"><?= $sections->description ?></span>
		</div>
	</a>
	<?php } ?>
	<?php } ?>
	<?php } ?>
<?php } ?>

</div>
</div>
<?php } ?>
<!-- category END -->

	</section>
</div>
