<?php

session_start();
$admin_username = $_SESSION['admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['admin_username'])){
    header("location: ../index.php");

}

?>
<?php

include('../config/connect.php');



if(isset($_POST['add_position'])){

  $position_name = $_POST['position_name'];
  

  $add_position_query = "INSERT INTO position (name)VALUES('$position_name')";
  $add_position = mysqli_query($con, $add_position_query);

echo "<script> alert(' position added successfully!!') </script>";

echo "<script> window.open('../admin-add-position.php','_self'); </script>";


}  
else{
      echo "<script> alert(' Failed, try again !!') </script>";
      echo "<script> window.open('admin-add-position.php','_self'); </script>";
    }                   
?>
