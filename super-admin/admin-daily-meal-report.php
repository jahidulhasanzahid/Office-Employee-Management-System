
<?php
include("config/connect.php");
session_start();
$admin_username = $_SESSION['admin_username'];
$_SESSION['report_date'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];
if(!isset($_SESSION['report_date'])){
		header("location: admin-meal-report.php");
	}

if(!isset($_SESSION['admin_username'])){
	header("location: index.php");

}

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
				


				<div class="col s12">
                      <div class="card white darken-1">
                          <div class="card-content ">
                              <span class="card-title" align="center">Daily Meal Report<hr/></span>
                              <div class="row">
                              <div class="col s12">
                               <form method="POST" action="admin-daily-meal-report.php">
                                   <div class="input-field col s12">
                                        <input id="hdate" type="text" name="report_date" class="datepicker">
                                       <label for="employee_name" >Date</label>
                                   </div>
                            
                                   <div class="col s6 right-align m-t-sm">
                                      
                                       <button href="" class="waves-effect waves-light btn teal" name="set_meal">search</button>
                                   </div>
                               </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


				<div class="col s12">
					<div class="page-title" ><p>Latest Employee meal report  </p></div>
				</div>

				<div class="col s12 m12 l12">
					<div class="card">
						<div class="card-content">
							


							<table class="responsive-table">
								<thead>
									<tr>

										<th>Employee Name</th>
										<th>Booking Date</th>
										<th>Booking Day</th>
										<th>Meal Date</th>
										<th>Meal Day</th>
										<th>Meal Status</th>
									</tr>
								</thead>
								<tbody>
									<?php 

									$report_date = $_POST['report_date'];
									$_SESSION['report_date'] = $report_date;
									$get_daily_report_query = "SELECT * FROM meal_booking WHERE for_meal_date = '$report_date' ";



									$get_daily_report = mysqli_query($con, $get_daily_report_query);
									while($row = mysqli_fetch_assoc($get_daily_report)){

										$employee_name = $row['name'];
										$booking_date = $row['date'];
										$booking_day = $row['day'];
										$meal_date = $row['for_meal_date'];
										$meal_day = $row['for_meal'];
										$booking_status = $row['status'];


										?>
										<tr>
											<td><?php echo $employee_name; ?></td>
											<td><?php echo $booking_date; ?></td>
											<td><?php echo $booking_day; ?></td>
											<td><?php echo $meal_date; ?></td>
											<td><?php echo $meal_day; ?></td>
											<td><?php echo $booking_status; ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!--report ends here-->

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
<script src="assets/plugins/materialize/js/form-select2.js"></script>
<script src="assets/plugins/materialize/js/form_elements.js"></script>

</body>

</html>
