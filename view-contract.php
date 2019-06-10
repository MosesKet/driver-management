<?php
include("includes/views.php");
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("View Contract");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("contracts");?>
			<div id="content" class="content">
				<?php breadcrumb("Contract");?>
				<?php page_header("View Contract");?>
				<?php call_widget();?>
				<?php single_contract();?>
			</div>
	<?php scroll_to_top();?>
	</div>
	<?php page_end();?></body>
</html>