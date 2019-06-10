<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("View Drivers");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("drivers");?>
			<div id="content" class="content">
				<?php breadcrumb("Drivers");?>
				<?php page_header("View all Drivers");?>
				<?php call_widget();?>
				<div class="row">
					<?php driver_info();?>
				</div>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>