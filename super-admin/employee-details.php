<?php
include("config/connect.php");
session_start();
$super_admin_username = $_SESSION['super_admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['super_admin_username'])){
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

	<div class="mn-content valign-wrapper">
		<main class="mn-inner container">
			<div class="valign">
				<div class="row">
					<div class=" m6 l4 offset-6 offset-m3">
						<div class="card white darken-1">
							<div class="card-content ">
								<form class = "col s12" method="POST" action="employee-details.php">
									<select class="js-states browser-default" name="select_employee_name" tabindex="-1" style="width: 100%" id="basic">
										<optgroup label="">
											<option value="">Select name</option>
											<?php
											$get_employee_name_query = "SELECT * FROM employee_details";
											$get_employee_name =  mysqli_query($con, $get_employee_name_query);

											while($row = mysqli_fetch_assoc($get_employee_name)){
												$get_employee_names = $row['employee_name'];
                                        //$get_employee_emails = $row['email'];

												?>

												<option value="<?php echo $get_employee_names;?>"><?php echo $get_employee_names;?></option>

												<?php } ?>
											</optgroup>
										</select>


										<div class="col s12 right-align m-t-sm">
											<button href="" class="waves-effect waves-light btn teal" name="select_employee_name_button">select</button>
										</div>
									</form>


									<span class="card-title">Employee Details</span>
									<div class="row">

										<?php 
										if(isset($_POST['select_employee_name_button'])){

											$selected_employee_name = $_POST['select_employee_name'];

											$get_employee_details_query = "SELECT * from employee_details WHERE employee_name='$selected_employee_name' ";
											$get_employee_details = mysqli_query($con, $get_employee_details_query);

											$row = mysqli_fetch_assoc($get_employee_details);
											$employee_birth_date = $row['birth_date'];
											$employee_fathers_name = $row['fathers_name'];
											$employee_fathers_occupation= $row['fathers_occupation'];
											$employee_fathers_contact_number = $row['fathers_contact_number'];
											$employee_mothers_name = $row['mothers_name'];
											$employee_mothers_occupation= $row['mothers_occupation'];
											$employee_mothers_contact_number = $row['mothers_contact_number'];
											$employee_current_address = $row['current_address'];
											$employee_permanent_address = $row['permanent_address'];
											$employee_contact_number = $row['employee_contact_number'];
											$selected_employee_email = $row['official_email'];
											$employee_other_email = $row['other_email'];
											$employee_blood_group = $row['blood_group'];
											$employee_marital_status = $row['marital_status'];
											$employee_joining_year= $row['joining_year'];
											$employee_joining_month= $row['joining_month'];
											$selected_employee_section = $row['employee_section'];
											$selected_employee_position = $row['employee_position'];

											?>

											<form class="col s12" method="POST" action="process/employee-details-process.php">
												

												<div class="input-field col s12">
													<input id="hdate" type="text" name="birth_date" class="datepicker" value="<?php echo $employee_birth_date; ?>">
													<label for="email" class="">Date of Birth</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="fathers_name" class="validate" value="<?php echo $employee_fathers_name;?>">
													<label for="email" class="">Father's Name</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="fathers_occupation" class="validate"value="<?php echo $employee_fathers_occupation;?>">
													<label for="email" class="">Father's Occupation</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="fathers_contact_number" class="validate"value="<?php echo $employee_fathers_contact_number;?>">
													<label for="email" class="">Father's Contact Number</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="mothers_name" class="validate"value="<?php echo $employee_mothers_name;?>">
													<label for="email" class="">Mother's Name</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="mothers_occupation" class="validate"value="<?php echo $employee_mothers_occupation;?>">
													<label for="email" class="">Mother's Occupation</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="mothers_contact_number" class="validate"value="<?php echo $employee_mothers_contact_number;?>">
													<label for="email" class="">Mother's Contact Number</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="current_address" class="validate"value="<?php echo $employee_current_address;?>">
													<label for="email" class="">Current Address</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="permanent_address" class="validate"value="<?php echo $employee_permanent_address;?>">
													<label for="email" class="">Permanent Address</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="text" name="employee_contact_number" class="validate"value="<?php echo $employee_contact_number;?>">
													<label for="email" class="">Employee Contact Number</label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="email" name="official_email" class="validate" value="<?php echo $selected_employee_email; ?>">
													<label for="email" class=""></label>
												</div>

												<div class="input-field col s12">
													<input id="email" type="email" name="other_email" class="validate"value="<?php echo $employee_other_email;?>">
													<label for="email" class="">Other Email</label>
												</div>

												<select class="js-states browser-default" name="blood_group" tabindex="-1" style="width: 100%" id="basic">
													<optgroup label="Select Blood Group">
														<option value="A+">A Positive</option>
														<option value="A-">A Negative</option>
														<option value="B+">B Positive</option>
														<option value="B-">B Negative</option>
														<option value="O+">O Positive</option>
														<option value="O-">O Negative</option>
														<option value="AB+">AB Positive</option>
														<option value="AB-">AB Negative</option>
														<option value="H+">Bombay</option>
													</optgroup>
												</select>

												<select class="js-states browser-default" name="marital_status" tabindex="-1" style="width: 100%" id="basic">
													<optgroup label="Marital Status">
														<option value="Married">Married</option>
														<option value="Unmarried">Unmarried</option>
														<option value="Widowed">Widowed</option>
													</optgroup> 

												</select>

												<div class="input-field col s12">
													<input id="email" type="text" name="joining_year" class="validate"value="<?php echo $employee_joining_year;?>">
													<label for="email" class="">Joining Year</label>
												</div>

												<select class="js-states browser-default" name="joining_month" tabindex="-1" style="width: 100%" id="basic">
													<optgroup label="Select Month">
														<option value="January">January</option>
														<option value="February">February</option>
														<option value="March">March</option>
														<option value="April">April</option>
														<option value="May">May</option>
														<option value="June">June</option>
														<option value="July">July</option>
														<option value="August">August</option>
														<option value="Sepetember">September</option>
														<option value="October">October</option>
														<option value="November">November</option>
														<option value="December">December</option>
													</optgroup> 

												</select>



												<div class="input-field col s6">
													<select class="js-states browser-default" name="select_section_name" tabindex="-1" style="width: 100%" id="basic">
														<optgroup label="">
															<option value="<?php echo $selected_employee_section;?>"><?php echo $selected_employee_section;?></option>
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
																<option value="<?php echo $selected_employee_position;?>"><?php echo $selected_employee_position;?></option>
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
															<button href="" class="waves-effect waves-light btn teal" name="edit_employee_profile">Edit profile</button>
														</div>
													</form>
													<?php } ?>
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
/*
include('config/connect.php');

if(isset($_POST['create_employee'])){
    $employee_name = $_POST['employee_name'];
    $employee_email = $_POST['employee_email'];
    $employee_password = $_POST['employee_password'];
    $employee_password_md5 = md5($employee_password);

    $create_employee_query = "INSERT INTO create_employee (name, email, password) VALUES ('$employee_name', '$employee_email', '$employee_password_md5')";

    $create_employee = mysqli_query($con,$create_employee_query);

    echo "Employee created successfully";

    
}
else{
  echo "employee creation failed";
}

*/
?> 