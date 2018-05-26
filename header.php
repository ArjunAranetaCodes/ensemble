<header class="header dark-bg" id="topmenu">
	<div class="toggle-nav">
		<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
	</div>

	<!--logo start-->
	<a href="index.html" class="logo" style="margin-top:10px;">
		<img src="images/logosmall1.png" alt="">
	</a>
	<!--logo end-->

	<!--
	<div class="nav search-row" id="top_menu">
		<ul class="nav top-menu">
			<li>
				<form class="navbar-form">
					<input class="form-control" placeholder="Search" type="text">
				</form>
			</li>
		</ul>
	</div>
	-->

	<div class="top-nav notification-row">
		<!-- notificatoin dropdown start-->
		<ul class="nav pull-right top-menu">


			<!-- user login dropdown start-->
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="profile-ava">
						<?php include "php/global.php";?>
						<img alt="" src="<?php echo $rootdirectory.'/studentinout/images/'.$_SESSION["image_location"];?>" style="width:30px;height:30px;">
					</span>
					<span class="username">
						<?php
						echo " ".$_SESSION["user"];
						?>
					</span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
					<li>
						<?php echo '<a href="'.$rootdirectory.'/inbox.php"><i class="icon_chat_alt"></i> My Inbox</a>';?>
					</li>
					<li>
						<?php echo '<a href="'.$rootdirectory.'/php/DBActions.php?action=logout"><i class="icon_key_alt"></i> Log Out</a>';?>
					</li>
					<!--
					<li>
					<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
				</li>
				<li>
				<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
			</li>
		-->
	</ul>
</li>
<!-- user login dropdown end -->
</ul>
<!-- notificatoin dropdown end-->
</div>
</header>
