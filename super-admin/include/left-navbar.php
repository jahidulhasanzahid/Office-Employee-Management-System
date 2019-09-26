    <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/lt.jpg" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <span><?php echo $super_admin_username; ?><i class="material-icons right">arrow_drop_down</i></span>
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
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Employee<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="view-employee-info.php">Employee Info</a></li>
                                <li><a href="employee-details.php">Edit Employee Profile</a></li>
                                <li><a href="create-employee.php">Create Employee</a></li>
                                <li><a href="admin-add-section.php">Add section</a></li>
                                <li><a href="admin-add-position.php">Add position</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Meal<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="set-meal.php">Set Meal</a></li>
                                <li><a href="admin-meal-report.php">Meal Report</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="no-padding">
                       <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Admin<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="create-admin.php">Create Admin</a></li>
                                
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