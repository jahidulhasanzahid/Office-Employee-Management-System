    <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
					
                        <div class="sidebar-profile-image">	
						<?php 
						include 'config/connect.php';
						$query = mysqli_query($con,"SELECT * FROM admin_login WHERE username= '$admin_username'");
						WHILE($row=mysqli_fetch_assoc($query)){
							$img_name = $row['pro_pic'];
							?>
                            <img href="form-upload.php" src="process/uploads/pro_pic/<?php echo $img_name; ?>" class="circle" alt="">
						<?php } ?>
						</div>
						<div class="sidebar-profile-info">
                            <a href="form-upload.php" class="account-settings-link">
                                <span>Change Picture</span>
                            </a>
                        </div>
						
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <span><?php echo $admin_username; ?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Manage Employee<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="view-employee-info.php">Create Employee</a></li>
                                <li><a href="employee-details.php">All Employees</a></li>
                                <li><a href="create-employee.php">Edit Employee Details</a></li>
                                <li><a href="admin-add-section.php">Execute an Employee</a></li>
                                <li><a href="admin-add-position.php">Add Position</a></li>
                                <li><a href="admin-add-position.php">Add Section</a></li>
                            </ul>
                        </div>
                    </li>

                     <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Notice<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="view-employee-info.php">Create Notice</a></li>
                                <li><a href="employee-details.php">Create Personal Notice</a></li>
                                <li><a href="create-employee.php">All notices</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Task<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="set-meal.php">Create Task</a></li>
                                <li><a href="admin-meal-report.php">Today's Reported Task</a></li>
                                <li><a href="admin-meal-report.php">All Task Report</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Meal<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="create-task.php">Create Meal</a></li>
                                <li><a href="report-list.php">Today's Meal Report</a></li>
                                <li><a href="report-list.php">All Meal Report</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Manage Leave<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="create-task.php">Today's Leave Report</a></li>
                                <li><a href="report-list.php">All Leave Reports</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Rules & FAQ<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="create-task.php">Create Rule</a></li>
                                <li><a href="report-list.php">All Rules</a></li>
                                <li><a href="report-list.php">Create FAQ</a></li>
                                <li><a href="report-list.php">All FAQ</a></li>
                            </ul>
                        </div>
                    </li>
                   
                </ul>
                <div class="footer">
                    <p class="copyright">Logic Temple ©</p>
                    <a href="">Privacy</a> &amp; <a href="">Terms</a>
                </div>
                </div>
            </aside>