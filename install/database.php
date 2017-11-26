<!DOCTYPE html>
<html>
	<head>
		<title>Installation - BlizzCMS</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

		<link rel="stylesheet" href="css/main.css" type="text/css" />

		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript" ></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>

		<!-- semantic ui Start -->
		<link rel="stylesheet" type="text/css" href="../assets/semanticui/semantic.min.css">
		<!-- semantic ui End -->

		<!-- custom footer -->
		<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<!-- semantic -->
		<script src="../assets/semanticui/semantic.min.js"></script>
		<!-- semantic -->
		<!-- custom footer -->

		<script src="js/ui.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				UI.initialize();
			})
		</script>

		<!--[if IE]>
			<style type="text/css">
			#main .right h2 img {
				position:relative;
			}
			</style>
		<![endif]-->

		<!--[if LTE IE 7]>
			<style type="text/css">
			#main .right .statistics span {
				width:320px;
			}
			</style>
		<![endif]-->
	</head>

	<body>
		<div id="popup_bg"></div>

		<!-- confirm box -->
		<div id="confirm" class="popup">
			<h1 class="popup_question" id="confirm_question"></h1>

			<div class="popup_links">
				<a href="javascript:void(0)" class="popup_button" id="confirm_button"></a>
				<a href="javascript:void(0)" class="popup_hide" id="confirm_hide" onClick="UI.hidePopup()">
					Cancel
				</a>
				<div style="clear:both;"></div>
			</div>
		</div>

		<!-- alert box -->
		<div id="alert" class="popup">
			<h1 class="popup_message" id="alert_message"></h1>

			<div class="popup_links">
				<a href="javascript:void(0)" class="popup_button" id="alert_button">Okay</a>
				<div style="clear:both;"></div>
			</div>
		</div>

		<div id="wrap">
			<div id="fixer">
				<!-- Top bar -->
					<div class="ui inverted three item menu">
					  <a href="index.html" class="item active">Installation</a>
					</div>

				<!-- Main content -->
				<section>
					<div id="top_spacer"></div>
					<div class="center_1020" id="main">

						<!-- Main Left column -->
						<aside class="left">
							<nav>
								<a class="active"><i class="heartbeat icon"></i> Install</a>
								<section class="sub">
									<a><i class="browser icon"></i> Introduction</a>
									<a><i class="alarm outline icon"></i> Requirements</a>
									<a><i class="lab icon"></i> General</a>
									<a class="active"><i class="database icon"></i> Database</a>
									<a><i class="paint brush icon"></i> Complete installation</a>
								</section>
							</nav>

							<div class="spacer"></div>
						</aside>

						<!-- Main right column -->
						<aside class="right">
							<section class="box big" id="installer_step_1">
								<h2><i class="database icon"></i> Database settings</h2>

								<form method="post" action="">
									<label for="blizzcms_hostname">Website database host</label>
									<input required type="text" id="blizzcms_hostname" name="blizzcms_hostname" />
									
									<label for="blizzcms_username">Website database username</label>
									<input required type="text" id="blizzcms_username" name="blizzcms_username" />

									<label for="blizzcms_password">Website database password</label>
									<input required type="text" id="blizzcms_password" name="blizzcms_password" />

									<label for="blizzcms_database">Website database name</label>
									<input required type="text" id="blizzcms_database" name="blizzcms_database" />

									<hr>

									<label for="realmd_hostname">Realmd/logon/auth database host</label>
									<input required type="text" id="realmd_hostname" name="realmd_hostname" />
									
									<label for="realmd_username">Realmd/logon/auth database username</label>
									<input required type="text" id="realmd_username" name="realmd_username" />

									<label for="realmd_password">Realmd/logon/auth database password</label>
									<input required type="text" id="realmd_password" name="realmd_password" />

									<label for="realmd_database">Realmd/logon/auth database name</label>
									<input required type="text" id="realmd_database" name="realmd_database" />

									<hr>

									<label for="char_hostname">Character database host</label>
									<input required type="text" id="char_hostname" name="char_hostname" />
									
									<label for="char_username">Character database username</label>
									<input required type="text" id="char_username" name="char_username" />

									<label for="char_password">Character database password</label>
									<input required type="text" id="char_password" name="char_password" />

									<label for="char_database">Character database name</label>
									<input required type="text" id="char_database" name="char_database" />
								
									<div class="installer_navigation">
										<input type="submit" name="button_database" class="ui primary basic button" value="Next Step">
									</div>

								</form>

								<?php if(isset($_POST['button_database'])){
									$website_host 	= $_POST['blizzcms_hostname'];
									$website_user 	= $_POST['blizzcms_username'];
									$website_pass 	= $_POST['blizzcms_password'];
									$website_dbweb 	= $_POST['blizzcms_database'];

									$auth_host 	= $_POST['realmd_hostname'];
									$auth_user 	= $_POST['realmd_username'];
									$auth_pass 	= $_POST['realmd_password'];
									$auth_dbweb = $_POST['realmd_database'];

									$char_host 	= $_POST['char_hostname'];
									$char_user 	= $_POST['char_username'];
									$char_pass 	= $_POST['char_password'];
									$char_dbweb = $_POST['char_database'];

									$fileContents = file_get_contents("database.php.dist");

									$search = array
									(
										'blizzcms_hostname', 
										'blizzcms_username',
										'blizzcms_password',
										'blizzcms_database',
										'realmd_hostname', 
										'realmd_username',
										'realmd_password',
										'realmd_database',
										'char_hostname', 
										'char_username',
										'char_password',
										'char_database'
									);

									$replace = array
									(
										$website_host, 
										$website_user, 
										$website_pass, 
										$website_dbweb, 
										$auth_host, 
										$auth_user, 
										$auth_pass, 
										$auth_dbweb, 
										$char_host, 
										$char_user, 
										$char_pass, 
										$char_dbweb
									);
									
									/* -- connect */
									require('settings.php');
									$fixcore = connect($website_host, $website_user, $website_pass, $website_dbweb);
									/* connect -- */
									SplitSQL($fixcore, "SQL/base_blizzcms.sql");
									$updates = glob("SQL/updates/*.sql");
									if(count($updates))
									{
										foreach($updates as $update)
										{
											SplitSQL($fixcore, $update);
										}
									}

									$newContents = str_replace($search, $replace, $fileContents);
									$handle = fopen("database.php.dist","w");
									fwrite($handle, $newContents);
									fclose($handle);

									rename("database.php.dist", "../application/config/database.php");
									echo '<script>window.location.href = "finish.php";</script>';

								}?>
							</section>
						</aside>

						<div class="clear"></div>
					</div>
				</section>
			</div>
		</div>

	</body>
</html>