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
							<span class="card-title">Task Redirection</span>
							

							


						


							




						<div style="margin-top: 20px;">


						</div>

						<div class="row">
						<form class="col s12" method="POST" action="process/task-re-direction-process.php?task-re=<?php echo $_GET['task-re']; ?>">
								<div class="input-field col s12">
									<textarea id="textarea1" name="task_direction" class="materialize-textarea"></textarea> 
									<label for="email" >Write Redirection </label>
								</div>


								<div class="col s6 right-align ">
									<button href="" class="waves-effect waves-light btn teal" name="send_direction">send direction</button>
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


