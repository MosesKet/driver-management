<?php
require_once('config/db.php');

function head($title){
$head = print <<<HERE
   <head>
      <meta charset="utf-8">
      <title>$title | Dashboard</title>
	  <base href="html/">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
      <meta content="" name="description">
      <meta content="" name="author">
      <!-- ================== BEGIN BASE CSS STYLE ================== -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      <link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet">
      <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet">
      <link href="../assets/css/default/style.min.css" rel="stylesheet">
      <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet">
      <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme">
      <!-- ================== END BASE CSS STYLE ================== -->
      <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
      <link href="../assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet">
      <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
      <link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
	<link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="../assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
	<link href="../assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet">
	<link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet">
	<link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet">
	<link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet">

	<link href="..\assets\plugins\bootstrap-datepicker\css\bootstrap-datepicker.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-datepicker\css\bootstrap-datepicker3.css" rel="stylesheet">
	<link href="..\assets\plugins\ionRangeSlider\css\ion.rangeSlider.css" rel="stylesheet">
	<link href="..\assets\plugins\ionRangeSlider\css\ion.rangeSlider.skinNice.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-colorpicker\css\bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-timepicker\css\bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="..\assets\plugins\password-indicator\css\password-indicator.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-combobox\css\bootstrap-combobox.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-select\bootstrap-select.min.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-tagsinput\bootstrap-tagsinput.css" rel="stylesheet">
	<link href="..\assets\plugins\jquery-tag-it\css\jquery.tagit.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-daterangepicker\daterangepicker.css" rel="stylesheet">
	<link href="..\assets\plugins\select2\dist\css\select2.min.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-eonasdan-datetimepicker\build\css\bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="..\assets\plugins\bootstrap-colorpalette\css\bootstrap-colorpalette.css" rel="stylesheet">
	<link href="..\assets\plugins\jquery-simplecolorpicker\jquery.simplecolorpicker.css" rel="stylesheet">
	<link href="..\assets\plugins\jquery-simplecolorpicker\jquery.simplecolorpicker-fontawesome.css" rel="stylesheet">
	<link href="..\assets\plugins\jquery-simplecolorpicker\jquery.simplecolorpicker-glyphicons.css" rel="stylesheet">
	<link href="..\assets\plugins\DataTables\media\css\dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="..\assets\plugins\DataTables\extensions\Buttons\css\buttons.bootstrap.min.css" rel="stylesheet">
	<link href="..\assets\plugins\DataTables\extensions\Responsive\css\responsive.bootstrap.min.css" rel="stylesheet">
		<!-- ================== END PAGE LEVEL STYLE ================== -->

      <!-- ================== BEGIN BASE JS ================== -->
      <script src="../assets/plugins/pace/pace.min.js"></script>
      <!-- ================== END BASE JS ================== -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
        
 </head>
HERE;
return $head;
}

function preloader(){
$preloader = print <<<HERE
	      <!-- begin #page-loader -->
      <div id="page-loader" class="fade show"><span class="spinner"></span></div>
      <!-- end #page-loader -->
HERE;
return $preloader;
}

function topheader(){
	$con = mysqli_connect("","driver","driver","driver");
	$sel_query="SELECT * FROM users ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result)) {
		$firstname =$row["firstname"];
		$lastname =$row["lastname"];
			$topheader = print <<<HERE
	     <!-- begin #header -->
         <div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
               <a href="../index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>TRANSPORTATION PORTAL</b></a>
               <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <!-- end navbar-header -->
            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
               <li style='display: none;' class="dropdown">
                  <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                  <i class="fa fa-bell"></i>
                  <span class="label">3</span>
                  </a>
               </li>
               <li class="navbar-user">
                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="..\assets\img\user\user-13.jpeg" alt=""> 
                  <span class="d-none d-md-inline">$firstname $lastname</span> <b style='visibility: hidden;' class="caret"></b>
                  </a>
               </li>
            </ul>
            <!-- end header navigation right -->
         </div>
         <!-- end #header -->
HERE;
	}
