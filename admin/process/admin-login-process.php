
<?php

include('../config/connect.php');



if(isset($_POST['admin_username']) && ($_POST['admin_password'])){

  $admin_username = $_POST['admin_username'];
  $admin_password = $_POST['admin_password'];
  //$admin_password_md5 = md5($admin_password);

  $admin_login_query = "SELECT * FROM admin_login WHERE username = '$admin_username' && password = '$admin_password' LIMIT 1";
  $admin_login = mysqli_query($con, $admin_login_query);

  $count_admin = mysqli_num_rows($admin_login);

  if($count_admin == 1){

    header("location: ../admin-meal-report.php");
    //echo "successfully logged in";
    session_start();
    
    $_SESSION['admin_username'] = $admin_username;
    //$_SESSION['employee_name'] = $employee_name;
     
    exit();

  }else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../index.php','_self'); </script>";
    }

}                     
?>
