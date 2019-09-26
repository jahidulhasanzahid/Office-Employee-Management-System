<?php
  include('../admin/config/connect.php');
include("../l.php");
if(isset($_POST['employee_email']) && ($_POST['employee_password'])){

  $employee_email = $_POST['employee_email'];
  $employee_password = $_POST['employee_password'];
  //$employee_password_md5 = md5($employee_password);

  $employee_login_query = "SELECT * FROM create_employee WHERE email = '$employee_email' && password = '$employee_password' LIMIT 1";
  $employee_login = mysqli_query($con,$employee_login_query);

  $count_employee = mysqli_num_rows($employee_login);


  if($count_employee == 1){

    $row= mysqli_fetch_assoc($employee_login);
    $employee_name = $row['name'];
   
    header("location: ../meal-booking.php");
    //echo "successfully logged in";
    session_start();
    
    $_SESSION['employee_email'] = $employee_email;
    $_SESSION['employee_name'] = $employee_name;
     
    exit();


  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../index.php','_self'); </script>";
    }

}
?>         