return $topheader;
}

function sidebar($page){	
	$dashboard = 1;	$drivers = 1; $driver = 1; $vehicles = 1; $vehicle = 1; $contracts = 1; $contract = 1; $settings = 1;
	switch ($page) {
		case "dashboard":
			$dashboard = "class='active'";
			break;
		case "drivers":
			$drivers = "class='active'";
			break;
		case "add-driver":
			$driver = "class='active'";
			break;
		case "vehicles":
			$vehicles = "class='active'";
			break;
		case "add-vehicle":
			$vehicle = "class='active'";
			break;
		case "contracts":
			$contracts = "class='active'";
			break;
		case "add-contract":
			$contract = "class='active'";
			break;
		case "settings":
			$settings = "class='active'";
			break;
		}

	$con = mysqli_connect("localhost","driver","driver","driver");
	$sel_query="SELECT * FROM users ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result)) {
		$username =$row["username"];
	
		$sidebar = print <<<HERE
	         <!-- begin #sidebar -->
         <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
               <!-- begin sidebar user -->
               <ul class="nav">
                  <li class="nav-profile">
                     <a href="javascript:;">
                        <div class="cover with-shadow"></div>
                        <div class="image">
                           <img src="../assets/img/user/user-13.jpeg" alt="">
                        </div>
                        <div class="info">
                           <b class="caret pull-right"></b>
                           $username
                        </div>
                     </a>
                  </li>
                  <li>
                     <ul class="nav nav-profile">
                        <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                        <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                     </ul>
                  </li>
               </ul>
               <!-- end sidebar user -->
               <!-- begin sidebar nav -->
               <ul class="nav">
                  <li class="nav-header">NAVIGATION MENU</li>
				  <li $dashboard><a href="../index.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
				  <li $drivers><a href="../drivers.php"><i class="fa fa-users"></i> <span>View Drivers</span></a></li>
				  <li $driver><a href="../add-driver.php"><i class="fa fa-user-plus"></i> <span>Add New Driver</span></a></li>
				  <li $vehicles><a href="../vehicles.php"><i class="fa fa-bus"></i> <span>Vehicles</span></a></li>
				  <li $vehicle><a href="../add-vehicle.php"><i class="fa fa-truck"></i> <span>Add New Vehicle</span></a></li>
				  <li $contracts><a href="../contracts.php"><i class="fa fa-calendar-check"></i> <span>Contracts</span></a></li>
				  <li $contract><a href="../add-contract.php"><i class="fa fa-calendar-plus"></i> <span>New Contract</span></a></li>
                  <li class="nav-header">SETTINGS</li>
				  <!--<li $settings><a href="../settings"><i class="fas fa-sliders-h"></i></i><span>Edit Account</span></a></li>-->
				  <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i></i><span>Logout</span></a></li>
                  <!-- begin sidebar minify button -->
                  <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                  <!-- end sidebar minify button -->
               </ul>
               <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
         </div>
         <div class="sidebar-bg"></div>
         <!-- end #sidebar -->
HERE;
	}
return $sidebar;
}

function breadcrumb($menu){
	$breadcrumb = print <<<HERE
	            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
               <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
               <li class="breadcrumb-item active">$menu</li>
            </ol>
            <!-- end breadcrumb -->
HERE;
return $breadcrumb;
}

function page_header($page_info){
  $page_header = print <<<HERE
	            <!-- begin page-header -->
            <h1 class="page-header">$page_info</small></h1>
            <!-- end page-header -->
HERE;
return $page_header;
}

