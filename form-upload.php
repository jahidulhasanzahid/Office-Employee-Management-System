<!DOCTYPE html>
<?php


session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}
include('admin/config/connect.php');
include("l.php");
?>
<html lang="en">
    
<!-- Mirrored from steelcoders.com/alpha/v1.1/form-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 17:29:14 GMT -->
<head>
        
        <!-- Title -->
        <title>Logic Temple Project Manager</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="admin/assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="admin/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        
        <link href="admin/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
        <link href="admin/assets/plugins/dropzone/basic.min.css" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="admin/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        
        <div class="mn-content fixed-sidebar">
            
  <?php
include ("include/main-navbar.php");
?>
<!--main navbar include end-->
<!--left navbar start here-->

<?php
include ("include/left-navbar.php");
?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">File Upload</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form action="process/form-upload.php" enctype="multipart/form-data" method="POST" class="p-v-xs">


							
							
                            <div class="card-content">
                                <span class="card-title">File Input</span>
                                <div class="row">
                                    <div class="col s12">
                                        
                                            <div class="file-field input-field">
                                                <div class="btn teal lighten-1">
                                                    <span>File</span>
                                                    <input type="file" name="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
					
					
							<button class="btn waves-effect waves-light indigo m-b-xs" type="submit" name="submit">Submit
							<i class="material-icons right">send</i>
							</button>
							
								
							
							
							
							
							
							
						</form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="admin/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="admin/assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="admin/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="admin/assets/plugins/dropzone/dropzone.min.js"></script>
        <script src="admin/assets/plugins/dropzone/dropzone-amd-module.min.js"></script>
        <script src="admin/assets/js/alpha.min.js"></script>
        
    </body>

<!-- Mirrored from steelcoders.com/alpha/v1.1/form-upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 17:29:16 GMT -->
</html>