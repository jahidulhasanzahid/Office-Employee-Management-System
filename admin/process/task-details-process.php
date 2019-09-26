<?php 

                                $get_task_report_query = " SELECT reporting.employee_id,reporting.task_create_date,reporting.employee_id,reporting.task_title,reporting.report_status,reporting.task_status,employee_details.id, employee_details.employee_name FROM reporting INNER JOIN employee_details ON reporting.employee_id = employee_details.id ";

                                $get_task_report = mysqli_query($con,$get_task_report_query);

                                $row = mysqli_fetch_assoc($get_task_report);

                               

                                $id = 1;

                               
                                while($row = mysqli_fetch_assoc($get_task_report)){

                                    $id ;
                                    $task_id = $row['id'];
                                    $task_date = $row['task_create_date'];
                                    $employee_name = $row['employee_name'];
                                    $task_title = $row['task_title'];
                                    $report_status= $row['report_status'];
                                    $task_status= $row['task_status'];
                                  

                                    ?>