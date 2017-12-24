<?php
session_start();
if(!isset($_SESSION['userId']))
header("location:../index.php");
if(!isset($_SESSION['role'])){

$role = $_SESSION['userRole'];
if($role != 'user') {

header("location:../index.php");
}
}
$uid = $_SESSION['userId'];

require_once("../includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical Center</title>

	<!-- Global stylesheets -->
	<link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->

	<script type="text/javascript" src="../assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script type="text/javascript" src="../assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="../assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/picker_date.js"></script>


	<script type="text/javascript" src="../assets/js/pages/datatables_advanced.js"></script>
	<!-- /theme JS files -->

</head>

<body>
<!-- Main navbar -->
		<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="home2.php"><img src="../assets/images/logo_light.png" alt=""></a>

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
						<li><a href="../index.php"><i class="icon-switch2"></i> Logout</a></li>
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

										<!-- /main -->
								<!-- Main -->
									<br>

									<li class="active"><a href="home2.php"><i class="icon-home4"></i> <span>Dashboard</span></a>
									</li><hr>
										<li>
											<a href="#"><i class="glyphicon glyphicon-bed"></i> <span>Patient</span></a>
											<ul>
												<li><a href="Allpatients.php">List of Patients</a></li>

											</ul>
										</li>
										
										<li>
											<a href="#"><i class="glyphicon glyphicon-education"></i> <span>Doctor</span></a>
											<ul>
												<li><a href="Alldoctors.php" id="layout1">List of Doctors</a></li>
											</ul>
										</li>
										
										<li>
											<a href="#"><i class="icon-droplet2"></i> <span>Test</span></a>
											<ul>
												<li><a href="AllTest.php">List of Test</a></li>
											</ul>
										</li>
										
										<li><a href="#"><i class="icon-calendar3"></i> <span>Appointment</span></a>
											<ul>
												<li><a href="Allappointments.php">List of Appointment</a></li>
											</ul>
										</li>
										<hr>
										<li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Setting</span></a>
											<ul>
												<li><a href="Adduser.php">Users Data</a></li>
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


					
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">List Of All Expenses</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
												<li><a data-action="reload"></a></li>
												<li><a data-action="close"></a></li>
											</ul>
										</div>
									</div>

									<div class="panel-body">
										All Expense of your Hospital with a simple search.
									</div>

									<table class="table table-bordered table-hover datatable-highlight">
										<thead>
											<tr>
												<th>Expense ID</th>
												<th>Category</th>
												<th>Date</th>
												<th>Amount</th>
												<th>Dues</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<!-- <h1 align="center"><?php //echo @$_GET['deleted']; ?></h1> -->


										
											<tbody>
											<?php 
										$query = "select * from expense";
										$run = mysqli_query($conn,$query);
										while ($row = mysqli_fetch_array($run)) {
														//extract($_row);
											$u_id = $row['id'];
											$exp_cat = $row['cat'];

											$exp_date = $row['date'];
											$exp_amount = $row['amount'];
											$exp_dues = $row['dues'];


											?>
												<tr>
													<td><?php echo $u_id; ?></td>
													<td><?php echo $exp_cat; ?></td>
													<td><?php echo $exp_date; ?></td>
													<td><?php echo $exp_amount; ?></td>
													<td><?php echo $exp_dues; ?></td>

													<td class="text-center">
														<ul class="icons-list">
															<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-menu9"></i>
																</a>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
																</ul>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
											<?php } ?>
											</table>
							</div>

						</div>
						<!-- /main content -->

					</div>
					<!-- /page content -->

				</div>
				<!-- /page container -->

			</body>
			</html>
