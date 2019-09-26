<?php

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
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title" align="center">Set Meal<hr/></span>
                                       <div class="row">
                                           <form class="col s12" method="POST" action="">
                                               <div class="input-field col s12">
                                                   <input id="hdate" type="text" name="meal_date" class="datepicker">
                                                   <label for="meal_date" >Date  </label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <select id="day" type="text" class="validate" name="meal_day">
                                                   <option>Select Day</option>
                                                   <option>Saturday</option>
                                                   <option>Sunday</option>
                                                   <option>Monday</option>
                                                   <option>Tuesday</option>
                                                   <option>Wednesday</option>
                                                   <option>Thursday</option>
                                                   <option>Friday</option>
                                                   </select>
                                                   <!--<label for="day" > Day : </label>-->
                                               </div>
                                               <div class="input-field col s12">
                                                   <select id="day" type="text" class="validate" name="meal_status">
                                                        <option>off</option>
                                                        <option>on</option>
                                                   </select>
                                                </div>
                                               <div class="col s12 right-align m-t-sm">
                                             
                                                   <button href="" class="waves-effect waves-light btn teal" name="set_meal">SET</button>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
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
<?php 

    include('config/connect.php');


    if(isset($_POST['set_meal'])){

        $meal_date = $_POST['meal_date'];
        $meal_day = $_POST['meal_day'];
        $meal_status = $_POST['meal_status']; 
        

        $set_meal_query = "INSERT INTO admin_set_meal(date, day, status) VALUES ('$meal_date', '$meal_day', '$meal_status')";

        $set_meal = mysqli_query($con, $set_meal_query);

        echo "<script> alert(' Meal set successfully ') </script>";;
    }
                                                           
 ?>