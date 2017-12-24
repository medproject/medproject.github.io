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

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="wid
	th=device-width, initial-scale=1">
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

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_advanced.js"></script>

	<!-- /theme JS files -->
	<style type="text/css">
	.mine{
		padding-top: 0;
	}
</style>

<script type="text/javascript" src="tablePrint/users.js"></script>
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


				<!-- /page header -->


				<!-- Content area -->
				<div class="content">


					<div class="form-group">
						<br>
						<form class="form" action="" method="get"  autocomplete="on">
							<div class="col-lg-4 mine">
								
							
								<div class="row">

									<div class="col-md-12">

										<span class="label label-block label-info ">Test Name:</span>
					 			<select name="roles" class="form-control">
								<?php
									$query = mysqli_query($conn,"select * from t_detail");
									while($t_detail = mysqli_fetch_array($query)){
										echo "<option value='".$t_detail['t_d_name']."'>".$t_detail['t_d_name']."</option>";
										$t_id = $t_detail['id'];
									}

								?>					 		
					 	</select><br>  <li><a href="patienttest.php?del=<?php echo $t_id; ?> "><i class="icon-file-pdf"></i> Remove</a></li>
           
										<div class="col-md-12 text-center">
											<button type="submit" class="btn btn-primary" name="signup">Submit <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<div class="col-lg-8">
							<div class="row">
								<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">List Of All Users</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a href="javascript:callme()" data-action="modal"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
										All Users in your Hospital with a simple search.
							</div>
								
							<table class="table table-bordered table-hover datatable-highlight" id="table-id">
								<thead>
									<tr>
									
										<th>Test Id</th>
												<th>Test Name</th>
												<th>Normal Range</th>
												<th>Price</th>
										
										<th class="text-center">Actions</th>
									</tr>
								</thead>

								<tbody>	
								<?php 
require_once("includes/conn.php");


if(isset($_POST['signup'])){
	            //print_r($_POST);
	 $delete_id = $_GET['del'];
	 echo $delete_id;

	        //   Now we are Checking that email Already Exits or Not
	       // $chk_email = "select * from users where  email like '$email_signup'";
	       // $result_chk = mysqli_query($conn,$chk_email);
	         //if( !empty($result_chk) )
	         //alert($chk_email);

	        //  End 


	$query = "select * from t_detail where t_d_name like '$delete_id'";

												$run = mysqli_query($conn,$query);
												while ($row = mysqli_fetch_array($run)) {
													//extract($_row);
													$t_id = $row['t_d_id'];
											$user_name = $row['t_d_name'];

											$user_password = $row['t_normal'];
											$user_role = $row['t_price'];

												?>
								
									<tr>
										
										<td><?php echo $t_id; ?></td>
													<td><?php echo $user_name; ?></td>
													<td><?php echo $user_password; ?></td>

													<td><?php echo $user_role; ?></td>
										
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Edit</a></li>
													<li><a href="delete_Doctor.php?del=<?php echo $t_id; ?> "><i class="icon-file-pdf"></i> Remove</a></li>
														<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													</ul>
												</li>
											</ul>
										</td>

													<td style="display:none;"></td>
									</tr>
								
									<?php } } ?>

								</tbody>
							</table></div>
									<!-- /highlighting rows and columns -->



								</div>
							</div>
						</div>
						<br>
						<br><br><br>






					</div>
					<!-- /content area -->

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

	</body>

	</html>

<script type="text/javascript" src="tablePrint/jspdf.js"></script>
