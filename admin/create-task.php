<?php

session_start();
$admin_username = $_SESSION['admin_username'];


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
							<span class="card-title">Create New Task</span>
							<div class="row">
								<form class="col s12" method="POST" action="process/create-task-process.php">
									<div class="input-field col s12">
										<select class="js-states browser-default" name="select_employee_name" tabindex="-1" style="width: 100%" id="basic">
										<optgroup label="">
											<option value="">Select name</option>
											<?php
											$get_employee_name_query = "SELECT * FROM employee_details";
											$get_employee_name =  mysqli_query($con, $get_employee_name_query);

											while($row = mysqli_fetch_assoc($get_employee_name)){
												$get_employee_names = $row['employee_name'];
												$get_employee_id = $row['id'];
                                        //$get_employee_emails = $row['email'];

												?>

												<option value="<?php echo $get_employee_id;?>"><?php echo $get_employee_names;?></option>

												<?php } ?>
											</optgroup>
										</select>
										</div>

					
									<div class="input-field col s12">
										<input id="email" type="text" class="validate" name="task_title">
										<label for="email" >Task Title </label>
									</div>
									<div class="input-field col s12">
										<input id="task_description" type="text" class="validate" name="task_description">
										<label for="password">Task Description</label>
									</div>

									<div class="input-field col s6">
										<input id="email" type="text" class="validate" name="task_reporting_time">
										<label for="email" >Reporting Time </label>
									</div>
									<div class="input-field col s6">
											<select class="js-states browser-default" name="am_pm" tabindex="-1" style="width: 100%" id="basic">
													<optgroup >
														<option value="am">AM</option>
														<option value="pm">PM</option>
														
													</optgroup> 

												</select>
									</div>
									

									
							

										<div class="col s12 right-align m-t-sm">
											<button href="" class="waves-effect waves-light btn teal" name="create_task">Create</button>
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
