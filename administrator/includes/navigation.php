<!-- Navigation  Starts-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

<?php 
    //REQUEST FOR SYSTEM CREDENTIALS FROM DATABASE
    error_reporting(E_ALL & E_NOTICE);
    include 'db_conn.php';
    $sql = "SELECT * from system_credentials";
    $query = $conn-> prepare($sql);
    $query->execute();
    $results=$query->fetch();
?>

<!-- Top Navigation Starts -->
    <div class="navbar-header">
        <a class="navbar-brand" href="./dashboard"><img class="navbar_icon" style="height:30px;width:30px;" src="../images/<?php echo $results ["system_icon"];?>"></a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>


    <!-- Include Website Link Here -->

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Website Link</a></li>
    </ul>

    <!-- Include Website Link Here -->



        <ul class="nav navbar-right navbar-top-links">

        <!-- Notifications 

            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>

         Notifications -->

            <!-- Include the Navigation Data -->

            <?php include_once 'administrator_data.php'?>

            <!-- Include the Navigation Data -->



        </ul>

<!-- Top Navigation Ends -->


<!-- Sidebar Navigation Starts -->
        <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">

                            

                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form">

                                    <p>Logged in User : <b><?php echo $user_role ?></b></p>
                                       <!-- Search Box

                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>

                                        Search Box -->

                                    </div>
                                    
                                </li>

                        
                                <li>
                                    <a href="./dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>

                                <!-- System Users -->

                                <li>
                                    <a href="#"><i class="fa fa-users fa-fw"></i> System users<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="./all_users"><i class="fa fa-user"></i> All Users</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-user-circle-o fa-fw"></i> Active Users</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-user-circle fa-fw"></i> In Active Users</a>
                                        </li>
                                    </ul>
                                    
                                </li>

                                <!-- System Users -->

                                <!-- Reports -->

                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Reports<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i> Children Enrollment</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#"><i class="fa fa-user-circle fa-fw"></i> Staff Enrollment</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                
                                <!-- Reports -->
                                  
                                
                            </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->

<!-- Sidebar Navigation Ends -->

               
</nav>
        