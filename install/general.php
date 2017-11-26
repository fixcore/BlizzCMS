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
									<a class="active"><i class="lab icon"></i> General</a>
									<a><i class="database icon"></i> Database</a>
									<a><i class="paint brush icon"></i> Complete installation</a>
								</section>
							</nav>

							<div class="spacer"></div>
						</aside>

						<!-- Main right column -->
						<aside class="right">
							<section class="box big" id="installer_step_1">
								<h2><i class="lab icon"></i> General settings</h2>

								<span>
									<strong>All options can be modified later.</strong>
								</span>

								<form method="post" action="">
									<label for="server_name">Server name</label>
									<input required type="text" id="server_name" name="server_name" placeholder="MyServer" />

									<label for="realmlist">Realmlist</label>
									<input required type="text" id="realmlist" name="realmlist" placeholder="logon.domain.com" />

									<label for="expansion">Expansion:</label>
									<select id="expansion" name="expansion">
										<option value="1">Vanilla</option>
										<option value="2">The Burning Crusade</option>
										<option value="3">Wrath of the Lich King</option>
										<option value="4">Cataclysm</option>
										<option value="5">Mist of Pandaria</option>
										<option value="6">Warlords of Draenor</option>
										<option value="7">Legion</option>
										<option value="8">Battle for Azeroth</option>
									</select>

									<!-- soap -->
									<label for="soap_ip">Soap ip</label>
									<input required type="text" id="soap_ip" name="soap_ip" placeholder="127.0.0.1" />

									<label for="soap_user">Soap User</label>
									<input required type="text" id="soap_user" name="soap_user" placeholder="fixcore" />

									<label for="soap_password">Soap Password</label>
									<input required type="password" id="soap_password" name="soap_password" placeholder="blizzcms" />

									<label for="soap_port">Soap Port</label>
									<input required type="text" id="soap_port" name="soap_port" placeholder="7878" />
									<!-- soap -->
									<!-- realm -->
									<label for="soap_port">Realm Port</label>
									<input required type="text" id="realm_port" name="realm_port" placeholder="8085" />
									<!-- realm -->

								<div class="installer_navigation">
									<a href="requirements.html" class="ui negative basic button">Previous step</a>
									<input type="submit" name="button_general" required class="ui primary basic button" value="Next Step">
								</div>

								</form>

								<?php if(isset($_POST['button_general'])){
									$server_name 	= $_POST['server_name'];
									$realmlist 		= $_POST['realmlist'];
									$expansion 		= $_POST['expansion'];
									$soapip 		= $_POST['soap_ip'];
									$soapuser 		= $_POST['soap_user'];
									$soappass 		= $_POST['soap_password'];
									$soapport 		= $_POST['soap_port'];
									$realmport 		= $_POST['realm_port'];

									$fileContents = file_get_contents("fixcore.php.dist");

									$search = array
									(
										'ProjectName_fixcore', 
										'ProjectRealmlist_fixcore',
										'ProjectSoapIP_fixcore',
										'ProjectSoapUsername_fixcore',
										'ProjectSoapPass_fixcore',
										'ProjectSoapPort_fixcore',
										'ProjectRealmPort_fixcore',
										'ProjectExpansion_fixcore'
									);

									$replace = array
									(
										$server_name, 
										$realmlist, 
										$soapip, 
										$soapuser, 
										$soappass, 
										$soapport, 
										$realmport, 
										$expansion
									);
									
									$newContents = str_replace($search, $replace, $fileContents);
									$handle = fopen("fixcore.php.dist","w");
									fwrite($handle, $newContents);
									fclose($handle);

									rename("fixcore.php.dist", "../application/config/fixcore.php");
									echo '<script>window.location.href = "database.php";</script>';
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