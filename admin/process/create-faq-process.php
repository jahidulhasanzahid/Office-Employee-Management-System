<?php 

include('../config/connect.php');

if(isset($_POST['create_faq'])){
	$faq_q = $_POST['faq_q'];
	$faq_a = $_POST['faq_a'];
	
	

	$create_rule_query = "INSERT INTO faq (faq_q, faq_a) VALUES ('$faq_q', '$faq_a')";

	$create_rule = mysqli_query($con,$create_rule_query);

	
	header('Location: ../all-faq.php');


}
else{
  echo "<script> alert('Failed !!') </script>";
}
?>