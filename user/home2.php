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
 <?php

    $sql="select count('id') from appointments";
    $tesssst="select count('id') from tests";
    $docto="select count('id') from doctor";
    $exp="select count('id') from expense";
$pat="select count('id') from patients";


$result=mysqli_query($conn,$sql);
$tessst=mysqli_query($conn,$tesssst);
$doct=mysqli_query($conn,$docto);
$expen=mysqli_query($conn,$exp);
$pres=mysqli_query($conn,$pat);


$row=mysqli_fetch_array($result);
$tesst=mysqli_fetch_array($tessst);
$doc=mysqli_fetch_array($doct);
$expenc=mysqli_fetch_array($expen);
$ro=mysqli_fetch_array($pres);

$pat="$row[0]";
$test="$tesst[0]";
$do="$doc[0]";
$expence="$expenc[0]";
$pres="$ro[0]";
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=8">
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
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/dashboard.js"></script>
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

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="home2.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-6">

							<!-- Traffic sources -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Total Record</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="checked">
													Live update:
												</label>
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-12">
											<div id="chart_div"></div>
										</div>

										
									</div>
								</div>

							</div>
							<!-- /traffic sources -->

						</div>

						<div class="col-lg-6">

							<!-- Sales stats -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Daily Record</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<select class="change-date select-sm" id="select_date">
													<optgroup label="<i class='icon-watch pull-right'></i> Time period">
														<option value="val1">June, 29 - July, 5</option>
														<option value="val2">June, 22 - June 28</option>
														<option value="val3" selected="selected">June, 15 - June, 21</option>
														<option value="val4">June, 8 - June, 14</option>
													</optgroup>
												</select>
											</div>
										</form>
				                	</div>
								</div>

								<div class="container-fluid">
									<div class="row text-center">
										<div class="col-md-12">
											<div id="chart_div2"></div>
											
										</div>

										
									</div>
								</div>

							</div>
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->



							<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
											<div class="heading-elements">
												<span class="heading-text badge bg-teal-800">+53,6%</span>
											</div>

											<h3 class="no-margin">3,450</h3>
											Members online
											<div class="text-muted text-size-small">489 avg</div>
										</div>

										<div class="container-fluid">
											<div id="members-online"></div>
										</div>
									</div>
									<!-- /members online -->

								</div>

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="panel bg-pink-400">
										<div class="panel-body">
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li class="dropdown">
							                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
															<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
															<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
															<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
														</ul>
							                		</li>
							                	</ul>
											</div>

											<h3 class="no-margin">49.4%</h3>
											Current server load
											<div class="text-muted text-size-small">34.6% avg</div>
										</div>

										<div id="server-load"></div>
									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="panel bg-blue-400">
										<div class="panel-body">
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="reload"></a></li>
							                	</ul>
						                	</div>

											<h3 class="no-margin">$18,390</h3>
											Today's revenue
											<div class="text-muted text-size-small">$37,578 avg</div>
										</div>

										<div id="today-revenue"></div>
									</div>
									<!-- /today's revenue -->

								</div>
							</div>
							<!-- /quick stats boxes -->



</div>
							
						


								<!-- Daily stats -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Daily stats</h6>
									<div class="heading-elements">
										<span class="heading-text">Balance: <span class="text-bold text-danger-600 position-right">$4,378</span></span>
										<ul class="icons-list">
					                		<li class="dropdown text-muted">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
												</ul>
					                		</li>
					                	</ul>
									</div>
								</div>

								<div class="panel-body">
									<div id="sales-heatmap"></div>
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>Module</th>
												<th>Time</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Patient Module</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-checkmark3 text-size-mini position-left"></i> New order</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">06:28 pm</span>
												</td>
												<td>
													<h6 class="text-semibold no-margin">$49.90</h6>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Test  Module</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Renewal</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">04:52 pm</span>
												</td>
												<td>
													<h6 class="text-semibold no-margin">$90.50</h6>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-indigo-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Doctor Module</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Support</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">01:26 pm</span>
												</td>
												<td>
													<h6 class="text-semibold no-margin">$60.00</h6>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Appointment Module</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Support</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">11:46 am</span>
												</td>
												<td>
													<h6 class="text-semibold no-margin">$55.00</h6>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Expense Module</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Renewal</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">10:29 am</span>
												</td>
												<td>
													<h6 class="text-semibold no-margin">$90.50</h6>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /daily stats -->




							

						</div>
					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
					
					<!-- /footer -->

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
  <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
   

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {


        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Patients', <?php echo $pres; ?>],
          ['Appointments', <?php echo $pat; ?>],
          ['Tests', <?php echo $test; ?>],
          ['Doctors', <?php echo $do; ?>],
          ['Expenses', <?php echo $expence; ?>]
        ]);

        // Set chart options
        var options = {'title':'Hospital Record',
                       'width':450,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
     <script type="text/javascript">
   

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {


        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Patients', <?php echo $pres; ?>],
          ['Appointments', <?php echo $pat; ?>],
          ['Tests', <?php echo $test; ?>],
          ['Doctors', <?php echo $do; ?>],
          ['Expenses', <?php echo $expence; ?>]
        ]);

        // Set chart options
        var options = {'title':'Hospital Record',
                       'width':450,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart2.draw(data, options);
      }
    </script>