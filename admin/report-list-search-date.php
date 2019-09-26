<?php
include("config/connect.php");
session_start();
$admin_username = $_SESSION['admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['admin_username'])){
    header("location: index.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Logic Temple | Admin Portal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
    <link href="assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/>  
    <link href=href="assets/plugins/materialize/css/select2.css" rel="stylesheet"> 


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        
    </head>
    <!--main bavbar include-->
        <?php
            include ("include/main-navbar.php");
        ?>
    <!--main navbar include end-->
    <!--left navbar start here-->

        <?php
            include ("include/left-navbar.php");
        ?>
    <!--left navbar end here-->
        <body class="">
            <div class="loader-bg"></div>
            <div class="loader">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
    <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div><div class="gap-patch">
        <div class="circle"></div>
    </div><div class="circle-clipper right">
    <div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-green">
    <div class="circle-clipper left">
        <div class="circle"></div>
    </div><div class="gap-patch">
    <div class="circle"></div>
</div><div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
<div class="mn-content valign-wrapper">
    <main class="mn-inner container">
        <div class="valign">

           <div class="row">

           <div class="col s6">
                      <div class="card white darken-1">
                          <div class="card-content ">
                              <span class="card-title" align="center">Search by date<hr/></span>
                              <div class="row">
                              <div class="col s12">
                               <form method="GET" action="report-list-search-date.php">
                                   <div class="input-field col s12">
                                        <input id="hdate" type="text" name="search_date" class="datepicker">
                                       <label for="employee_name" >Date</label>
                                   </div>
                            
                                   <div class="col s6 right-align m-t-sm">
                                      
                                       <center style="padding-left: 140px;"><button href="" class="waves-effect waves-light btn teal" name="search_date_button">search</button></center>
                                   </div>
                               </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

                <div class="col s6">
                      <div class="card white darken-1">
                          <div class="card-content ">
                              <span class="card-title" align="center">Search by employee name<hr/></span>
                              <div class="row">
                              <div class="col s12">
                               <form method="GET" action="report-list-search-date.php">
                                   <div class="input-field col s12">
                                        <input id="hdate" type="text" name="employee_name" >
                                       <label for="employee_name" >Name</label>
                                   </div>
                            
                                   <div class="col s6 right-align m-t-sm">
                                      
                                       <center style="padding-left: 140px;"><button href="" class="waves-effect waves-light btn teal" name="search_name_button">search</button></center>
                                   </div>
                               </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            <div class="col s12">
                <div class="page-title" ><p>Report List</p></div>
            </div>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                     


                        <table class="responsive-table">
                            <thead>
                                <tr>

                                    <th>serial</th>
                                    <th>Date</th>
                                    <th>Employee Name</th>
                                    <th>Task Title</th>
                                    <th>Report Status</th>
                                    <th>Task Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                if(isset($_GET['search_date_button'])){

                                   

                                $date_search = $_GET['search_date'];
                              // $em_name = $_GET['employee_name'];
                               

                                $get_task_report_query = "SELECT reporting.id,reporting.employee_id,reporting.task_create_date,reporting.employee_id,reporting.task_title,reporting.report_status,reporting.task_status,employee_details.id, employee_details.employee_name FROM reporting INNER JOIN employee_details ON reporting.employee_id = employee_details.id WHERE reporting.task_create_date='$date_search'";

                                $get_task_report = mysqli_query($con,$get_task_report_query);

                               
                               

                               $id = 1;

                               
                                while($row = mysqli_fetch_assoc($get_task_report)){

                                    $id ;
                                    $task_id = $row['id'];
                                    $task_date = $row['task_create_date'];
                                    $employee_name = $row['employee_name'];
                                    $task_title = $row['task_title'];
                                    $report_status= $row['report_status'];
                                    $task_status= $row['task_status'];


                                  
                              ?>
                                  
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $task_date; ?></td>
                                        <td><?php echo $employee_name; ?></td>
                                        <td><a href="task-details.php?task-id=<?php  echo $task_id;?>&emp=<?php echo $employee_name; ?>&rs=<?php echo $report_status; ?>&ts=<?php echo $task_status; ?>"><?php echo $task_title; ?></a></td>
                                        <td><?php echo $report_status; ?></td>
                                        <td><?php echo $task_status; ?></td>
                                    </tr>
                                    <?php $id += 1; ?>
                                    <?php }} ?>
                          
                                <!-- search process for name  -->
                                <?PHP
                                if(isset($_GET['search_name_button'])){

                                   

                             //   $date_search = $_GET['search_date'];
                                 $em_name = $_GET['employee_name'];
                               

                                $get_task_report_query = "SELECT reporting.id,reporting.employee_id,reporting.task_create_date,reporting.employee_id,reporting.task_title,reporting.report_status,reporting.task_status,employee_details.id, employee_details.employee_name FROM reporting INNER JOIN employee_details ON reporting.employee_id = employee_details.id WHERE employee_details.employee_name='$em_name'";

                                $get_task_report = mysqli_query($con,$get_task_report_query);

                               
                               

                               $id = 1;

                               
                                while($row = mysqli_fetch_assoc($get_task_report)){

                                    $id ;
                                    $task_id = $row['id'];
                                    $task_date = $row['task_create_date'];
                                    $employee_name = $row['employee_name'];
                                    $task_title = $row['task_title'];
                                    $report_status= $row['report_status'];
                                    $task_status= $row['task_status'];


                                  
                              ?>
                              <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $task_date; ?></td>
                                        <td><?php echo $employee_name; ?></td>
                                        <td><a href="task-details.php?task-id=<?php  echo $task_id;?>&emp=<?php echo $employee_name; ?>&rs=<?php echo $report_status; ?>&ts=<?php echo $task_status; ?>"><?php echo $task_title; ?></a></td>
                                        <td><?php echo $report_status; ?></td>
                                        <td><?php echo $task_status; ?></td>
                                    </tr>
                                    <?php $id += 1; ?>
                                    <?php }} ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--report ends here-->
            <div class="row">
              <div class="col s12 ">
               
               <!--monthly report end-->
           </div>
       </div>
   </div>
</main>
</div>

<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/plugins/materialize/js/form-select2.js"></script>
<script src="assets/plugins/materialize/js/form_elements.js"></script>

</body>

</html>


<!--this is php syntex-->
