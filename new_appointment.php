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
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->


	<script type="text/javascript">
	function dues(a){
var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var percentage = (parseInt(txtFirstNumberValue)/100)* parseInt(txtSecondNumberValue);
       var t_percentage= parseInt(txtFirstNumberValue) - percentage; 

        if (!isNaN(t_percentage)) {
           document.getElementById('txt3').value = t_percentage;
           document.getElementById('txt5').value = t_percentage;
       }
		
       var txtthirdNumberValue = document.getElementById('txt4').value;

       var dues = t_percentage - parseInt(txtthirdNumberValue);
       if (!isNaN(dues)) {
           document.getElementById('txt5').value = dues;
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
			<div class="content-wrapper">

			<div class="content">
	<div class="content-wrapper">
	    <!-- Main content -->
	    <section class="content">
	        <div class="box box-warning">
	            <div class="box-header with-border">
	                <h3 class="box-title ">Book Appointment</h3>
	            </div><!-- /.box-header -->
	            <div class="box-body">
	                <form action="" method="post" accept-charset="utf-8" name="appointment_form" id="appointment_form">                   
	                 <div class="row">
	                        <div class="col-md-12">
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label>Name <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Name" value="" />
	                                    </div>        
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="int">Age <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm" name="age" id="age" placeholder="Age" value="" />
	                                    </div>        
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="enum">Gender <span class="text-danger">*</span> </label>
	                                        <select name="gender" class="form-control input-sm" id="sex">
													<option value="" selected="selected">-- SELECT GENDER --</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="others">Others</option>
													</select>                                
													    </div>        
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label>Phone <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm" name="phone" id="phone" placeholder="Phone" value="" />
	                                    </div>        
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label>Email Id </label>
	                                        <input type="text" class="form-control input-sm" name="email_id" id="email_id" placeholder="Email Id" value="" />
	                                    </div>        
	                                </div>
	                            </div>

	                           
	                            <div class="row">
	                                
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="decimal">Price ($) <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm"  name="price" id="txt1" onkeyup="return dues(event);" placeholder="Test Price" value="0" />
	                                    </div>    
	                                </div>


	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="int">Discount (%) </label>
	                                        <input type="text" class="form-control input-sm" name="discount" onkeyup="return dues(event);" id="txt2" placeholder="Discount eg:(10)" value="0" />
	                                    </div>        
	                                </div>

	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="decimal">Price After Discount <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm" name="pr_af_dis" readonly  id="txt3" placeholder="Total Price" value="0" />
	                                    </div>        
	                                </div>
	                                       
	                               
	                                
	                               
	                            </div>
	                            <div class="row">
	                                
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="decimal">Paid <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm"  name="a_paid" id="txt4" onkeyup="return dues(event);" placeholder="paid" value="0" />
	                                    </div>    
	                                </div>


	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="int">Dues </label>
	                                        <input type="text" class="form-control input-sm" name="a_dues" readonly id="txt5" placeholder="Dues" value="0" />
	                                    </div>        
	                                </div>

	                                </div>

	                            <div class="row">
	                                
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label for="int">Blood Group </label>
	                                        <select name="blood_group" class="form-control input-sm" id="blood_group">
												<option value="" selected="selected">-- SELECT BLOOD GROUP --</option>
												<option value="a+">A+</option>
												<option value="a-">A-</option>
												<option value="b+">B+</option>
												<option value="b-">B-</option>
												<option value="o+">O+</option>
												<option value="o-">O-</option>
												<option value="ab+">AB+</option>
												<option value="ab-">AB-</option>
												<option value="ab-">Unknown</option>
												</select>                                    </div>        
	                                </div>

	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label>Appointment Time <span class="text-danger">*</span> </label>
	                                        <input type="text" class="form-control input-sm" name="sample_collection_time"  id="sample_collection_time" placeholder="Sample Collection Time" onclick="times();" value="" />
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                        <label>Appointment Date <span class="text-danger">*</span> </label>
	                                        <input type="date" class="form-control input-sm" name="appointment_date" id="sample_collection_date" placeholder="Sample Collection Date" value="" />


	                                    </div>
	                                </div>
	                               
	                            </div>
	                            <div class="row">
	                                <div class="col-md-12">
	                                    <label>Reference By Doctor <span class="text-danger">*</span> </label>    
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <select name="doctor_ref_by" class="form-control input-sm" id="doctor_ref_by" >
												<option value="" selected="selected">-- SELECT DOCTOR --</option>
												<option value="vura rama krishna">Dr. Vura Rama Krishna (Otolaryngologist)</option>
												<option value="b bhaskar">Dr. B Bhaskar (General Medcine)</option>
												<option value="others">Others</option>
												</select> 
											</div>        
										</div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <input type="text" class="form-control input-sm " 
	                                        name="" id="other_doctor_ref_by" placeholder="Specify Doctor Name" value="" />
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row">
			                                 <div class="col-md-6">
			                                    <div class="form-group">
			                                        <label for="decimal">Payment Status <span class="text-danger">*</span> </label>
							                         <select name="payment_status" class="form-control input-sm" id="payment_status">
														<option value="" selected="selected">-- SELECT PAYMENT STATUS --</option>
														<option value="unpaid">Unpaid</option>
														<option value="paid">Paid</option>
														</select>                         
													</div>        
			                                </div>
			                                <div class="col-md-6">
			                                    <div class="form-group">
			                                        <label for="enum">Status <span class="text-danger">*</span> </label>
			                                        <select name="appointment_status" class="form-control input-sm" id="appointment_status">
															<option value="" selected="selected">-- SELECT APPOINTMENT STATUS --</option>
															<option value="pending">Pending</option>
															<option value="inprogress">Inprogress</option>
															<option value="cancelled">Cancelled</option>
													</select>    
			                                    </div>
			                                </div>
			                                
	                            </div>
	                            <br>
	                            <button type="submit" name="book" class="btn btn-primary">Book</button> 
	                            <input type="reset" value="Reset" class="btn btn-warning">
	                            <button type="button" name="book" class="btn  btn-danger">Cancel</button>
	                        </div>
	                    </div>
	                </form>
	            </div><!-- /.box-body -->
	        </div><!-- /.box -->
					<!-- Footer -->
				
					
					<!-- /footer -->

				</div>
				<!-- /content area -->

			
			<!-- /main content -->

		
		<!-- /page content -->


	<!-- /page container -->

</body>

</html>
<?php 


	if(isset($_POST['book']))
	{
		extract($_POST);

	$q = "insert into  appointments  set name = '$name' , age='$age' , sex= '$gender',Phone_no ='$phone' ,email='$email_id' ,price ='$price',discount='$discount',pr_af_dis ='$pr_af_dis' ,bld_grp ='$blood_group',smp_col_tim ='$sample_collection_time',ref_by_doc='$doctor_ref_by' ,pay_stat='$appointment_status',app_stat='$payment_status'";

            $res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));

             if($res){

                //         echo "<script>alert 'data inserted'</script>";
                }
                else{

                          //  header("location:?error=1");
                }
           }

?>
<?php

$email_id = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["book"]))
{
	
	if(empty($_POST["email_id"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email_id = clean_text($_POST["email_id"]);
		if(!filter_var($email_id, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	
	
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		//$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.medproj.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'med.project.77@gmail.com';					//Sets SMTP username
		$mail->Password = 'temppassword';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST["email_id"];					//Sets the From email address for the message
		$mail->FromName = "Medical Center Name";				//Sets the From name of the message
		//$mail->AddAddress('email address', 'Name');		//Adds a "To" address
		$mail->AddCC($_POST["email_id"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = "Medical Center";				//Sets the Subject of the message
		$mail->Body = "Thank You for Visiting us <br> Your appointment is done";				//An HTML or plain text message body
		
		$mail->isHTML(true);  
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';

		}
		$email = '';
	}
}

?>
<script type="text/javascript">
	function date() {
	$( "#sample_collection_time" ).datepicker();
	}</script>