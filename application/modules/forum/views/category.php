<?php if(isset($_POST['button_createTopic'])){

	$title 			= $_POST['topic_title'];
	$description 	= $_POST['topic_description'];

    if (isset($_POST['check_highl']) && $_POST['check_highl'] == '1')
        $highl = '1'; else $highl = '0';

    if (isset($_POST['check_lock']) && $_POST['check_lock'] == '1')
    	$lock = '1'; else $lock = '0';

	$this->forum_model->insertTopic($idlink, $title, $this->session->userdata('fx_sess_id'), $description, $lock, $highl);

}?>
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
	
	<div class="Breadcrumbs"> 
		
		<span class="Breadcrumb"> <i class="bookmark icon"></i>
			<a class="Breadcrumb-content"> 
				 <?= $this->forum_model->getCategoryName($idlink); ?>
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
	<section class="Forum">

		<header class="Forum-header">
			<div class="Container Container--content">
				<h1 class="Forum-heading">
					<i class="bookmark icon"></i> <?= $this->forum_model->getCategoryName($idlink); ?>
				<div class="Forum-controls">
					<?php if($this->m_data->isLogged()) { ?>
						<?php if($this->forum_model->getType($idlink) == 1) { ?>
						<button id="nnewtopic" class="Forum-button Forum-button--new" id="toggle-create-topic"  data-forum-button="true" data-trigger="create.topicpost.forum" type="button">
							<span class="Overlay-element" ></span>
								<span class="Button-content">
									<i class="write icon"></i> <?= $this->lang->line('forum_newtopic'); ?>
								</span>
						</button>
						<?php } elseif ($this->forum_model->getType($idlink) == 2 || $this->forum_model->getType($idlink) == 3) { ?>
								<?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
									<button id="nnewtopic" class="Forum-button Forum-button--new" id="toggle-create-topic"  data-forum-button="true" data-trigger="create.topicpost.forum" type="button">
										<span class="Overlay-element" ></span>
											<span class="Button-content">
												<i class="write icon"></i> <?= $this->lang->line('forum_newtopic'); ?>
											</span>
									</button>
								<?php } ?>
						<?php } ?>
					<?php } ?>
				</div>
			</div>

		</header>
<!-- main -->

<div class="Forum-content" data-track="nexus.checkbox" id="forum-topics">
	<div class="Forum-ForumTopicList ">
		<div data-topics-container="sticky">
		<?php foreach($this->forum_model->getSpecifyCategoryPostsPined($idlink)->result() as $lists) { ?>
			<a xmlns="http://www.w3.org/1999/xhtml" style="border-color: #00aeff; border-radius: 10px;"  class="ForumTopic ForumTopic--sticky has-blizzard-post is-locked is-inactive" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>" data-created-date="<?= date('d-m-Y', $lists->date); ?>"  data-creator="<?= $this->m_data->getUsernameID($lists->author); ?>">

				<span class="ForumTopic-details">
					<span class="ForumTopic-heading">
					<span class="ForumTopic-title--wrapper">
						<span class="ForumTopic-title" data-toggle="tooltip" data-tooltip-content="Content description" data-original-title="" title="">
							<!-- title -->
							<i class="talk icon"></i><?= $lists->title; ?>
							<!-- title -->
							<i class="statusIcon statusIcon-mobile" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
						</span>
					</span>

						<i class="statusIcon statusIcon-desktop" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
					</span>
					<?php if($this->m_data->getRank($lists->author) > 0) { ?>
					<span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
					<?php } else { ?>
					<span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
					<?php } ?>
					<span class="ForumTopic-timestamp "><?= date('d-m-Y', $lists->date); ?></span>
					<span class="ForumTopic-replies">
						<i class="inverted blue reply icon"></i>
						<span><?= $this->forum_model->getComments($lists->id)->num_rows(); ?></span>
					</span>
				</span>
			</a>
			<?php } ?>
			<!-- test -->
			<hr>
			<?php foreach($this->forum_model->getSpecifyCategoryPosts($idlink)->result() as $lists) { ?>
			<a xmlns="http://www.w3.org/1999/xhtml" class="ForumTopic ForumTopic--sticky has-blizzard-post is-locked is-inactive" href="<?= base_url('forums'); ?>/topic/<?= $lists->id ?>" data-created-date="<?= date('d-m-Y', $lists->date); ?>"  data-creator="<?= $this->m_data->getUsernameID($lists->author); ?>">

				<span class="ForumTopic-details">
					<span class="ForumTopic-heading">
					<span class="ForumTopic-title--wrapper">
						<span class="ForumTopic-title" data-toggle="tooltip" data-tooltip-content="Content description" data-original-title="" title="">
							<!-- title -->
							<i class="talk icon"></i><?= $lists->title; ?>
							<!-- title -->
							<i class="statusIcon statusIcon-mobile" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
						</span>
					</span>

						<i class="statusIcon statusIcon-desktop" data-toggle="tooltip" data-tooltip-content="Locked" data-original-title="" title=""></i>
					</span>
					<?php if($this->m_data->getRank($lists->author) > 0) { ?>
					<span class="ForumTopic-author ForumTopic-author--blizzard"><?= $this->m_data->getUsernameID($lists->author); ?></span>
					<?php } else { ?>
					<span class="ForumTopic-author"><?= $this->m_data->getUsernameID($lists->author); ?></span>
					<?php } ?>
					<span class="ForumTopic-timestamp "><?= date('d-m-Y', $lists->date); ?></span>
					<span class="ForumTopic-replies">
						<i class="inverted blue reply icon"></i>
						<span><?= $this->forum_model->getComments($lists->id)->num_rows(); ?></span>
					</span>
				</span>
			</a>
			<?php } ?>
			<!-- test -->
		</div>
	</div>
