<style type="text/css">
<?php
if($_SESSION["color_pref"] != ""){
	echo '
	#sidebar{
		background-color:'.$_SESSION["color_pref"].';
		color:white;
	}
	ul.sidebar-menu li a{
		color:white;
	}
	';
}
?>
</style>
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu">
			<li>
				<?php
				include "php/global.php";

				if($_SESSION["user"] == "" || $_SESSION["user"] == null){
					header("Location:login.php");
				}

				echo'
				<a class="" href="'.$rootdirectory.'/index.php">
				<i class="icon_house_alt"></i>
				<span>Home</span>
				</a>';
				?>
			</li>

			<?php
			//if($_SESSION["privilege"] == "Admin"){
				echo '

				<li class="sub-menu">
				<a href="javascript:;" class="">
				<i class="icon_profile"></i>
				<span>Events</span>
				<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
				<li><a href="'.$rootdirectory.'/newevent.php">New Event</a></li>
				<li><a href="'.$rootdirectory.'/generatedata.php">Event 1</a></li>
				</ul>
				</li>
				';
				
				echo '

				<li class="sub-menu">
				<a href="javascript:;" class="">
				<i class="icon_profile"></i>
				<span>Explore</span>
				<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
				<li><a href="'.$rootdirectory.'/directory.php">People</a></li>
				<li><a href="'.$rootdirectory.'/replyforme.php">Reply For Me</a></li>
				</ul>
				</li>
				';
			//}
			?>


			<li class="sub-menu">
				<a href="javascript:;" class="">
					<i class="icon_chat_alt"></i>
					<span>Messaging</span>
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li><a class="" href="<?php echo $rootdirectory;?>/inbox.php">Inbox</a></li>
					<li><a class="" href="<?php echo $rootdirectory;?>/archived.php">Archived</a></li>
					<li><a class="" href="<?php echo $rootdirectory;?>/trash.php">Trash</a></li>
				</ul>
			</li>

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
