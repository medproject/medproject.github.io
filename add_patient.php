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
<?php 

if (isset($_POST['search'])) {
	extract($_POST);
	$query = "select * from Appointments where Phone_no = '$getRecord' OR email like '$getRecord' OR id = '$getRecord'";
	
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	//print_r($row);
	$name = $row['name'];
	$age = $row['age'];
	$gender = $row['sex'];
	$phone = $row['Phone_no'];
	$email = $row['email'];
	//$price = $row['price'];
	//$Discount = $row['discount'];
	//$price = $row['pr_af_dis'];
	$blood_group = $row['bld_grp'];
	$Smp_col_tim = $row['smp_col_tim'];
	$Ref_by_doc = $row['ref_by_doc'];
	$pay_stat = $row['pay_stat'];
	$app_stat = $row['app_stat'];

}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
	<link href="Manual css/ButtonVisibility.css" rel="stylesheet" type="text/css">
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
	<script type="text/javascript">
	function dues(a){
var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('txt3').value = result;
       }

       if(document.getElementById('txt3').value > 0 ){
       	document.getElementById('pay_stat').innerHTML = '1';
       }
		
	}
		
       
	</script>

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
			

			<!-- /page header -->
			<div class="page-header page-header-default">
				<div class="page-header-content">
					<div class="page-title">
						<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Setting</span> - Add Patient</h4>
					</div> 
				</div>
			</div>
			<div class="content">

				<!-- Add user input start from here -->
				<div class="panel-body">
					<form class="form-horizontal" action="" method="post"  autocomplete="on" >

						<div class="form-group">
							<div class="col-lg-8" >
								<div class="row" >

									<div class="col-md-8">
										<span class="text-left"> Phone Number:</span>
										<input type="text" placeholder="Enter Phone number"  value ="<?php echo $getRecord; ?>" class="form-control" name="getRecord">

									</div>
									<div class="col-md-4">
										<span >Get Student Info:</span>
										<button type="submit" name="search" type="submit" class="form-control btn btn-info">
											<span class="glyphicon glyphicon-search"></span> Click to Search
										</button>

										
									</div>


								</div>
								<br>
								<div class="row" >

									<div class="col-md-4">
										<span >Name:</span>
										<input type="text" placeholder="Name" class="form-control" value="<?php echo $name;?>" name="name">
									</div>
									<div class="col-md-4">
										<span >Age:</span>
										<input type="text" value="<?php echo $age;?>" name="agee" placeholder="Age" class="form-control">

									</div>
									<div class="col-md-4">
										<span >Gender:</span>
										<select  name="gen" class="form-control">
											<option  value="Female">Male</option>
											<option  value="Female">Female</option>
										</select>

									</div>

								</div>
								<br>
								<div class="row" >
									<div class="col-md-6">
										<span >Phone no:</span>
										<input type="text" name="phone" value="<?php echo 
										$phone; ?>" placeholder="Phone no:" class="form-control">
									</div>
									<div class="col-md-6">
										<span >Email Id:</span>
										<input type="text" value="<?php echo $email;?>" name="email" placeholder="Email Id:" class="form-control">

									</div>

								</div>
								

								<br>
								<div class="row" >

									<div class="col-md-6">
										<span >Blood Group:</span>
										<select  name="blood_grp" class="form-control">
											<?php if (isset($blood_group)) {
												?>
												<option value="<?php echo $blood_group; ?>">
													<?php echo $blood_group; ?>	
												</option>
												<?php 	
											} ?>

											<option value="Not Selected">--Select Blood Group --</option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											<option value="Unknown">Unknown</option>
										</select>

									</div>
									<div class="col-md-6">
										<span >Reference by Doctor:</span>
										<select name="Ref_by_Doc"  class="form-control">
											
											<option value="opt1">--Select Doctor--</option>
											<option value="Dr.A">Dr.A</option>
											<option value="Dr.B">Dr.B</option>
											<?php if (isset($Ref_by_doc )) {
												?>
												<option value="<?php echo $Ref_by_doc; ?>">
													<?php echo $Ref_by_doc ; ?>	
												</option>
												<?php 	
											} ?>
											<option value="Dr.B">No Reference</option>
										</select>

									</div>

								</div>
								<br>
								<div class="row" >
									<div class="col-md-4">

										<span >Full Payment:</span>
										<input type="text"  name="full" id="txt1" placeholder="Full Payment" value="" onkeyup="return dues(event);"  class="form-control">


									</div>
									<div class="col-md-4">

										<span >Paid:</span>
										<input type="text"  name="half" id="txt2" value="0" onkeyup="return dues(event);" class="form-control">


									</div>
									<div class="col-md-4">

										<span >Dues:</span>
										<input type="text"  name="no_payment" id="txt3" value="0" readonly class="form-control">


									</div>
									
									
								</div>
								
								<br>
								<div class="row" >
										<div class="col-md-4">
										<span >Current Date:</span>
										<input type="text"  name="smpl_col_tim" value="<?php echo date("m/d/Y"); ?>" readonly class="form-control">

									</div>
									<div class="col-md-4">
										<span >Payment Status:</span>
										<select id="pay_stat" name="pay_stat" class="form-control">
											<?php if (isset($pay_stat)) {
												?>
												<option value="<?php echo $pay_stat; ?>">
													<?php echo $pay_stat ; ?>	
												</option>
												<?php 	
											} ?>
											<option value="Not selected=">--Select Payment Status--</option>
											<option value="Paid">Paid</option>
											<option value="Unpaid">Unpaid</option>
										</select>

									</div>
									<div class="col-md-4">
										<span >Appointment Status:</span>
										<select name="app_stat" class="form-control">
											<?php if (isset($app_stat)) {
												?>
												<option value="<?php echo $app_stat; ?>">
													<?php echo $app_stat ; ?>	
												</option>
												<?php 	
											} ?>
											<option value="Not selected">--Select Appointment Status--</option>
											<option value="Pending">Pending</option>
											<option value="In progress">In progress</option>
											<option value="Cancelled">Cancelled</option>
										</select>

									</div>

								</div>
								<br><br>
								<div class="row " >
									<div class="col-lg-12">
										<div class="text-right">
											<button type="reset" class="btn btn-default" id="reset" >Reset <i class="icon-reload-alt position-right"></i></button>
											<button id="book" name="reg" type="submit" class="btn btn-primary">Book <i class="glyphicon glyphicon-plus-sign position-right"></i></button>
											<button type="button" class="btn btn-primary">Cencel <i class="glyphicon glyphicon-remove position-right"></i></button>

										</div>
									</div>
								</div>


							</div>
						</div>
					</form>
				</div>
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
<?php 

require_once("includes/conn.php");

if (isset($_POST['reg'])) {

	 extract($_POST);

	
	$q = "insert into  patients  set name = '$name' , age='$agee' , sex='$gen',Phone_no ='$phone' ,email='$email' ,bld_grp ='$blood_grp', smp_col_tim = '$smpl_col_tim' , ref_by_doc = '$Ref_by_Doc' ,pay_stat='$app_stat',app_stat='$pay_stat'";
	$res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
             if($res){
                            echo "<script>alert('Patient Inserted');</script>";
                }else{

                            echo "<script>alert('Patient not Inserted');</script>";
                }
}

?>