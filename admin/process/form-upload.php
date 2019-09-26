<?php

session_start();
$admin_username = $_SESSION['admin_username'];
//echo $admin_username;
//$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['admin_username'])){
    header("location: ../index.php");

}




include('../config/connect.php');
	
 
    




// SQL Query To Fetch Complete Information Of User

	

     if(isset($_POST['submit']))
    {
		

     
		
		
		$admin_username = $_SESSION['admin_username'];
		$filename = $_FILES['file']['name'];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
		$file_ext = substr($filename, strripos($filename, '.')); // get file format
		$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$error = $_FILES['file']['error'];
		$location = 'uploads/pro_pic/';
			
		
		
		// Rename file
		$newfilename = substr(str_shuffle(md5($file_basename)), 0, 15) . $file_ext;
		
		if (move_uploaded_file($tmp_name, $location.$newfilename)) {
		
        $ins=mysqli_query($con,"UPDATE `admin_login` SET
                          pro_pic = '$newfilename' WHERE username='$admin_username' ");
						  
        if($ins)
        {
            ?>
			<script>
				alert('Successfully Submitted Your Report');
				window.location.href='../admin-meal-report.php';
			</script>
			<?php
		}
	}
}
	else {
		?>
		<script>
			alert('Sorry Something Went Wrong');
			window.location.href='../admin-meal-report.php';
        </script>
	<?php } ?>
	
