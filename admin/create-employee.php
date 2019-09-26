<?php

session_start();
$admin_username = $_SESSION['admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['admin_username'])){
	header("location: index.php");

}
include('config/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Title -->
	<title>Logic Temple | Admin Portal</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta charset="UTF-8">
	<meta name="description" content="Responsive Admin Dashboard Template" />
	<meta name="keywords" content="admin,dashboard" />
	<meta name="author" content="Steelcoders" />

	<!-- Styles -->
	<link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
	<link href="assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/>  
	<link href=href="assets/plugins/materialize/css/select2.css" rel="stylesheet"> 


	<!-- Theme Styles -->
	<link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


</head>
<!--main bavbar include-->
<?php
include ("include/main-navbar.php");
?>
<!--main navbar include end-->
<!--left navbar start here-->

<?php
include ("include/left-navbar.php");
?>
<!--left navbar end here-->
<body class="">
	<div class="loader-bg"></div>
	<div class="loader">
		<div class="preloader-wrapper big active">
			<div class="spinner-layer spinner-blue">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div><div class="gap-patch">
				<div class="circle"></div>
			</div><div class="circle-clipper right">
			<div class="circle"></div>
		</div>
	</div>
	<div class="spinner-layer spinner-red">
		<div class="circle-clipper left">
			<div class="circle"></div>
		</div><div class="gap-patch">
		<div class="circle"></div>
	</div><div class="circle-clipper right">
	<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-yellow">
	<div class="circle-clipper left">
		<div class="circle"></div>
	</div><div class="gap-patch">
	<div class="circle"></div>
</div><div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-green">
	<div class="circle-clipper left">
		<div class="circle"></div>
	</div><div class="gap-patch">
	<div class="circle"></div>
</div><div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
<div class="mn-content valign-wrapper">
	<main class="mn-inner container">
		<div class="valign">
			<div class="row">
				<div class="s12 m6 l4 offset-8 offset-m3">
					<div class="card white darken-1">
						<div class="card-content ">
							<span class="card-title">Create New Employee</span>
							<div class="row">
								<form class="col s12" method="POST" action="create-employee.php">
									<div class="input-field col s12">
										<input id="name" type="text" class="validate" name="employee_name">
										<label for="employee_name" >Full Name </label>
									</div>
									<div class="input-field col s12">
										<input id="email" type="email" class="validate" name="employee_email">
										<label for="email" >Email </label>
									</div>
									<div class="input-field col s12">
										<input id="password" type="password" class="validate" name="employee_password">
										<label for="password">Password</label>
									</div>
									<div class="input-field col s6">
										<select class="js-states browser-default" name="select_section_name" tabindex="-1" style="width: 100%" id="basic">
											<optgroup label="">
												<option value="">Section name</option>
												<?php
												$get_section_name_query = "SELECT * FROM section";
												$get_section_name =  mysqli_query($con, $get_section_name_query);

												while($row = mysqli_fetch_assoc($get_section_name)){
													$get_section_names = $row['name'];
                                        //$get_employee_emails = $row['email'];

													?>

													<option value="<?php echo $get_section_names;?>"><?php echo $get_section_names;?></option>

													<?php } ?>
												</optgroup>
											</select>
										</div>


										<div class="input-field col s6">
										<select class="js-states browser-default" name="select_position_name" tabindex="-1" style="width: 100%" id="basic">
											<optgroup label="">
												<option value="">Position name</option>
												<?php
												$get_position_name_query = "SELECT * FROM position";
												$get_position_name =  mysqli_query($con, $get_position_name_query);

												while($row = mysqli_fetch_assoc($get_position_name)){
													$get_position_names = $row['name'];
                                        //$get_employee_emails = $row['email'];

													?>

													<option value="<?php echo $get_position_names;?>"><?php echo $get_position_names;?></option>

													<?php } ?>
												</optgroup>
											</select>
										</div>

										<div class="col s12 right-align m-t-sm">
											<button href="" class="waves-effect waves-light btn teal" name="create_employee">Create</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>




	<!-- Javascripts -->
	<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
	<script src="assets/plugins/materialize/js/materialize.min.js"></script>
	<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
	<script src="assets/js/alpha.min.js"></script>

	<!--  <script src="assets/plugins/materialize/js/select2.min.js"></script> -->
	<script src="assets/plugins/materialize/js/form-select2.js"></script>
	<script src="assets/plugins/materialize/js/form_elements.js"></script>



</body>

</html>


<!--this is php syntex-->


<?php 



if(isset($_POST['create_employee'])){
	$employee_name = $_POST['employee_name'];
	$employee_email = $_POST['employee_email'];
	$employee_password = $_POST['employee_password'];
	$employee_password_md5 = md5($employee_password);
	$employee_section_name = $_POST['select_section_name'];
	$employee_position_name = $_POST['select_position_name'];

	$create_employee_query = "INSERT INTO create_employee (name, email, password, section, position) VALUES ('$employee_name', '$employee_email', '$employee_password_md5', '$employee_section_name','$employee_position_name')";

	$create_employee = mysqli_query($con,$create_employee_query);

	$add_employee_detials = "INSERT INTO employee_details (employee_name, official_email, employee_section, employee_position) VALUES ('$employee_name', '$employee_email', '$employee_section_name', '$employee_position_name')";

	$add_employee_profile = mysqli_query($con,$add_employee_detials);

	echo "<script> alert(' Employee created successfully !!') </script>";


}
else{
  //echo "<script> alert('Failed !!') </script>";
}
?>