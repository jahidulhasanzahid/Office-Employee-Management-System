<?php 

session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}


include('admin/config/connect.php');

include("l.php");

$get_last_meal_status_query = "SELECT id FROM admin_set_meal ORDER BY id DESC LIMIT 1";

$get_last_meal_status = mysqli_query($con,$get_last_meal_status_query);

$row = mysqli_fetch_assoc($get_last_meal_status);

$admin_set_meal_last_id = $row['id'];

$show_last_meal_status_query = "SELECT * FROM admin_set_meal WHERE id = '$admin_set_meal_last_id'";
$set_last_meal_status = mysqli_query($con,$show_last_meal_status_query);

$show_meal = mysqli_fetch_assoc($set_last_meal_status);

$show_last_meal_date = $show_meal['date'];
$show_last_meal_day = $show_meal['day'];
$show_last_meal_status = $show_meal['status'];

    //$get_last_meal_status_query_id = mysqli_insert_id($con);

    //$get_meal_status_query = "SELECT * FROM admin_set_meal WHERE id = '$get_last_meal_status_query_id'";

   // $get_meal_status = mysqli_query($con, $get_meal_status_query);

   // echo $get_last_meal_status_query_id;



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Logic Temple | Employee Portal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="admin/assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="admin/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        


    <!-- Theme Styles -->
    <link href="admin/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>

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
        
<div class="mn-content valign-wrapper">
    <main class="mn-inner container">
        <div class="valign">
          <div class="row">
              <div class="col s12 m6 l4 offset-l4 offset-m3">
                  <div class="card white darken-1">
                      <div class="card-content ">
                        <?php
                        if($show_last_meal_status=="off"):?>
                        <span class="card-title" align="center"> Meal is Off! </span>';


                    <?php else: ?>

                        <?php 

                        $get_booking_info_query = "SELECT * FROM meal_booking WHERE name = '$employee_name' AND  for_meal = '$show_last_meal_day'";
                        $get_booking_info = mysqli_query($con, $get_booking_info_query);

                        $row = mysqli_fetch_assoc($get_booking_info);

                        $employee_name_get = $row['name'];
                        $employee_meal_day_get = $row['for_meal'];
                        $employee_meal_status_get = $row['status'];

                        ?>



                        <span class="card-title"  align="center"> Meal is set for <?php echo $show_last_meal_date;?><p> Which is <?php echo $show_last_meal_day; ?> </p></span>



                        <?php if($employee_meal_status_get == "booked" && $employee_meal_day_get=="$show_last_meal_day" ): ?>


                            
                            <form method="POST" action="process/meal-taking-process.php">
                                <center><button class="waves-effect waves-light btn teal" name="take_meal" id="take_meal">Take</button></center></form>

                            <?php elseif($employee_meal_status_get == "taken" && $employee_meal_day_get=="$show_last_meal_day" ): ?>



                            <?php else: ?>




                              <form method="POST" action="process/meal-booking-process.php">
                               <center> <button class="waves-effect waves-light btn teal" name="book_meal" id="book_meal">Book</button> </center>

                              

                            <?php endif; ?>

                        <?php endif; ?>





                        <?php

                     // if(isset($_POST['book_meal'])){

                     //        $employee_booking_status = "booked";    
                            // $insert_booking_info_query = "INSERT INTO meal_booking (name, date, day, status)VALUES('$employee_name', '$show_last_meal_date', '$show_last_meal_day','$employee_booking_status' )";
                            // $insert_booking_info = mysqli_query($con, $insert_booking_info_query);

                            // $last_insert_booking_info_id = mysqli_insert_id($con);

                     //    }


                        ?>

                        <?php

                    // $get_last_booking_status_query = "SELECT id FROM meal_booking ORDER BY id DESC LIMIT 1";

                    // $get_last_booking_status = mysqli_query($con,$get_last_booking_status_query);

                    // $row = mysqli_fetch_assoc($get_last_booking_status);

                    // $employee_set_booking_last_id = $row['id'];
                    // $get_booking_status_query = "SELECT status FROM meal_booking WHERE id = '$employee_set_booking_last_id'";
                    // $get_booking_status = mysqli_query($con, $get_booking_status_query);

                    // $row = mysqli_fetch_assoc($get_booking_status);

                    // $employee_booking = $row['status'];

                    // echo $employee_booking;


                        ?> 




                        <div class="row">
                       <!-- <form class="col s12" method="POST" >
                                               <div class="input-field col s12">
                                                   <input id="name" type="text" class="validate" name="employee_name">
                                                   <label for="employee_name" >Full Name : </label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" class="validate" name="employee_email">
                                                   <label for="email" >Email : </label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate" name="employee_password">
                                                   <label for="password">Password</label>
                                               </div>
                                               meal book and take buttom work-->
                                               <!--<div class="col s5 right-align m-t-sm">
                                               <a href="sign-up.html" class="waves-effect waves-grey btn-flat">sign up</a>-->
                                                   <!--<button href="" class="waves-effect waves-light btn teal" name="create_employee">Book</button>
                                               </div>
                                                <div class="col s7 right-align m-t-sm">
                                                   <a href="sign-up.html" class="waves-effect waves-grey btn-flat">sign up</a>-->
                                                   <!--<button href="" class="waves-effect waves-light btn teal" name="create_employee">Take.</button>
                                               </div>
                                           </form> -->
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!--table work-->
                   <div class="row">
                    <div class="col s12">
                        <div class="page-title" ><p>    </p>Employee meal report</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                              

                                <table class="responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Booking Date</th>
                                            <th>Booking Day</th>
                                            <th>Meal Date</th>
                                            <th>Meal Day</th>
                                            <th>Meal Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $get_employee_meal_report_query = "SELECT * FROM meal_booking WHERE name='$employee_name'";
                                        $get_employee_meal_report = mysqli_query($con, $get_employee_meal_report_query);
                                        while($row = mysqli_fetch_assoc($get_employee_meal_report)){

                                            $booking_date = $row['date'];
                                            $booking_day = $row['day'];
                                            $meal_date = $row['for_meal_date'];
                                            $meal_day = $row['for_meal'];
                                            $booking_status = $row['status'];


                                            ?>
                                            <tr>
                                                <td><?php echo $booking_date; ?></td>
                                                <td><?php echo $booking_day; ?></td>
                                                <td><?php echo $meal_date; ?></td>
                                                <td><?php echo $meal_day; ?></td>
                                                <td><?php echo $booking_status; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>


            <!-- Javascripts -->



            <script src="admin/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
            <script src="admin/assets/plugins/materialize/js/materialize.min.js"></script>
            <script src="admin/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
            <script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
            <script src="admin/assets/js/alpha.min.js"></script>


        </body>

        </html>


        <!--this is php syntex-->
