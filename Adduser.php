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
<?php 
require_once("includes/conn.php");


if(isset($_POST['signup'])){
	            //print_r($_POST);
	extract($_POST);

	        //   Now we are Checking that email Already Exits or Not
	       // $chk_email = "select * from users where  email like '$email_signup'";
	       // $result_chk = mysqli_query($conn,$chk_email);
	         //if( !empty($result_chk) )
	         //alert($chk_email);

	        //  End 


	$q = "insert into users set name='$username_signup',password='$password_login',role='$roles'";
	$res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
	if($res){
	                           // echo "<script>alert('User Inserted');</script>";
		header("location:adduser.php");
	}else{

		echo "<script>alert('User not Inserted');</script>";
	}

}
?>
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
						<form class="form" action="" method="post"  autocomplete="on">
							<div class="col-lg-4 mine">
								<div class="row">
									<div class="col-md-12">

										<span class="label label-block label-primary ">User Name:</span>
										<input type="text" class="form-control" name="username_signup">
									</div>
								</div>
								<br><br>
								<div class="row">
									<div class="col-md-12">

										<span class="label label-block label-danger">User Password:</span>
										<input type="text" class="form-control" name="password_login">
									</div>

								</div>
								<br><br>
								<div class="row">

									<div class="col-md-12">

										<span class="label label-block label-info ">User Role:</span>
										<select name="roles" class="form-control" >
											<option value="admin" >Admin</option>
											<option value="user">User</option>
										</select><br>
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
									
										<th>User Id</th>
												<th>User Name</th>
												<th>User Password</th>
												<th>User Role</th>
										
										<th class="text-center">Actions</th>
									</tr>
								</thead>

								<tbody>						
										<?php 
												$query = "select * from users";
												$run = mysqli_query($conn,$query);
												while ($row = mysqli_fetch_array($run)) {
													//extract($_row);
													$u_id = $row['id'];
											$user_name = $row['name'];

											$user_password = $row['password'];
											$user_role = $row['role'];

												?>
								
									<tr>
										
										<td><?php echo $u_id; ?></td>
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
													<li><a href="delete_Doctor.php?del=<?php echo $u_id; ?> "><i class="icon-file-pdf"></i> Remove</a></li>
														<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													</ul>
												</li>
											</ul>
										</td>

													<td style="display:none;"></td>
									</tr>
								
									<?php } ?>
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