function call_widget(){
	$call_widget = print <<<HERE
				<div class="row">
					<div class="col-lg-3 col-md-6">
HERE;
						widget_stat("CREATE","","fas fa-plus-circle","&nbsp;","../add-driver.php"," ","aqua");
						print <<< HERE
					</div>
HERE;
					print <<< HERE
					<div class="col-lg-3 col-md-6">
HERE;
						widget_stat("DRIVERS","","fas fa-users","&nbsp;","../drivers.php"," ","teal");
						print <<< HERE
					</div>
HERE;
					print <<< HERE
					<div class="col-lg-3 col-md-6"> 
HERE;
						widget_stat("VEHICLES","","fas fa-bus","&nbsp;","../vehicles.php"," ","pink");
						print <<< HERE
					</div>
HERE;
					print <<< HERE
					<div class="col-lg-3 col-md-6">
HERE;
						widget_stat("CONTRACTS","","fas fa-calendar-check","&nbsp;","../contracts.php"," ","green");
						print <<< HERE
					</div>
				</div>
HERE;
	return $call_widget;
}

function widget_stat($wiget_title,$widget_info,$widget_icon,$widget_link_title,$widget_link_add,$widget_link_icon,$widget_color){
	$widget_color = 'teal';
	$widget_stat = print <<<HERE
	<div class="widget widget-stats bg-$widget_color">
                     <div class="stats-icon"><i class="$widget_icon"></i></div>
                     <div class="stats-info">
                        <h4>$wiget_title</h4>
                        <p>$widget_info</p>
                     </div>
                     <div class="stats-link">
                        <a href="$widget_link_add">$widget_link_title <i class="$widget_link_icon"></i></a>
                     </div>
                  </div>
HERE;
return $widget_stat;
}

function driver_info(){
$driver_info = print <<<HERE
					<div class="col-lg-12 ui-sortable">
						<div class="panel panel-inverse" data-sortable-id="table-basic-2" style="background-color: transparent;">	
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
HERE;
								table1();
								print <<<HERE
								</div>
								<!-- end table-responsive -->
							</div>
						</div>
					</div>
HERE;
return $driver_info;
}

function vehicle_info(){
$vehicle_info = print <<<HERE
					<div class="col-lg-12 ui-sortable">
						<div class="panel panel-inverse" data-sortable-id="table-basic-2" style="background-color: transparent;">	
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
HERE;
								table2();
								print <<<HERE
								</div>
								<!-- end table-responsive -->
							</div>
						</div>
					</div>
HERE;
return $vehicle_info;
}

function contract_info(){
$contract_info = print <<<HERE
					<div class="col-lg-12 ui-sortable">
						<div class="panel panel-inverse" data-sortable-id="table-basic-2" style="background-color: transparent;">	
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
HERE;
								table3();
								print <<<HERE
								</div>
								<!-- end table-responsive -->
							</div>
						</div>
					</div>
HERE;
return $contract_info;
}

