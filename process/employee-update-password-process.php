<?php
session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
	header("location: ../index.php");

}
include('../admin/config/connect.php');
include("../l.php");

if(isset($_POST['employee_update_password'])){


	$employee_update_password = $_POST['employee_update_password'];
	$employee_update_password_md5 = md5($employee_update_password);

	$employee_update_password_query = "UPDATE create_employee SET password= '$employee_update_password_md5' WHERE email = '$employee_email'";
	$employee_update_password = mysqli_query($con,$employee_update_password_query);

	//header("location: ../employee-update-password.php");

	echo "<script> alert(' password updated successfully !!') </script>";
	echo "<script> window.open('../employee-update-password.php','_self'); </script>";


	

}	else{
	echo "<script> alert(' password update failed, try again !!') </script>";
	echo "<script> window.open('../employee-update-password.php','_self'); </script>";
}
?>         