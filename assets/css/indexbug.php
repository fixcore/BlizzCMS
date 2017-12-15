<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?= $this->config->item('ProjectName'); ?> -</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="Blizzard Trackers" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/navbar0e26.css?v=58-88" />
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/css/main-1f799c9e0f0e27.css?v=58-88" />
    <!-- semantic ui Start -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/semanticui/semantic.min.css">
    <!-- semantic ui End -->
    <!-- custom START -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/scroll.css">
    <!-- custom END -->

    <!-- custom footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
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

    <!-- main -->
    <div role="main">
        <section class="Tracker">
            <header class="Tracker-header">
                <div class="Container Container--content">
                    <div class="space-adaptive-medium"></div>
                    <br></br>
                    <h1 class="Tracker-heading" style="color: #fff;"><i class="bug icon"></i>Bug Tracker</h1>
                </div>
                <div class="Container Container--content">
                    <h3 class="flush-bottom flush-top text-upper text-heavy" style="color: #fff;">Report List</h3>
                </div>
            </header>
            <div class="Tracker-content" data-track="nexus.checkbox" id="forum-topics">
                <table class="ui selectable inverted table">
                    <thead>
                        <tr>
                            <th colspan="5">
                                <div class="ui selection dropdown">
                                    <input type="hidden" name="category">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select Category</div>
                                    <div class="menu">
                                        <div class="item" data-value="2">Spell</div>
                                        <div class="item" data-value="1">Creature</div>
                                        <div class="item" data-value="0">Map</div>
                                    </div>
                                </div>

                                <script type="text/javascript" charset="utf-8" async defer>
                                    $('.ui.dropdown').dropdown();
                                </script>

                                <button id="createBugtrackerPost" class="positive ui right floated labeled icon button" type="button"><i class="write icon"></i>Create Report</button>
                            </th>
                        </tr>
                        <tr>
                            <th><i class="book icon"></i>ID</th>
                            <th class="center aligned"><i class="bookmark icon"></i>Title</th>
                            <th class="center aligned"><i class="list icon"></i>Category</th>
                            <th class="center aligned"><i class="info circle icon"></i>Status</th>
                            <th class="center aligned"><i class="warning circle icon"></i>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->pvp_model->getTop20PVP()->result() as $tops) { ?>
                            <tr>
                                <td>131234123424</td>
                                <td class="center aligned">qwerwqerwqerwqerwqerwqr</td>
                                <td class="center aligned">Maps</td>
                                <td class="center aligned"><div class="ui green horizontal label">Open</div></td>
                                <td class="center aligned"><div class="ui green horizontal label">Low</div></td>
                            </tr>
                            <tr>
                                <td>453452341</td>
                                <td class="center aligned">erwerwerwerwerw</td>
                                <td class="center aligned">Spell</td>
                                <td class="center aligned"><div class="ui red horizontal label">Closed</div></td>
                                <td class="center aligned"><div class="ui orange horizontal label">Medium</div></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="ui createBugtrackerPost longer modal">
            <div class="header"><i class="write icon"></i>Create Bug Report</div>
            <div class="content">
                <form action="" method="post" accept-charset="utf-8">
                    <!-- title -->
                    <h2 class="ui header"><?= $this->lang->line('expr_title'); ?></h2>
                    <div class="ui fluid icon input">
                        <input name="bug_title" required="" type="text" placeholder="<?= $this->lang->line('expr_title'); ?>">
                    </div>
                    <!-- title -->
                    <!-- text area -->
                    <script src="<?= base_url(); ?>core/ckeditor_basic/ckeditor.js"></script>

                    <br>

                    <div class="form-group">
                        <h2 class="ui header"><?= $this->lang->line('new_desc'); ?></h2>
                        <div class="col-md-12">
                            <textarea required="" name="bug_description" id="ckeditor" rows="10" cols="80"></textarea>
                        </div>
                    </div>
                    <!-- text area -->

                    <br>

                    <!-- more -->
                    <div class="ui center aligned basic segment">
                        <div class="actions">
                            <div class="ui buttons">
                                <button class="ui negative button"><i class="remove circle icon"></i> <?= $this->lang->line('button_cancel'); ?></button>
                                <div class="or"></div>
                                <button class="ui positive button" type="submit" name="button_createReport"><i class="add circle icon"></i> <?= $this->lang->line('button_crea'); ?></button>
                            </div>
                        </div>
                    </div>
                    <!-- more -->
                </form>
            </div>
        </div>

        <script>
            $('.ui.createBugtrackerPost.longer.modal')
            .modal('attach events', '#createBugtrackerPost', 'show');
        </script>

        <script>
            CKEDITOR.replace('ckeditor');
        </script>
    </div>
