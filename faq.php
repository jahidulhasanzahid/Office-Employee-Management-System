
<?php
// include("config/connect.php");
// session_start();
// $admin_username = $_SESSION['admin_username'];
// // $_SESSION['report_date'];
// // //echo $admin_username;
// // //$employee_name = $_SESSION['employee_name'];
// // if(!isset($_SESSION['report_date'])){
// // 		header("location: admin-meal-report.php");
// // 	}

// if(!isset($_SESSION['admin_username'])){
// 	header("location: index.php");

//}
include("l.php");
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
	<link type="text/css" rel="stylesheet" href="admin/assets/plugins/materialize/css/materialize.min.css"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="admin/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
	<link href="admin/assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/>
	<link href=href="admin/assets/plugins/materialize/css/select2.css" rel="stylesheet">  


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
<div class="mn-content">
	<main class="mn-inner container">
		<div class="valign">

			<div class="row">
				


				


				<div class="col s12">
					<div class="page-title" ><p>All Rules  </p></div>
				</div>

				<div class="col s12 m12 l12">
					<div class="card">
						<div class="card-content">
							
							<?php

								


									$get_all_rules_query = "SELECT * FROM faq";

                                    $get_all_rules = mysqli_query($con, $get_all_rules_query);

                                   while( $row = mysqli_fetch_assoc($get_all_rules)){

                                   	$faq_id = $row['id'];
                                    $faq_q = $row['faq_q'];
                                    $faq_a = $row['faq_a'];



                                    echo "<ul class='collapsible' data-collapsible='accordion'>";

                                    	echo "<li>";

                                    		echo "<div class='collapsible-header'><b>$faq_q</b></div>";

                                    		echo "<div class='collapsible-body'><p>$faq_a</p></div>";



                                    	echo "</li>";

                                    echo "</ul>";

                                    



                                    	
								}




							?>


							
							

							
							</div>
						</div>
					</div>
				</div>


								

				<!--report ends here-->

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
<script src="admin/assets/plugins/materialize/js/form-select2.js"></script>
<script src="admin/assets/plugins/materialize/js/form_elements.js"></script>

</body>

</html>
