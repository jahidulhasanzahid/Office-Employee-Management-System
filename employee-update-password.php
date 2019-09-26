<?php

session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}
include('admin/config/connect.php');
include("l.php");
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
	<link type="text/css" rel="stylesheet" href="admin/assets/plugins/materialize/css/materialize.min.css"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="admin/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
	<link href="admin/assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/>  
	<link href=href="admin/assets/plugins/materialize/css/select2.css" rel="stylesheet"> 


	<!-- Theme Styles -->
	<link href="admin/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>


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
							<span class="card-title">Update password</span>
							<div class="row">
								<form class="col s12" method="POST" action="process/employee-update-password-process.php">
									
								
									<div class="input-field col s12">
										<input id="password" type="password" class="validate" name="employee_update_password">
										<label for="password">update Password</label>
									</div>
								


										<div class="col s12 right-align m-t-sm">
											<button href="" class="waves-effect waves-light btn teal" name="update_password_button">update</button>
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
	<script src="admin/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
	<script src="admin/assets/plugins/materialize/js/materialize.min.js"></script>
	<script src="admin/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
	<script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
	<script src="admin/assets/js/alpha.min.js"></script>

	<!--  <script src="assets/plugins/materialize/js/select2.min.js"></script> -->
	<script src="admin/assets/plugins/materialize/js/form-select2.js"></script>
	<script src="admin/assets/plugins/materialize/js/form_elements.js"></script>



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

	echo "<script> alert(' Employee created successfully !!') </script>";


}
else{
  //echo "<script> alert('Failed !!') </script>";
}
?>