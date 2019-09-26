
<?php 



session_start();
$super_admin_username = $_SESSION['super_admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['super_admin_username'])){
    header("location: index.php");

}



include('../config/connect.php');



if(isset($_POST['edit_employee_profile'])){
    //$employee_name = $_POST['employee_name'];
    $employee_birth_date = $_POST['birth_date'];
    $employee_fathers_name = $_POST['fathers_name'];
    $employee_fathers_occupation = $_POST['fathers_occupation'];
    $employee_fathers_contact_number = $_POST['fathers_contact_number'];
    $employee_mothers_name = $_POST['mothers_name'];
    $employee_mothers_occupation = $_POST['mothers_occupation'];
    $employee_mothers_contact_number = $_POST['mothers_contact_number'];
    $employee_current_address = $_POST['current_address'];
    $employee_permanent_address = $_POST['permanent_address'];
    $employee_contact_number = $_POST['employee_contact_number'];
    $employee_official_email = $_POST['official_email'];
    $employee_other_email = $_POST['other_email'];
    $employee_blood_group = $_POST['blood_group'];
    $employee_marital_status = $_POST['marital_status'];
    $employee_joining_year = $_POST['joining_year'];
    $employee_joining_month = $_POST['joining_month'];
    $employee_section = $_POST['select_section_name'];
    $employee_position = $_POST['select_position_name'];




    $update_employee_details_query = "UPDATE employee_details SET 
                                                    
                                                    birth_date = '$employee_birth_date',
                                                    fathers_name= '$employee_fathers_name',
                                                    fathers_occupation= '$employee_fathers_occupation',
                                                    fathers_contact_number= '$employee_fathers_contact_number',
                                                    mothers_name= '$employee_mothers_name',
                                                    mothers_occupation= '$employee_mothers_occupation',
                                                    mothers_contact_number= '$employee_mothers_contact_number',
                                                    current_address= '$employee_current_address',
                                                    permanent_address='$employee_permanent_address',
                                                    employee_contact_number= '$employee_contact_number',
                                                    official_email= '$employee_official_email',
                                                    other_email= '$employee_other_email',
                                                    blood_group= '$employee_blood_group',
                                                    marital_status= '$employee_marital_status',
                                                    joining_year= '$employee_joining_year',
                                                    joining_month= '$employee_joining_month',
                                                    employee_section= '$employee_section',
                                                    employee_position= '$employee_position'

                                            WHERE official_email = '$employee_official_email'


    ";
     $update_employee_details = mysqli_query($con, $update_employee_details_query);



    echo "<script> alert('Information added successfully!!'); </script>";

   	header("location: ../employee-details.php");

    
}
else{
  echo "<script> alert('Information add failed !') </script>";
}
?>