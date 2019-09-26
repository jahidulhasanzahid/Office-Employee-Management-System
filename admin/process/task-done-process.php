<?php

session_start();
$admin_username = $_SESSION['admin_username'];


if(!isset($_SESSION['admin_username'])){
	header("location: index.php");

}
include('../config/connect.php');

if(isset($_POST['task_done'])){

	$taskid = $_GET['task-id'];

	$query = "UPDATE reporting set task_status='done' WHERE re_id = '$taskid'";
	$update_query = mysqli_query($con, $query);
	//header("location: ../task-details.php?task-id='.$taskid.'");

	$link="../task-details.php?task-id=$taskid";
							
	header('Location:' . $link . '');
}

?>