</div>

	</section>





<div class="ui newtopicc longer modal">
    <div class="header"><i class="write icon"></i> <?= $this->lang->line('forum_newtopic'); ?></div>
    <div class="content">
<form action="" method="post" accept-charset="utf-8">
		<!-- title -->
		<h2 class="ui header"><?= $this->lang->line('expr_title'); ?></h2>
		<div class="ui fluid icon input">
		  <input name="topic_title" required="" type="text" placeholder="<?= $this->lang->line('expr_title'); ?>">
		</div>
		<!-- title -->
		<!-- text area -->
		<?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>
		<script src="<?= base_url(); ?>core/ckeditor_admin/ckeditor.js"></script>
		<?php } else { ?>
		<script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>
		<?php } ?>

		<br>

		<div class="form-group">
            <h2 class="ui header"><?= $this->lang->line('new_desc'); ?></h2>
            <div class="col-md-12">
                <textarea required="" name="topic_description" id="ckeditor" rows="10" cols="80">
                </textarea>
            </div>
        </div>
		<!-- text area -->

		<br>

		<!-- more -->
		<div class="ui center aligned basic segment">

		<?php if($this->m_data->getRank($this->session->userdata('fx_sess_id')) > 0) { ?>

			<div class="ui blue secondary segment">
			  <div class="field">
			    <div class="ui toggle checkbox">
			      <input id="hightl" type="checkbox" name="check_highl" value="1">
			      <label for="hightl"><?= $this->lang->line('expr_highl'); ?></label>
			    </div>
				<div class="ui toggle checkbox">
				  <input id="llock" type="checkbox" name="check_lock" value="1">
			      <label for="llock"><?= $this->lang->line('expr_lock'); ?></label>
			    </div>
			  </div>
			</div>

			<br><br><br>
		<?php } ?>

			<div class="actions">
			  <div class="ui buttons">
			    <button class="ui negative button"><i class="remove circle icon"></i> <?= $this->lang->line('button_cancel'); ?></button>
			    <div class="or"></div>
			    <button class="ui positive button" type="submit" name="button_createTopic"><i class="add circle icon"></i> <?= $this->lang->line('button_crea'); ?></button>
			  </div>
			</div>
		</div>
		<!-- more -->
</form>
  </div>
</div>

<script>
  $('.ui.newtopicc.longer.modal')
  .modal('attach events', '#nnewtopic', 'show');
</script>


<script>
    CKEDITOR.replace( 'ckeditor' );
</script>



</div>