
<?php

session_start();
$admin_username = $_SESSION['admin_username'];


if(!isset($_SESSION['admin_username'])){
	header("location: index.php");

}
include('../config/connect.php');

?>

<?php 



if(isset($_POST['task_done'])){


	$date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$date = $date->format('j F, Y');
	//$time = $date->format('G:i a');
	//$day = date("l");


	$employee_id = $_POST['select_employee_name'];
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$task_create_date = $date;
	
	$task_create_time = date("g:i a", strtotime('+4 hours') );
	$task_reporting_time = $_POST['task_reporting_time'];
	$am_pm = $_POST['am_pm'];
	$reporting_time = $task_reporting_time . ' ' . $am_pm;


	

	$create_task_query = "INSERT INTO reporting (employee_id, admin_username, task_title, task_details, task_create_date, task_create_time, reporting_time,report_status,reported_time, task_status, task_direction, task_activity) VALUES ('$employee_id','$admin_username', '$task_title', '$task_description','$task_create_date', '$task_create_time', '$reporting_time','not reported', 'nothing found', 'not done', 'not yet directed', 'yes' )";

	$create_task = mysqli_query($con,$create_task_query);

	

	echo "<script> alert(' Task created successfully !!') </script>";
	header("location: ../create-task.php");


}
else{
  //echo "<script> alert('Failed !!') </script>";
}
?>