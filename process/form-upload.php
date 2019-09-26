<?php


session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}




include('../admin/config/connect.php');
	
 
include("../l.php");




// SQL Query To Fetch Complete Information Of User

	

     if(isset($_POST['submit']))
    {
		
		if((($_FILES["file"]["type"]=="image/jpeg") || ($_FILES["file"]["type"]=="image/png") || ($_FILES["file"]["type"]=="image/gif"))&&($_FILES["file"]["size"] < 4048576)) {

     
		
		
		$employee_email = $_SESSION['employee_email'];
		$filename = $_FILES['file']['name'];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
		$file_ext = substr($filename, strripos($filename, '.')); // get file format
		$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$error = $_FILES['file']['error'];
		$location = 'uploads/pro_pic/';
			
		
		
		// Rename file
		$newfilename = substr(str_shuffle(md5($file_basename)), 0, 25) . $file_ext;
		
		if (move_uploaded_file($tmp_name, $location.$newfilename)) {
		
        $ins=mysqli_query($con,"UPDATE `employee_details` SET
                          pro_pic = '$newfilename' WHERE official_email='$employee_email' ");
						  
        if($ins)
        {
            ?>
			<script>
				alert('Successfully Updated Your Profile Picture :)');
				window.location.href='../meal-booking.php';
			</script>
			<?php
		}
	}
}
}
	else {
		?>
		<script>
			alert('Sorry Check Your File Format');
			window.location.href='../form-upload.php';
        </script>
	<?php } ?>
	
