<?php 

session_start();

$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

include('admin/config/connect.php');
include("l.php");
$get_employee_id_query = "SELECT id FROM employee_details WHERE official_email = '$employee_email'";

$get_employee_id = mysqli_query($con, $get_employee_id_query );

$row = mysqli_fetch_assoc($get_employee_id);

$employee_id = $row['id'];


if(!isset($_SESSION['employee_email'])){
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
<div class="mn-content valign-wrapper">
  <main class="mn-inner container">
    <div class="valign">

     <div class="row">

       <div class="col s6">

       </div>

       <div class="col s6">

       </div>
     </div>
   </div>
   <div class="col s12">
    <div class="page-title" ><p>Report Here</p></div>
  </div>
  <div class="col s12 m12 l12">
    <div class="card">
      <div class="card-content">

        <?php
        $task_id = $_GET['task-id'];
        $get_task_report_query = "SELECT task_title FROM reporting WHERE employee_id = '$employee_id' AND re_id = '$task_id'";

        $get_task_report = mysqli_query($con,$get_task_report_query);

        $row = mysqli_fetch_assoc($get_task_report);

        $task_title = $row['task_title'];

        echo "<p style='font-size: 18px; color: #00acc1;'>$task_title <br>";

        ?>

        <form class="col s12" method="POST" enctype="multipart/form-data" action="process/report-process.php?task-id=<?php echo $task_id ;?>&emp=<?php echo $employee_id; ?>">
          <div class="input-field col s12">
            <textarea id="textarea1" name="task_direction" class="materialize-textarea"></textarea> 
            <label for="email" >Report details </label>
          </div>

          <div class="input-field col s12">
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


          <div class="col s6 right-align ">
            <button href="" class="waves-effect waves-light btn teal" name="send_direction">send report</button>
          </div>


        </form>


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
<script src="admin/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="admin/assets/plugins/materialize/js/materialize.min.js"></script>
<script src="admin/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="admin/assets/js/alpha.min.js"></script>
<script src="admin/assets/plugins/materialize/js/form-select2.js"></script>
<script src="admin/assets/plugins/materialize/js/form_elements.js"></script>

</body>

</html>


<!--this is php syntex-->
