
<?php

include('../config/connect.php');



if(isset($_POST['super_admin_username']) && ($_POST['super_admin_password'])){

  $super_admin_username = $_POST['super_admin_username'];
  $super_admin_password = $_POST['super_admin_password'];

  $admin_login_query = "SELECT * FROM super_admin_login WHERE username = '$super_admin_username' && password = '$super_admin_password' LIMIT 1";
  $admin_login = mysqli_query($con, $admin_login_query);

  $count_admin = mysqli_num_rows($admin_login);

  if($count_admin == 1){

    header("location: ../admin-meal-report.php");
    //echo "successfully logged in";
    session_start();
    
    $_SESSION['super_admin_username'] = $super_admin_username;
    //$_SESSION['employee_name'] = $employee_name;
     
    exit();

  }else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../index.php','_self'); </script>";
    }

}                     
?>