function single_contract(){
	$single_contract = print <<<HERE
			<div class="invoice col-lg-8" style="margin: auto;">
HERE;
	$con = mysqli_connect("localhost","driver","driver","driver");
	$count=1;
	$vehicle=$_REQUEST['vehicle'];
	$sel_query="SELECT * FROM contracts WHERE vehicle=$vehicle";
	$query="SELECT * FROM vehicles WHERE vehicle=$vehicle";
	$result = mysqli_query($con,$sel_query);
	$result1 = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)) {
    $contract =$row["contract"];
    $driver =$row["driver"];
    $vehicle =$row["vehicle"];
    $type =$row["type"];
    $duration =$row["duration"];
	$payment = $row["payment"];
	$document1 = $row["document1"];
	$document2 = $row["document2"];
	$amount = $row["amount"];		
	$amount = number_format($amount,2);
	$count1=1;
	while($row1 = mysqli_fetch_assoc($result1)){
	$name = $row1["name"];		
	$model = $row1["model"];		
	$year = $row1["year"];		
	$plate = $row1["plate"];		
			print <<<HERE
				<!-- begin invoice-company -->
				<div class="invoice-company text-inverse f-w-600">
					<span class="pull-right hidden-print">
					<a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
					</span>
					Contract ID : $contract
				</div>
				<!-- end invoice-company -->
				<!-- begin invoice-content -->
				<div class="invoice-content" style="margin-bottom:0px; font-size:14px;">
					<!-- begin table-responsive -->
					<div class="table-responsive">
						<table class="table table-invoice">
							<thead>
								<tr>
									<th>DESCRIPTION</th>
									<th class="text-center" width="100%"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span class="text-inverse">Driver name</span><br>
									</td>
									<td class="text-right">$driver</td>
								</tr>
								<tr>
									<td>
										<span class="text-inverse">Vehicle ID</span><br>
									</td>
									<td class="text-right">TR$vehicle</td>
								</tr>
								<tr>
									<td>
										<span class="text-inverse">Vehicle</span><br>
									</td>
									<td class="text-right">$name/$model/$year</td>
								</tr>
								<tr>
									<td>
										<span class="text-inverse">Plate Number</span><br>
									</td>
									<td class="text-right">$plate</td>
								</tr>
								<tr>
									<td>
										<span class="text-inverse">Contract Type</span><br>
									</td>
									<td class="text-right">$type</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- end table-responsive -->
				</div>
				<!-- end invoice-content -->
				<!-- begin invoice-note -->
				<div class="invoice-note" style="margin-top:0px; font-size:100%; color:dimgrey; line-height:2;">
					* This is a contract between [Your Company Name]<br>
					and the above stated person. Comfirming the agreement that the said <br>
					amount will be paid at the said interval, for the duration stated<br>
					If you have any questions concerning this agreement, contact <br>
					[Name, Phone Number, Email]
				</div>
						<div class="row fileupload-buttonbar">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary start">
									<i class="fa fa-download"></i>
									<span><a href="../uploads/documents/$document1" download style="color: white;">Document<a></span>
								</button>
								$document1
							</div>
						</div>
HERE;
	if($document2 =$row["document2"]){
		print <<<HERE
						<div class="row fileupload-buttonbar">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary start">
									<i class="fa fa-download"></i>
									<span><a href="../uploads/documents/$document2" download style="color: white;">Document<a></span>
								</button>
								$document2
							</div>
						</div>
HERE;
	}else{}
	if($document3 =$row["document3"]){
		print <<<HERE
						<div class="row fileupload-buttonbar">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary start">
									<i class="fa fa-download"></i>
									<span><a href="../uploads/documents/$document3" download style="color: white;">Document<a></span>
								</button>
								$document3
							</div>
						</div>
HERE;
	}else{}
		print <<<HERE
					<!-- begin invoice-price -->
					<br>
					<br>
					<br>
					<div class="invoice-price">
						<div class="invoice-price-left">
							<div class="invoice-price-row">
								<div class="sub-price">
									<small>Duration</small>
									<span class="text-inverse">$duration</span>
								</div>
								<div class="sub-price">
									<small>Payment Type</small>
									<span class="text-inverse">$payment</span>
								</div>
								<div class="sub-price">
									<small>AMOUNT</small>
									<span class="text-inverse"><span>&#8358;</span>$amount</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end invoice-price -->
				<!-- end invoice-note -->
				<!-- begin invoice-footer -->
				<div class="invoice-footer">
					<p class="text-center m-b-5 f-w-600">
						THANK YOU FOR YOUR BUSINESS
					</p>
					<p class="text-center">
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
					</p>
				</div>
				<!-- end invoice-footer -->
HERE;
	$count1++; }					
	$count++; }					
		print <<<HERE
			</div>		
HERE;
return $single_contract;
}

