<?php 

						include"../config/connect.php";

							if(isset($_POST['send_direction'])){
								$task_re = $_GET['task-re'];
								$task_direction = $_POST['task_direction'];
								$update_task_direction_query = "UPDATE reporting set task_direction='$task_direction', report_status = 'Re Directed' WHERE re_id = '$task_re'";

								$update_task_direction = mysqli_query($con, $update_task_direction_query);

							
							

							$link="../task-details.php?task-id=$task_re";
							
							header('Location:' . $link . '');
					
					
					
						
				}
							?>