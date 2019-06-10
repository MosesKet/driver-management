<?php ob_start(); 
include("includes/views.php");
require_once('config/db.php');
include("config/auth.php");

$con = mysqli_connect("localhost","driver","driver","driver");
if(isset($_SESSION['vehicle'])){
	$vehicle = $_SESSION['vehicle'];
}else{
	$vehicle = rand(2,2).rand(5,5).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$vehicle = $vehicle;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php head("Add Vehicle");?>
<body>
	<?php preloader();?>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<?php topheader();?>			
			<?php sidebar("add-vehicle");?>
			<div id="content" class="content">
				<?php breadcrumb("Add Vehicle");?>
				<?php page_header("Add New Vehicle");?>
				<?php call_widget();?>
				<div class="row">
					<div class="col-lg-6" style="margin: auto;">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="form-stuff-10">
							<!-- begin panel-body -->
							<div class="panel-body">								
								<?php							
								$status = "";		
								if(isset($_POST['new']) && $_POST['new']==1){
									$vehicle = $vehicle;
									$VName = $_REQUEST['automobile'];
									$VModel = $_REQUEST['model'];
									$VYear = $_REQUEST['year'];
									$engine = $_REQUEST['engine'];
									$plate = $_REQUEST['plate'];
									$chasis = $_REQUEST['chasis'];									
									if(isset($_SESSION['driver'])){
										$status = 0;
									}else{
										$status = $_REQUEST['status'];
									}
									$ins_query = "INSERT INTO vehicles (vehicle, name, model, year, engine, plate, chasis, status)
									VALUES ('$vehicle', '$VName', '$VModel', '$VYear', '$engine', '$plate', '$chasis', '$status')";
									$insert = mysqli_query($con,$ins_query);
									if(isset($_SESSION['vehicle'])){
										header("Location: add-contract");
									}
									$status = "New vehicle added Successfully.";
								}
								?>								
								<p style="color:#FF0000;"><?php echo $status; ?></p>
								<form name="form" method="post" action="" enctype="multipart/form-data">
									<fieldset>
										<?php
										if(isset($_SESSION['vehicle'])){
											$vehicle = $_SESSION['vehicle'];
										echo '<legend class="m-b-15" style="color: #ff0000;">Assign vehicle to driver to continue registration</legend>';			
										}else{
										echo '<legend class="m-b-15" >Add Vehicle</legend>';		
										}	
										?>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Vehicle ID</label>
											<div class="col-md-7">
												<input type="text" name="vehicle" class="form-control" value="<?php echo 'TR'.$vehicle?>" disabled='true'>
											</div>
										</div>				
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Make of Vehicle</label>
											<div class="col-md-7">
												<input type="text" name="automobile" class="form-control" placeholder="Enter Vehicle Name" required="">
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Model</label>
											<div class="col-md-7">
												<input type="text" name="model" class="form-control" placeholder="Enter Vehicle Model" required="">
											</div>
										</div>								
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Year</label>
											<div class="col-md-7">
												<select name="year" class="default-select2 form-control" required="">
													<option value="2019">2019</option>
													<option value="2018">2018</option>
													<option value="2017">2017</option>
													<option value="2016">2016</option>
													<option value="2015">2015</option>
													<option value="2014">2014</option>
													<option value="2013">2013</option>
													<option value="2012">2012</option>
													<option value="2011">2011</option>
													<option value="2010">2010</option>
												</select>
											</div>
										</div>		
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Engine Number</label>
											<div class="col-md-7">
												<input type="text" name="engine" class="form-control" placeholder="Enter Engine Number" required="">
											</div>
										</div>
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Plate Number</label>
											<div class="col-md-7">
												<input type="text" name="plate" class="form-control" placeholder="Enter Plate Number" required="">
											</div>
										</div>								
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Chasis Number</label>
											<div class="col-md-7">
												<input type="text" name="chasis" class="form-control" placeholder="Enter Chasis Number" required="">
											</div>
										</div>		
										<div class="form-group row m-b-15">
											<label class="col-md-3 col-form-label">Status</label>
											<div class="col-md-7">
												<select name="status" class="default-select2 form-control" required="">
													<option value="1">Available</option>
												</select>
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