function single_driver(){
	$single_driver = print <<<HERE
			<div class="profile col-lg-10" style="margin: auto;">
HERE;
	$con = mysqli_connect("localhost","driver","driver","driver");
	$count=1;
	$vehicle=$_REQUEST['vehicle'];
	$sel_query="SELECT * FROM drivers WHERE vehicle=$vehicle";
	//$query="SELECT * FROM vehicles WHERE vehicle=$vehicle";
	$result = mysqli_query($con,$sel_query);
	//$result1 = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)) {
    $image ='../uploads/'.$row["image"];
    $name =$row["name"];
    $phone =$row["phone"];
    $address =$row["address"];
    $vehicle =$row["vehicle"];
	$contract = $row["contract"];
	/*$count1=1;
	while($row1 = mysqli_fetch_assoc($result1)){
	$name = $row1["name"];		
	$model = $row1["model"];		
	$year = $row1["year"];		
	$plate = $row1["plate"];		*/
	
	print <<<HERE
				<div class="profile-header">
					<!-- BEGIN profile-header-cover -->
					<div class="profile-header-cover"></div>
					<div class="profile-header-content">
						<!-- BEGIN profile-header-img -->
						<div class="profile-header-img" style="margin: 0px 0 10px;">
							<img src="$image" alt="">
						</div>
						<div class="profile-header-info">
							<h4 class="m-t-10 m-b-5"><br>$name</h4>
						</div>
						<!-- END profile-header-info -->
					</div>
				</div>
			</div>
			<div class="profile-content col-lg-6" style="margin: auto;">
				<!-- begin tab-content -->
				<div class="tab-content p-0">
					<!-- begin #profile-about tab -->
					<div class="tab-pane fade active show" id="profile-about">
						<!-- begin table -->
						<div class="table-responsive">
							<table class="table table-profile">
								<tbody>
									<tr>
										<td class="field">Vehicle ID</td>
										<td>TR$vehicle</td>
									</tr>
									<tr>
										<td class="field">Contract ID</td>
										<td>$contract</td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr class="highlight">
										<td class="field">About Me</td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Mobile</td>
										<td>0$phone </td>
									</tr>
									<tr>
										<td class="field">Address</td>
										<td>$address</td>
									</tr>									
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr class="highlight">
										<td class="field">&nbsp;</td>
										<td class="p-t-10 p-b-10">
											<button type="submit" class="btn btn-primary width-150">Update</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- end table -->
					</div>
					<!-- end #profile-about tab -->
				</div>
				<!-- end tab-content -->
HERE;
	//$count1++; }					
	$count++; }		
		print <<<HERE
				</div>
HERE;
return $single_driver;
}

function table1(){
		print <<<HERE
	<table class="table table-striped table-hover m-b-0 text-inverse">
		<thead style="background-color: #f59c1a;">
			<tr>
				<th>Image</th>
				<th>Fullname</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Vehicle ID</th>
				<th>Contract ID</th>
			</tr>
		</thead>
		<tbody style="background-color: #fff;">
HERE;
	$con = mysqli_connect("localhost","driver","driver","driver");
	$count=1;
	$sel_query="SELECT * FROM drivers ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result)) {
    $image ='../uploads/'.$row["image"];
    $name =$row["name"];
    $phone =$row["phone"];
    $address =$row["address"];
    $contract =$row["contract"];
    $vehicle =$row["vehicle"];
	print <<<HERE
			<tr>
				<td class="profile-header-img"><img src="$image" alt=""</td>
				<td><strong>$name<br><br><button type="button" class="btn btn-primary"><a href="../view-driver.php?vehicle=$vehicle" style="color: white;">View Driver Detials</a></button></strong></td>
				<td><br>0$phone</td>
				<td><br>$address</td>
HERE;
				if($contract =$row["contract"]){
				print <<<HERE
					<td><br>TR$vehicle<br><br><button type="button" class="btn btn-danger"><a href="../update.php?vehicle=$vehicle" style="color: white;">Cancel Contract</a></button></td>					
HERE;
				}else{
				print <<<HERE
					<td><br>$vehicle</td>
HERE;
				}
				if($contract =$row["contract"]){
				print <<<HERE
					<td><br>$contract<br><br><button type="button" class="btn btn-primary"><a href="../view-contract.php?vehicle=$vehicle" style="color: white;">View Contract</a></button></td>
HERE;
				}else{
				print <<<HERE
					<td><br>$contract</td>
HERE;
				}
				print <<<HERE
			</tr>
HERE;
	$count++; }
									print <<<HERE
		<tbody>
	</table>
