<?php ?>

<?php

session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

include('admin/config/connect.php');
include("l.php");
$get_employee_id_query = "SELECT id FROM employee_details WHERE official_email = '$employee_email'";

$get_employee_id = mysqli_query($con, $get_employee_id_query );

$row = mysqli_fetch_assoc($get_employee_id);

$employee_id = $row['id'];


if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}




?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Title -->
	<title>Logic Temple | Employee Portal</title>

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
							<span class="card-title">Task details</span>
							
								
								<?php 

								

								if(isset($_GET['task-id']) && ($_GET['emp'] == $employee_id)){
									$task_id = $_GET['task-id'];

									$get_task_report_query = " SELECT 
									reporting.employee_id,
									reporting.admin_username,
									reporting.task_title,
									reporting.task_details,
									reporting.task_create_date,
									reporting.task_create_time,
									reporting.file,
									reporting.reporting_time,
									reporting.report_status,
									reporting.reported_time,
									reporting.task_status,
									reporting.task_direction,


									employee_details.id,
									employee_details.employee_name 
									FROM 
									reporting 
									INNER JOIN 
									employee_details 
									ON 
									reporting.employee_id = employee_details.id 
									WHERE 
									reporting.re_id = '$task_id'";

									$get_task_report = mysqli_query($con,$get_task_report_query);



									$row = mysqli_fetch_assoc($get_task_report);

									
									$employee_id = $row['employee_id'];
									$admin_username = $row['admin_username'];
									$task_title = $row['task_title'];
									$task_details = $row['task_details'];
									$task_date = $row['task_create_date'];
									$task_issue_time= $row['task_create_time'];
									$file = $row['file'];
									$task_reporting_time = $row['reporting_time'];
									$report_status= $row['report_status'];
									$reported_time= $row['reported_time'];
									$task_status= $row['task_status'];
									$task_direction= $row['task_direction'];
									$employee_name = $row['employee_name'];
									
									
									
									
									
									

									
									echo "<p style='font-size: 18px; color: #00acc1;'>Task Title:<br> <p style='font-size: 16px;'> $task_title </p></p>";
									echo "<p style='font-size: 18px; color: #00acc1;'>Task Date:<br> <p style='font-size: 16px;'> $task_date </p></p>";
									echo "<p style='font-size: 18px; color: #00acc1;'>Task Issue Time:<br> <p style='font-size: 16px;'> $task_issue_time</p></p>";
									echo "<p style='font-size: 18px; color: #00acc1;'>Task Reporting Time:<br> <p style='font-size: 16px;'>$task_reporting_time </p></p>";
									echo "<p style='font-size: 18px; color: #00acc1;'>Task Details: <br> <p style='font-size: 16px;'>$task_details </p></p>"
									."<hr>";

									echo "<p style='font-size: 18px; color: #00acc1;'>Report Time: <br> <p style='font-size: 16px;'>$reported_time </p>
									</p>";

									echo "<p style='font-size: 18px; color: #00acc1;'>Report Status: <br> <p style='font-size: 16px;'>$report_status </p>
									</p>";



									?>


									<?php


									echo "<p style='font-size: 18px; color: #00acc1;'>Task Status: <br> <p style='font-size: 16px;'>$task_status </p></p>";

										echo "<p style='font-size: 18px; color: #00acc1;'>Task Direction: <br> <p style='font-size: 16px;'>$task_direction </p>
									</p>";

									
?>

								



								<div style="margin-top: 20px;">
									

								</div>

								<div class="row">
								<?php

								if($task_status=="done"){
									echo "<div style='color:green; font-size: 20px;'><center><p>Congratulation !! Your task is successfully done!</p></center></div>";

								}else{
									
									echo '<form class="col s12" method="POST" action="report.php?task-id='.$task_id.'&emp='.$employee_id.'">
									<div class="col s6 right-align ">
										<button href="" class="waves-effect waves-light btn teal" name="task_done">Report</button>
									</div>';

									?>


								</form>
								<?php } ?>
								</div>
								<?php }else{
									echo " Hoi miya, ekhane ki ??!!!??";
								}

								?>

							
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

?>