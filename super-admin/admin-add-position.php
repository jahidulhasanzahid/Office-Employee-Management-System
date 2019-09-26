<?php
include("config/connect.php");
session_start();
$super_admin_username = $_SESSION['super_admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['super_admin_username'])){
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

           

            <!--report ends here-->
            <div class="row">
              <div class="col s12 ">
                
                      <div class="card white darken-1">
                          <div class="card-content ">
                              <span class="card-title" align="center">Add position<hr/></span>
                              <div class="row">
                               <form class="col s12" method="POST" action="process/admin-add-position-process.php">
                                   <div class="input-field col s12">
                                       <input id="hdate" type="text" name="position_name" class="">
                                       <label for="add_position" >Position name</label>
                                   </div>
                                   <div class="input-field col s12">

                                       <!--<label for="day" > Day : </label>-->
                                   </div>
                                   <div class="input-field col s12">

                                   </div>
                                   <div class="col s12 right-align m-t-sm">
                                       <!--<a href="sign-up.html" class="waves-effect waves-grey btn-flat">sign up</a>-->
                                       <center><button href="" class="waves-effect waves-light btn teal" name="add_position">Add</button></center>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               
               <!--daily report end-->


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
