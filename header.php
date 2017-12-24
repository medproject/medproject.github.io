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
		
		<script type="text/javascript" src="assets/js/core/app.js"></script>
		<script type="text/javascript" src="assets/js/pages/datatables_advanced.js"></script>
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
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Change Header</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">
							Here You can Change header according to your Hospital.
						</div>

						<table class="table table-bordered table-hover datatable-highlight">
							<thead>
								<tr> 	
									<th style="height:70px">Title</th>
									<th>Logo</th>
									<th>Mobile No:</th>
									<th>Email</th>
									<th>PTCL NO:</th>
									
									<th class="text-center">Actions</th>
								</tr>
							</thead>

							<tbody>
								<?php 
								$query = "select * from header";
								$run = mysqli_query($conn,$query);
								while ($row = mysqli_fetch_array($run)) {
									//extract($_row);
									$title = $row['title'];
									$logo = $row['logo'];
									$phone = $row['phone'];
									$email = $row['email'];
									$address = $row['ptcl'];

									?>
									<tr>
										
										<td style="height:70px"><?php echo $title; ?></td>
										<td><?php echo $logo; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $email; ?></td>
										<td><?php echo $address; ?></td>
										</td>

										<td class="text-center">
											<ul id="btn" class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>
													<ul  class="dropdown-menu dropdown-menu-right">
														<li class="edit"><a href="#"><i class="icon-file-pdf"></i> Edit</a></li>
														<li class="remove" id="remove"><a href="#"><i class="icon-file-pdf"></i> Remove</a></li>
														<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>
									<?php }  ?>
								</tbody>
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

<script type="text/javascript">

	
	$(".edit").click(function(){
	
	 var par = $(this).closest("td").parent(); //tr 
	 var title = par.children("td:nth-child(1)"); 
	 var logo = par.children("td:nth-child(2)"); 
	 var phone = par.children("td:nth-child(3)"); 
	 var email = par.children("td:nth-child(4)"); 
	 var address = par.children("td:nth-child(5)"); 
	 var save = par.children("td:nth-child(6)"); 

	 title.html("<input type='text'  class='form-control' name='p_name' id='p_name' value='"+title.html()+"'/>"); 
	  logo.append("<input type='file' name='file'  id='Call_ON_imgClick' class='form-control btn btn-warning' value='Click'/>");
	
	 phone.html("<input type='text' class='form-control' name='p_dob' id='p_dob' value='"+phone.html()+"'/>");
	 email.html("<input type='text' class='form-control' name='p_phone' id='p_phone' value='"+email.html()+"'/>");
	 address.html("<input type='text' class='form-control' name='p_address' id='p_address' value='"+address.html()+"'/>");

	 save.append("<input type='submit'  onclick='updateValue(this.id);' id='btn-save' class='form-control btn btn-warning' value='Update'/>");
	
	var save1 = save.children("ul:nth-child(1)"); 
	 save1.css("display","none");
	
	  });

	function updateValue(idd){
		//alert(idd);
	var getValue = $("#"+idd).closest("td").parent(); //tr 
	//alert(getValue.html());
	var sv_title = getValue.children("td:nth-child(1)"); 
	var sv_logo = getValue.children("td:nth-child(2)"); 
	var sv_phone = getValue.children("td:nth-child(3)"); 
	var sv_email = getValue.children("td:nth-child(4)"); 
	var sv_address = getValue.children("td:nth-child(5)"); 
	//getting the values of Input from td
	//alert(sv_id.html());
	var sv_title1 = sv_title.children("input:nth-child(1)");
	var sv_logo1 = sv_logo.children("input:nth-child(1)"); 
	var sv_phone1 = sv_phone.children("input:nth-child(1)"); 
	var sv_email1 = sv_email.children("input:nth-child(1)"); 
	var sv_address1 = sv_address.children("input:nth-child(1)"); 

	var sv_save = getValue.children("td:nth-child(6)");  // btn value getting
	
	var var1 = sv_title1.val();
	var var2 = sv_logo1.val();
	var var3 = sv_phone1.val();
	var var4 = sv_email1.val();
	var var5 = sv_address1.val();
	$.post( "updateheader.php?title1="+var1+"&logo1="+var2+"&phone1="+var3+"&email1="+var4+"&address1="+var5+"", function( data ) {
 // 	$( ".result" ).html( data );
});

	sv_title.html(var1);
	sv_logo.html(var2);
	sv_phone.html(var3);
	sv_email.html(var4);
	sv_address.html(var5);
	var sv_save = getValue.children("td:nth-child(6)"); 
	var save1 = sv_save.children("ul:nth-child(1)"); 
	save1.css("display","block");
	$("#btn-save").remove();
	//sv_save.html();
	//location.reload();
	};

</script>

<script type="text/javascript">
	
	$(".remove").click(function(){	
	var par1 = $(this).closest("td").parent(); 
	var id2 = par1.children("td:nth-child(1)"); 
	var varr = id2.html();
 	$.post( "delete_tests.php?delete="+varr+"", function( data ){
 		window.location.replace("Alltest.php");
}).done(function() { alert('Request done!'); })
        .fail(function(jqxhr, settings, ex) { alert('failed, ' + ex); 
 	
 });
 });
</script>
