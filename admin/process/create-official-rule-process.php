<?php 

include('../config/connect.php');

if(isset($_POST['create_rule'])){
	$en_title = $_POST['en_title'];
	$en_details = $_POST['en_details'];
	$bn_title = $_POST['bn_title'];
	$bn_details = $_POST['bn_details'];
	

	$create_rule_query = "INSERT INTO official_rules (en_title, en_details, bn_title, bn_details) VALUES ('$en_title', '$en_details', '$bn_title', '$bn_details')";

	$create_rule = mysqli_query($con,$create_rule_query);

	
	header('Location: ../all-rules.php');


}
else{
  echo "<script> alert('Failed !!') </script>";
}
?>