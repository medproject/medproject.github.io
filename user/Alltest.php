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
		
		<script type="text/javascript" src="../assets/js/core/app.js"></script>
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
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Test Data</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">
							Here You can Search All Test Ever made in your Hospital with a simple search.
						</div>

						<table class="table table-bordered table-hover datatable-highlight">
							<thead>
								<tr> 	
									<th style="display: none;">id</th>
									<th>Patient Name</th>
									<th>Patient Age</th>
									<th>Patient Sex</th>
									<th>Phone No</th>
									<th>Delivery Date</th>
									<th>
									Delivery Time</th>
									<th>Payment</th>
									<th>Description</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>

							<tbody>
								<?php 
								$query = "select * from tests";
								$run = mysqli_query($conn,$query);
								while ($row = mysqli_fetch_array($run)) {
									//extract($_row);
									$s_id = $row['id'];
									$p_name = $row['name'];
									$p_age = $row['age'];
									$p_sex = $row['gender'];
									$phone = $row['mobile'];
									$date = $row['date'];
									$time = $row['time'];
									$Payment = $row['Payment'];
									$Description = $row['Description'];

									?>
									<tr>
										
										<td style="display: none;"><?php echo $s_id; ?></td>
										<td><?php echo $p_name; ?></td>
										<td><?php echo $p_age; ?></td>
										<td><?php echo $p_sex; ?></td>
										<td><?php echo $phone; ?></td>
										<td><?php echo $date; ?></td>
										<td><?php echo $time; ?></td>
										<td><?php echo $Payment; ?></td>
										<td><?php echo $Description; ?>
										</td>

										<td class="text-center">
											<ul id="btn" class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>
													<ul  class="dropdown-menu dropdown-menu-right">
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
	 var id = par.children("td:nth-child(1)"); 
	 var name = par.children("td:nth-child(2)"); 
	 var age = par.children("td:nth-child(3)"); 
	 var dob = par.children("td:nth-child(4)"); 
	 var phone = par.children("td:nth-child(5)"); 
	 var address = par.children("td:nth-child(6)"); 
	 var desig = par.children("td:nth-child(7)"); 
	 var joing = par.children("td:nth-child(8)"); 
	 var Description = par.children("td:nth-child(9)"); 
	 var save = par.children("td:nth-child(10)"); 

	 id.html("<input type='text' readonly  class='form-control' name='p_id' id='p_id' value='"+id.html()+"'/>"); 
	 name.html("<input type='text'  class='form-control' name='p_name' id='p_name' value='"+name.html()+"'/>"); 
	 age.html("<input type='text' class='form-control' name='p_email' id='p_email' value='"+age.html()+"'/>"); 
	 dob.html("<input type='text' class='form-control' name='p_dob' id='p_dob' value='"+dob.html()+"'/>");
	 phone.html("<input type='text' class='form-control' name='p_phone' id='p_phone' value='"+phone.html()+"'/>");
	 address.html("<input type='text' class='form-control' name='p_address' id='p_address' value='"+address.html()+"'/>");
	 desig.html("<input type='text' class='form-control' name='p_desig' id='p_desig' value='"+desig.html()+"'/>");
	 joing.html("<input type='text' class='form-control' name='p_joing' id='p_joing' value='"+joing.html()+"'/>");
	 Description.html("<input type='text' class='form-control' name='p_Desc' id='p_Desc' value='"+Description.html()+"'/>");

	 save.append("<input type='submit'  onclick='updateValue(this.id);' id='btn-save' class='form-control btn btn-warning' value='Update'/>");
	
	var save1 = save.children("ul:nth-child(1)"); 
	 save1.css("display","none");
	
	  });

	function updateValue(idd){
		//alert(idd);
	var getValue = $("#"+idd).closest("td").parent(); //tr 
	//alert(getValue.html());
	var sv_id = getValue.children("td:nth-child(1)"); 
	var sv_name = getValue.children("td:nth-child(2)"); 
	var sv_age = getValue.children("td:nth-child(3)"); 
	var sv_dob = getValue.children("td:nth-child(4)"); 
	var sv_phone = getValue.children("td:nth-child(5)"); 
	var sv_address = getValue.children("td:nth-child(6)"); 
	var sv_desig = getValue.children("td:nth-child(7)"); 
	var sv_joing = getValue.children("td:nth-child(8)"); 
	var sv_Description = getValue.children("td:nth-child(9)"); 
	//getting the values of Input from td
	//alert(sv_id.html());
	var sv_id1 = sv_id.children("input:nth-child(1)"); 
	var sv_name1 = sv_name.children("input:nth-child(1)");
	var sv_age1 = sv_age.children("input:nth-child(1)"); 
	var sv_dob1 = sv_dob.children("input:nth-child(1)"); 
	var sv_phone1 = sv_phone.children("input:nth-child(1)"); 
	var sv_address1 = sv_address.children("input:nth-child(1)"); 
	var sv_desig1 = sv_desig.children("input:nth-child(1)"); 
	var sv_joing1 = sv_joing.children("input:nth-child(1)"); 
	var sv_Description1 = sv_Description.children("input:nth-child(1)"); 

	var sv_save = getValue.children("td:nth-child(10)");  // btn value getting
	
	var var9 = sv_id1.val();
	var var1 = sv_name1.val();
	var var2 = sv_age1.val();
	var var3 = sv_dob1.val();
	var var4 = sv_phone1.val();
	var var5 = sv_address1.val();
	var var6 = sv_desig1.val();
	var var7 = sv_joing1.val();
	var var8 = sv_Description1.val();
	$.post( "TestUpdate.php?name1="+var1+"&age1="+var2+"&sex1="+var3+"&phone1="+var4+"&D_date1="+var5+"&D_time1="+var6+"&Payment="+var7+"&description1="+var8+"&t_id="+var9+"", function( data ) {
 // 	$( ".result" ).html( data );
});

	sv_name.html(var1);
	sv_id.html(var9);
	sv_age.html(var2);
	sv_dob.html(var3);
	sv_phone.html(var4);
	sv_address.html(var5);
	sv_desig.html(var6);
	sv_joing.html(var7);
	sv_Description.html(var8);
	var sv_save = getValue.children("td:nth-child(10)"); 
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
