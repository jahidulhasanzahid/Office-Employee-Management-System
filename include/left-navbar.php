    <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        
                        <div class="sidebar-profile-image">	
						<?php 
						include 'admin/config/connect.php';
						$query = mysqli_query($con,"SELECT * FROM employee_details WHERE official_email= '$employee_email'");
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
                                <span><?php echo $employee_name; ?><i class="material-icons right">arrow_drop_down</i></span>
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
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Profile<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="meal-booking.php">View Profile</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>
                            <ul>
                                <li><a href="meal-booking.php">Edit Profile</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Task<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                        <ul>
                                <li><a href="employee-update-password.php">Active task</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>
                            <ul>
                                <li><a href="employee-update-password.php">All task report</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Meal<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="edit-profile.php">Meal Booking</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>

                        </div>
                    </li>

                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Leave Management<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="edit-profile.php">Apply for Leave</a></li>
                                <li><a href="edit-profile.php">Leave Report</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
                            </ul>

                        </div>
                    </li>

                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Settings<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="edit-profile.php">Account Settings</a></li>
                                <!--<li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>-->
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