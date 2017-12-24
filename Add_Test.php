<?php
session_start();
if(!isset($_SESSION['userId']))

                echo "<script type='text/javascript'>  window.location='home.php'; </script>";
if(!isset($_SESSION['role'])){

$role = $_SESSION['userRole'];
if($role != 'admin') {


                echo "<script type='text/javascript'>  window.location='home.php'; </script>";
}
}
$uid = $_SESSION['userId'];

require_once("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/datatable_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Oct 2017 09:35:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical Center</title>

	<!-- Global stylesheets -->
	<link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->

	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<!-- /theme JS files -->
	<!-- /theme JS files -->
	
</head>

<body>

	
		<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="home.php"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span><?php echo $_SESSION['userName']; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="Adduser.php"><i class="icon-cog5"></i> Account settings</a></li>
						<li class="divider"></li>
						<li><a href="index.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
		<!-- /main navbar -->
	<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main">
					<div class="sidebar-content">


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">

									<!-- Main -->
									<br>

									<li class="active"><a href="home.php"><i class="icon-home4"></i> <span>Dashboard</span></a>
									</li><hr>
										<li>
											<a href="#"><i class="glyphicon glyphicon-bed"></i> <span>Patient</span></a>
											<ul>
												<li><a href="Allpatients.php">List of Patients</a></li>
												<li><a href="add_patient.php">Add Patient</a></li>

											</ul>
										</li>
										
										<li>
											<a href="#"><i class="glyphicon glyphicon-education"></i> <span>Doctor</span></a>
											<ul>
												<li><a href="Alldoctors.php" id="layout1">List of Doctors</a></li>
												<li><a href="AddDoctor.php">Add Doctor</a></li>
											</ul>
										</li>
										
										<li>
											<a href="#"><i class="icon-droplet2"></i> <span>Test</span></a>
											<ul>
												<li><a href="AllTest.php">List of Test</a></li>
												<li><a href="Add_Test.php">Add Patient Test</a></li>
												<li><a href="t_detail.php">Add New Test</a></li>
											</ul>
										</li>
										
										<li><a href="#"><i class="icon-calendar3"></i> <span>Appointment</span></a>
											<ul>
												<li><a href="new_appointment.php">New Appointment</a></li>
												<li><a href="Allappointments.php">List of Appointment</a></li>
											</ul>
										</li>
										<hr>
										<li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Setting</span></a>
											<ul>
												<li><a href="Adduser.php">Users Data</a></li>
												<li><a href="header.php">Header</a></li>
												<li><a href="footer.php">Footer</a></li>
												<li><a href="#">SMS Setting</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Finance</span></a>
											<ul>
												<li><a href="#">Add Income</a></li>
												<li><a href="AddExpense.php">Add Expense</a></li>
											</ul>
										</li>
										
										<li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Reports</span></a>
										</li>
										
										<!-- /main -->

										<!-- /page kits -->

									</ul>
								</div>
							</div>
							<!-- /main navigation -->

						</div>
					</div>
					<!-- /main sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">
				<div class="content">
					<div class="page-header page-header-default">
						<div class="page-header-content">
							<div class="page-title">
								<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Patient</span> - Add Test</h4>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post"  autocomplete="on" >

							<div class="form-group">
								<div class="col-lg-12">
									<div class="row" >
										<div class="col-md-3">
											<div class="input-group">
												<span class="input-group-addon">Name</span>
												<input type="text" name="name" class="form-control" placeholder="Set Patient Name">
											</div>
										</div>
										<div class="col-md-3">
											<div class="input-group">
												<span class="input-group-addon">Age</span>
												<input type="text" name="age" class="form-control" placeholder="Set Patient Age">
											</div>
										</div>
										<div class="col-md-3">
										
										<div class="input-group">
											<span class="input-group-addon">D-Time</span>
											
											
											<input type="text" class="form-control" id="anytime-time" value="12:00">
										
										</div>
									</div>

								</div>
								<br><br>
								<div class="row" >
									<div class="col-md-3">
										<div class="input-group">
											<span class="input-group-addon">Mobile No</span>
											<input type="text" name="mobile" class="form-control" placeholder="Set Mobile no">
										</div>
									</div>
									<div class="col-md-3">
										<div class="input-group">
											<span class="input-group-addon">D-Date</span>
											<input type="date" name="date" class="form-control" placeholder="Set Date">
										</div>
									</div>

									<div class="col-md-3">
											<div class="input-group">
												<span class="input-group-addon">Gender</span>
												<SELECT class="form-control"
												placeholder="Left addon" name = "gender">
												<option value="">Select Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="Other">Other</option>
											</SELECT>

										</div>
									</div>
								</div>
								<br><br>
								<div class="row" >
									<div class="col-md-3">
										<div class="input-group">
											<span class="input-group-addon">Referred by</span>
											<SELECT class="form-control" name="doctor"
											placeholder="Left addon">
											<option value="No Reference">No Reference</option>
											<option value="Dr.A">Dr.A</option>
											<option value="Dr.B">Dr.B</option>
											<option value="Dr.C">Dr.C</option>
										</SELECT>
									</div>
								</div>
								<div class="col-md-3">
									<div class="input-group">
										<span class="input-group-addon">Payment</span>
										<input type="text" name ="Invoice"  class="form-control" placeholder="Payment here">
									</div>
								</div>
							</div>
							<br><br>
							<div class="row" >
								<div class="form-group">
									<div class="col-md-9">
										<div class="input-group">									
											<span class="input-group-addon"><b>Description</b></span>
											<textarea rows="2" name="Description" class="form-control " placeholder="Description is here"></textarea>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="row" >
								<div class="col-md-5"></div>
								<div class="col-md-2">
									<label class="control-label "></label>
									<BUTTON type="text" placeholder="Get Patient Info" class=" form-control btn btn-default" name="appId"><i class="icon-reload-alt position-right"></i> &nbsp &nbsp<b>Reset</b>
									</BUTTON>
								</div>
								<div class="col-md-2">
									<label class="control-label "></label>
									<BUTTON type="submit" name="submit" placeholder="Get Patient Info" class=" form-control btn btn-large btn-info " name="appId"><b>Submit Test</b></BUTTON>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- /Content End here -->
	</div>
</div>
<!-- /page container -->

</body>
</html>

<?php 

require_once("includes/conn.php");
if (isset($_POST['submit'])) {
	
	extract($_POST);
	$q = "insert into  tests  set name = '$name', age = '$age', Description = '$Description' , Invoice = '$Invoice' ,  doctor = '$doctor' , date ='$date' , time = '$time' , gender = '$gender' , mobile = '$mobile' ";
	$res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
	if($res){
		echo "<script>alert('Test Inserted');</script>";
	}else{

		echo "<script>alert('Test not Inserted');</script>";
	}
}

?>