<?php 
	session_start();
	require_once("includes/conn.php");


	$query = "select * from doctor";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	//print_r($row);
	$d_id = $row['id'];
	$name = $row['name'];
	$phone = $row['phone'];
	$email = $row['email'];
	//$price = $row['price'];
	//$Discount = $row['discount'];
	//$price = $row['pr_af_dis'];
	$address = $row['address'];
	$dob = $row['dob'];
	$desg = $row['desg'];
	$joining = $row['joining'];


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
	<link href="assets/css/AddDoctor.css" rel="stylesheet" type="text/css">
	<!--<link href="mcss/font.css" rel="stylesheet" type="text/css"> -->

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

</head>
<?php 
        require_once("includes/conn.php");


        if(isset($_POST['submit'])){
            //print_r($_POST);
            extract($_POST);

        //   Now we are Checking that email Already Exits or Not
       // $chk_email = "select * from users where  email like '$email_signup'";
       // $result_chk = mysqli_query($conn,$chk_email);
         //if( !empty($result_chk) )
         //alert($chk_email);

        //  End 


            $q = "UPDATE `doctor` set name='$name',email='$email',dob='$dob',phone='$phone',address='$address',desg='$desg',joining='$joining'";
            $res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
             if($res){
                            echo "<script>alert('Doctor Inserted');</script>";
                }else{

                            echo "<script>alert('Doctor not Inserted');</script>";
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
						<span>Nadeem</span>
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
												<li><a href="Allappointments.php">List of Test</a></li>
												<li><a href="Add_Test.php">Add Test</a></li>
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
												<li><a href="#">SMS Setting</a></li>
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

				

				<!-- /content area -->
					 <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">SET DOCTOR INFORMATION</h3>
                </div>
                <h4 style="color: green; padding-left: 150px;">
                                    </h4>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="post"  autocomplete="on">
                    <div class="box-body">
                       <br>
                        <div class="form-group">
                            <label for="inputField2" class="col-sm-2 control-label">Doctor Name</label>
                            <div class="col-sm-10">
                                <input type="text" required name="name" value="" class="form-control" id="inputField2" placeholder="Set Doctor Name">
                                <span style="color: red"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputField4" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="" class="form-control" id="inputField4" placeholder="Set Email">
                                <span style="color: red"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputField8" class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="dob" value="" class="form-control pull-right datepicker" >
                                    <span style="color: red"></span>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputField5" class="col-sm-2 control-label">Mobile No</label>
                            <div class="col-sm-10">
                                <input type="text" required name="phone" value="" class="form-control" id="inputField5" placeholder="Set Mobile No">
                                <span style="color: red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputField7" class="col-sm-2 control-label">Contact Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputField7" rows="3" name="address" placeholder="Enter address ..."></textarea>
                                <span style="color: red"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputField6" required class="col-sm-2 control-label">Designation</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputField6" rows="3" name="desg" placeholder="Enter designation ..."></textarea>
                                <span style="color: red"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputField9" class="col-sm-2 control-label">Join Date</label>
                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <!--<input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>-->
                                    <input type="date" name="joining" class="form-control pull-right datepicker" >
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-info pull-right" name="submit">Update</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>

			<!-- /main content -->

	
		<!-- /page content -->

	</div>
</div>
	<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_1/LTR/default/datatable_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Oct 2017 09:35:30 GMT -->
</html>
