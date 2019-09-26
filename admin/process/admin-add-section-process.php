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



if(isset($_POST['add_section'])){

  $section_name = $_POST['section_name'];
  

  $add_section_query = "INSERT INTO section (name)VALUES('$section_name')";
  $add_section = mysqli_query($con, $add_section_query);

echo "<script> alert(' section added successfully!!') </script>";

echo "<script> window.open('../admin-add-section.php','_self'); </script>";


}  
else{
      echo "<script> alert(' Failed, try again !!') </script>";
      echo "<script> window.open('admin-add-section.php','_self'); </script>";
    }                   
?>