HERE;
}

function table2(){
		print <<<HERE
	<table class="table table-striped table-hover m-b-0 text-inverse">
		<thead style="background-color: #f59c1a;">
			<tr>
				<th>Vehicle ID</th>
				<th>Make of Vehicle</th>
				<th>Model</th>
				<th>Year</th>
				<th>Engine Number</th>
				<th>Plate Number</th>
				<th>Chasis Number</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody style="background-color: #fff;">
HERE;
	$con = mysqli_connect("localhost","driver","driver","driver");
	$count=1;
	$sel_veh ="SELECT * FROM vehicles ORDER BY id desc;";
	$veh_res = mysqli_query($con,$sel_veh);
	while($row = mysqli_fetch_assoc($veh_res)) {
    $vehicle_id =$row["vehicle"];
    $VName =$row["name"];
    $VModel =$row["model"];
    $VYear =$row["year"];
    $engine =$row["engine"];
    $plate =$row["plate"];
    $chasis =$row["chasis"];
    $status =$row["status"];
	if ($status==1){
		$status = '<span class="label label-info" style="font-size: 90%;">Available</span>';
	}else{
		$status = '<span class="label label-danger" style="font-size:90%;">Unavailable</span>';
	}
	print <<<HERE
			<tr>
				<td>TR$vehicle_id</td>
				<td>$VName</td>
				<td>$VModel</td>
				<td>$VYear</td>
				<td>$engine</td>
				<td>$plate</td>
				<td>$chasis</td>
				<td>$status</td>
			</tr>
HERE;
	$count++; }
									print <<<HERE
		<tbody>
	</table>
HERE;
}

function table3(){
		print <<<HERE
	<table class="table table-striped table-hover m-b-0 text-inverse">
		<thead style="background-color: #f59c1a;">
			<tr>
				<th>Contract ID</th>
				<th>Drivers</th>
				<th>Vehicle ID</th>
				<th>Type</th>
				<th>Duration</th>
				<th>Payment</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody style="background-color: #fff;">
HERE;
	$con = mysqli_connect("localhost","driver","driver","driver");
	$count=1;
	$sel_cont ="SELECT * FROM contracts ORDER BY id desc;";
	$con_res = mysqli_query($con,$sel_cont);
	while($row = mysqli_fetch_assoc($con_res)) {
    $contract =$row["contract"];
    $driver =$row["driver"];
    $vehicle =$row["vehicle"];
    $type =$row["type"];
    $duration =$row["duration"];
    $payment =$row["payment"];
    $amount =$row["amount"];
	$amount = number_format($amount,2);
    $document1 =$row["document1"];
	print <<<HERE
			<tr>
				<td>$contract</td>
				<td>$driver</td>
				<td>TR$vehicle</td>
				<td>$type</td>
				<td>$duration</td>
				<td>$payment</td>
				<td><span>&#8358;</span>$amount</td>
			</tr>
HERE;
	$count++; }
									print <<<HERE
		<tbody>
	</table>
HERE;
}

function scroll_to_top(){
$scroll_to_top = print <<<HERE
         <!-- begin scroll to top btn -->
         <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll_to_top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
         <!-- end scroll to top btn -->
HERE;
return $scroll_to_top;
}

