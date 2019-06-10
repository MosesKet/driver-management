<?php ob_start(); 
include("includes/views.php");
require_once('config/db.php');
include("config/auth.php");

$con = mysqli_connect("localhost","driver","driver","driver");
if(isset($_SESSION['driver'])){
	$driver = $_SESSION['driver'];
}else{
	$driver = "";
}
if(isset($_SESSION['vehicle'])){
	$vehicle = $_SESSION['vehicle'];
}else{
	$vehicle = "";
}
if(isset($_SESSION['contract'])){
	$contract = $_SESSION['contract'];
}else{
	$contract = "B".rand(0,0).rand(1,1).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$contract = $contract;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php head("Add Contract");?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("add-contract");?>
			<div id="content" class="content">
				<?php breadcrumb("Create Contract");?>
				<?php page_header("Create New Contract");?>
				<?php call_widget();?>
				<div class="row">
					<div class="col-lg-6" style="margin: auto;">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="form-stuff-10">
							<!-- begin panel-body -->
							<div class="panel-body">								
								<?php
								$status = "";		
								$document1 = $_FILES['file'] ['name'];
								$document2 = $_FILES['file2']['name'];
								$document3 = $_FILES['file3']['name'];
								$tmp_name  = $_FILES['file'] ['tmp_name'];
								$tmp_name2 = $_FILES['file2']['tmp_name'];
								$tmp_name3 = $_FILES['file3']['tmp_name'];
								$location = "uploads/documents/";
								$fileType = pathinfo($location.$document1, PATHINFO_EXTENSION);
								if(isset($_POST['new']) && $_POST['new']==1 && !empty($document1)){
									$contract = $contract;
									if(isset($_SESSION['driver'])){
										$driver = $_SESSION['driver'];
									}else{
										$driver = $_REQUEST['driver'];
									}
									if(isset($_SESSION['vehicle'])){
										$vehicle = $_SESSION['vehicle'];
									}else{
										$vehicle = $_REQUEST['vehicle'];
									}
									$type = $_REQUEST['type'];
									$duration = $_REQUEST['duration'];
									$payment = $_REQUEST['payment'];
									$amount = $_REQUEST['amount'];
									$ins_query = "INSERT INTO contracts (contract, driver, vehicle, type, duration, payment, amount, document1, document2, document3)
									VALUES ('$contract', '$driver', '$vehicle', '$type', '$duration', '$payment', '$amount', '$document1', '$document2', '$document3')";
									$update1 = "UPDATE drivers SET contract='$contract' WHERE vehicle='$vehicle'";
									$result = mysqli_query($con, $update1) or die(mysqli_error());
									$update = "update vehicles set status='0' WHERE vehicle=$vehicle";
									$result = mysqli_query($con, $update) or die(mysqli_error());
									move_uploaded_file($tmp_name2, $location.$document2);
									move_uploaded_file($tmp_name3, $location.$document3);
									$allowTypes = array('jpg','jpeg','pdf','doc');
									if(in_array($fileType, $allowTypes)){
										if(move_uploaded_file($tmp_name, $location.$document1)){
											$insert = mysqli_query($con,$ins_query);
											$status = "Contract created Successfully.";											
											unset($_SESSION['contract']);
											unset($_SESSION['driver']);
											unset($_SESSION['vehicle']);											
										}else{$status = 'error moving file to directory';}
									}else{ $status = 'file type not allowed';}
								}
								?>								
								<p style="color:#FF0000;"><?php echo $status; ?></p>
								<form name="form" method="post" action="" enctype="multipart/form-data">
									<fieldset>
										<?php
										if(isset($_SESSION['contract'])){
											$contract = $_SESSION['contract'];
											echo '<legend class="m-b-15" style="color: #ff0000;">Create contract with driver to complete registration</legend>';			
										}else{
											echo '<legend class="m-b-15" >Create Contract</legend>';		
										}	
										?>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Contract ID</label>
											<div class="col-md-7">
												<input type="text" name="contract" class="form-control" value="<?php echo $contract?>" disabled='true'>
											</div>
										</div>	
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Driver Name</label>
											<div class="col-md-7">
												<?php
												if(isset($_SESSION['driver'])){
													$visibility = "disabled='true'";
												}else{
													$visibility = "";
												}
												?>												
												<select name="driver" class="default-select2 form-control" <?php echo $visibility?> required="">
													<?php
													if(isset($_SESSION['driver'])){
														echo '<option value="'.$_SESSION['driver'].'">'.$_SESSION['driver'].'</option>';
													}else{
														$sql = mysqli_query($con,"SELECT * FROM drivers WHERE contract=''");
														while($row=mysqli_fetch_array($sql)){
															echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
														}
													}
													?>
												</select>
											</div>
										</div>									
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Vehicle ID</label>
											<div class="col-md-7">
												<?php
												if(isset($_SESSION['vehicle'])){
													$visibility = "disabled='true'";
												}else{
													$visibility = "";
												}
												?>
												<select name="vehicle" class="default-select2 form-control" <?php echo $visibility?> required="">
													<?php
													if(isset($_SESSION['vehicle'])){
														$vehc = $_SESSION['vehicle'];
														$sql = mysqli_query($con,"SELECT * FROM vehicles WHERE vehicle = '$vehc'");
														while($row=mysqli_fetch_array($sql)){
															echo '<option value="'.$row['vehicle'].'">'.$row['name'].'/'.$row['model'].'/'.$row['year'].'</option>';
														}
													}else{
														$sql = mysqli_query($con,"SELECT * FROM vehicles WHERE status = '1'");
														while($row=mysqli_fetch_array($sql)){
															echo '<option value="'.$row['vehicle'].'">'.$row['name'].'/'.$row['model'].'/'.$row['year'].'</option>';
														}
													}
													?>
												</select>
											</div>
										</div>								
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Type</label>
											<div class="col-md-7">
												<select name="type" class="default-select2 form-control" required="">
													<option value="Balancing">Balancing</option>
													<option value="Higher Purchase">Higher Purchase</option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Duration</label>
											<div class="col-md-7">
												<select name="duration" class="default-select2 form-control" required="">
													<option value="One Month">One Month</option>
													<option value="Two Month">Two Month</option>
													<option value="Three Month">Three Month</option>
													<option value="Four Month">Four Month</option>
													<option value="Six Month">Six Month</option>
													<option value="Eight Month">Eight Month</option>
													<option value="One Year">One Year</option>
													<option value="Two Year">Two Year</option>
													<option value="Three Year">Three Year</option>
													<option value="Four Year">Four Year</option>
													<option value="Five Year">Five Year</option>
												</select>
											</div>
										</div>			
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Payment Type</label>
											<div class="col-md-7">
												<select name="payment" class="default-select2 form-control" required="">
													<option value="Weekly Payment">Weekly Payment</option>
													<option value="Daily Payment">Daily Payment</option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Amount</label>
											<div class="col-md-7">
												<input type="number" name="amount" class="form-control" placeholder="Enter Amount" required="">
											</div>
										</div>	
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Document One</label>
											<div class="col-md-7">
												<input type="file" name="file" class="form-control" required="">
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Document Two</label>
											<div class="col-md-7">
												<input type="file" name="file2" class="form-control">
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Document Three</label>
											<div class="col-md-7">
												<input type="file" name="file3" class="form-control">
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