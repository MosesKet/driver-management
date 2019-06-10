<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("View Driver");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("drivers");?>
			<div id="content" class="content">
				<?php breadcrumb("Driver");?>
				<?php page_header("View Driver");?>
				<?php call_widget();?>
				<?php single_driver();?>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>