function page_end(){
	$page_end = print <<<HERE
	
      <!-- end page container -->
      <!-- ================== BEGIN BASE JS ================== -->
      <script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
      <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      <!--[if lt IE 9]>
      <script src="../assets/crossbrowserjs/html5shiv.js"></script>
      <script src="../assets/crossbrowserjs/respond.min.js"></script>
      <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
      <![endif]-->
      <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
      <script src="../assets/js/theme/default.min.js"></script>
      <script src="../assets/js/apps.min.js"></script>
      <!-- ================== END BASE JS ================== -->
      <!-- ================== BEGIN PAGE LEVEL JS ================== -->
      <script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
      <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
      <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
      <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
      <script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
      <script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
      <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
      <script src="../assets/js/demo/dashboard.min.js"></script>
	  <script src="../assets/plugins/parsley/dist/parsley.js"></script>
	  <script src="../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	  <script src="../assets/js/demo/form-wizards-validation.demo.min.js"></script>
	  <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	  <script src="../assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	  <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	  <script src="../assets/plugins/masked-input/masked-input.min.js"></script>
	  <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	  <script src="../assets/plugins/password-indicator/js/password-indicator.js"></script>
	  <script src="../assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	  <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	  <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	  <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	  <script src="../assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	  <script src="../assets/plugins/bootstrap-daterangepicker/moment.js"></script>
	  <script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	  <script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
	  <script src="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
	  <script src="../assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	  <script src="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	  <script src="../assets/plugins/clipboard/clipboard.min.js"></script>
	  <script src="../assets/js/demo/form-plugins.demo.min.js"></script>
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
	<script src="../assets/js/demo/ui-modal-notification.demo.min.js"></script>

	<script src="..\assets\plugins\bootstrap-datepicker\js\bootstrap-datepicker.js"></script>
	<script src="..\assets\plugins\ionRangeSlider\js\ion-rangeSlider\ion.rangeSlider.min.js"></script>
	<script src="..\assets\plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.min.js"></script>
	<script src="..\assets\plugins\masked-input\masked-input.min.js"></script>
	<script src="..\assets\plugins\bootstrap-timepicker\js\bootstrap-timepicker.min.js"></script>
	<script src="..\assets\plugins\password-indicator\js\password-indicator.js"></script>
	<script src="..\assets\plugins\bootstrap-combobox\js\bootstrap-combobox.js"></script>
	<script src="..\assets\plugins\bootstrap-select\bootstrap-select.min.js"></script>
	<script src="..\assets\plugins\bootstrap-tagsinput\bootstrap-tagsinput.min.js"></script>
	<script src="..\assets\plugins\bootstrap-tagsinput\bootstrap-tagsinput-typeahead.js"></script>
	<script src="..\assets\plugins\jquery-tag-it\js\tag-it.min.js"></script>
	<script src="..\assets\plugins\bootstrap-daterangepicker\moment.js"></script>
	<script src="..\assets\plugins\bootstrap-daterangepicker\daterangepicker.js"></script>
	<script src="..\assets\plugins\select2\dist\js\select2.min.js"></script>
	<script src="..\assets\plugins\bootstrap-eonasdan-datetimepicker\build\js\bootstrap-datetimepicker.min.js"></script>
	<script src="..\assets\plugins\bootstrap-show-password\bootstrap-show-password.js"></script>
	<script src="..\assets\plugins\bootstrap-colorpalette\js\bootstrap-colorpalette.js"></script>
	<script src="..\assets\plugins\jquery-simplecolorpicker\jquery.simplecolorpicker.js"></script>
	<script src="..\assets\plugins\clipboard\clipboard.min.js"></script>
	<script src="..\assets\js\demo\form-plugins.demo.min.js"></script>
	<script src="..\assets\plugins\DataTables\media\js\jquery.dataTables.js"></script>
	<script src="..\assets\plugins\DataTables\media\js\dataTables.bootstrap.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\dataTables.buttons.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\buttons.bootstrap.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\buttons.flash.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\jszip.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\pdfmake.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\vfs_fonts.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\buttons.html5.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Buttons\js\buttons.print.min.js"></script>
	<script src="..\assets\plugins\DataTables\extensions\Responsive\js\dataTables.responsive.min.js"></script>
	
      <script>
         $(document).ready(function() {
         	App.init();
         	Dashboard.init();
			FormWizardValidation.init();
			TableManageButtons.init();
         });
      </script>
	<script>
	    $(".js-range-slider").ionRangeSlider();
		
	</script>    
HERE;
return $page_end;
}

?>