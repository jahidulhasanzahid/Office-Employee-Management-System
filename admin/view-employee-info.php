<?php
    include('config/connect.php');
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

            
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
  
        
    </head>
    <body>
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
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Employee Information</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                
                                <table class="responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Serial</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="price">Email</th>
                                            <th data-field="name">Position</th>
                                            <th data-field="price">Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                       
                                        $get_employee_info_report_query = "SELECT * FROM employee_details";
                                        $get_employee_info_report = mysqli_query($con, $get_employee_info_report_query);
                                        $id = 1;
                                        while($row = mysqli_fetch_assoc($get_employee_info_report)){
                                            
                                            $name = $row['employee_name'];
                                            $official_email = $row['official_email'];
                                            $position = $row['employee_position'];
                                            $contact = $row['employee_contact_number'];
                                            

                                            ?>
                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $official_email; ?></td>
                                                <td><?php echo $position; ?></td>
                                                <td><?php echo $contact; ?></td>
                                            </tr>

                                           <?php  $id ++; ?>

                                            <?php  } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        
    </body>

</html>