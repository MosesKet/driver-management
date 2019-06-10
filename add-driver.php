<?php ob_start(); 
include("includes/views.php");
require_once('config/db.php');
include("config/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php 
head("Add Driver");
?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("add-driver");?>
			<div id="content" class="content">
				<?php breadcrumb("Add Driver");?>
				<?php page_header("Add New Driver");?>
				<?php call_widget();?>
				<div class="row">
					<div class="col-lg-6" style="margin: auto;">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="form-stuff-10">
							<!-- begin panel-body -->
							<div class="panel-body">
								<?php
								$status = "";							
								//file upload path
								$targetDir = "uploads/";
								$image = basename($_FILES['file']['name']);
								$targetFilePath = $targetDir . $image;
								$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
								if(isset($_POST['new']) && !empty($_FILES["file"]["name"]) && $_POST['new']==1){
									$name = $_REQUEST['name'];
									$phone = $_REQUEST['phone'];
									$address = $_REQUEST['address'];
									$contract = "B".rand(0,0).rand(1,1).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
									$vehicle = rand(2,2).rand(5,5).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
									$trn_date = date("Y-m-d H:i:s");
									$ins_query = "INSERT INTO drivers (name, phone, address, contract, vehicle, image, trn_date)
									VALUES ('$name', '$phone', '$address', '$contract', '$vehicle', '$image', '$trn_date')";
									//Allow certain file fromats
									$allowTypes = array('jpg','png','jpeg','gif');
									if(in_array($fileType, $allowTypes)){
										//upload file to server
										if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
											$insert = mysqli_query($con,$ins_query);
											if($insert){
												$_SESSION['driver'] = $name;
												$_SESSION['vehicle'] = $vehicle;
												$_SESSION['contract'] = $contract;
												header("Location: add-vehicle");
											}else{
												$status = "<br> There was an error uploading your file.";
											}												
										}else{
											$status = "<br> Sorry, there was an error uploading your file.";
										}
									}else{
										$status = "<br> Only JPG, JPEG, PNG, & GIF files are allowed.";
									}									
								}
								?>
								<form name="form" method="post" action="" enctype="multipart/form-data">
									<fieldset>
										<legend class="m-b-15">Add Driver</legend>									
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Fullname</label>
											<div class="col-md-7">
												<input type="text" name="name" class="form-control" placeholder="Enter Full Name" required="">
											</div>
										</div>								
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Phone</label>
											<div class="col-md-7">
												<input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required="">
											</div>
										</div>		
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Address</label>
											<div class="col-md-7">
												<input type="text" name="address" class="form-control" placeholder="Enter Home Address" required="">
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Image</label>
											<div class="col-md-7">
												<input type="file" name="file" class="form-control" required="">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-7 offset-md-3">
												<input type="hidden" name="new" value="1">
												<button name="submit" type="submit" value="Submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
											</div>
										</div>
									</fieldset>
								</form>
								<p style="color:#FF0000;"><?php echo $status; ?></p>
							</div>
						</div>
						<!-- end panel -->
					</div>			
				</div>					
			</div>								
		<?php scroll_to_top();?>
	</div>	
	<?php page_end();?>
</body>
</html>
<?php ob_end_flush();?>