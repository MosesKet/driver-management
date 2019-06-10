<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("View Vehicles");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("vehicles");?>
			<div id="content" class="content">
				<?php breadcrumb("Vehicles");?>
				<?php page_header("View all Vehicles");?>
				<?php call_widget();?>
				<div class="row">
					<?php vehicle_info();?>
				</div>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>