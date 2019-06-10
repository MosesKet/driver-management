<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html>
<?php 
head("Home");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>
			<?php sidebar("dashboard");?>
			<div id="content" class="content">
				<?php breadcrumb('Dashboard');?>
				<?php page_header("Dashboard");?>
				<?php call_widget();?>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>