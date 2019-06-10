<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("View Contracts");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("contracts");?>
			<div id="content" class="content">
				<?php breadcrumb("Contracts");?>
				<?php page_header("View all Contracts");?>
				<?php call_widget();?>
				<div class="row">
					<?php contract_info();?>
				</div>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>