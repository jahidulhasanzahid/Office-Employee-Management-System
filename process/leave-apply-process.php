<?php 

session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];


include('../admin/config/connect.php');

include("../l.php");
$get_employee_id_query = "SELECT id FROM employee_details WHERE official_email = '$employee_email'";

$get_employee_id = mysqli_query($con, $get_employee_id_query );

$row = mysqli_fetch_assoc($get_employee_id);

$employee_id = $row['id'];


if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}




if(isset($_POST['leave_apply'])){

	$apply_date = $_POST['apply_date'];
	$date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$date = $date->format('j F, Y');
	$leave_cause = $_POST['leave_cause'];
	$leave_details = $_POST['leave_details'];
	$status = "pending";

	$leave_apply_query = "INSERT INTO leave_em (employee_id, date, apply_date, cause, details, leave_status) VALUES ('$employee_id', '$date', '$apply_date', '$leave_cause', '$leave_details', '$status')";
	$leave_apply = mysqli_query($con, $leave_apply_query);

	header("location: ../meal-booking.php");

}

?>