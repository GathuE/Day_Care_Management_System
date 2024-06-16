<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['logged_in'])) {
  header("Location: ../home?e=Session Expired..  Please Login to Proceed!!");
  exit();
}

else {



// Session Data for the Administrator

error_reporting(E_ALL & E_NOTICE);

include 'classes/dbclass.php';

//Session Data
$id = $_SESSION['ID'];
$username = $_SESSION['username'];
$user_role = $_SESSION['role'];
$user_email = $_SESSION['email'];

}

?>
                    

<!-- Header Files -->
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navigation.php'; ?>
<!-- Header Files -->

<!-- Database Files -->

<?php include_once 'includes/db_conn.php'; ?>




<!-- Database Files -->


<!-- Wrapper  Starts-->
<div id="wrapper">

        <!-- Page Content Starts -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Error Alert -->
                <div class="dashboard_alert">
                    <?php include_once 'includes/errors.php'; ?>
                </div>
                <!-- Error Alert -->

                <!--Dashboard Content -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    
                </div>

                <!-- Dasboard Cards -->
                <div class="row">

                <!-- No of System Users -->

                <?php 
                        $sql ="SELECT ID from administrative_users where role = 'Accountant' OR role = 'HR' OR role = 'Secretary'";
                        $query2 = $conn -> prepare($sql);;
                        $query2->execute();
                        $results=$query2->fetchAll(PDO::FETCH_OBJ);
                        $query=$query2->rowCount();
                    ?>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo htmlentities($query);?></div>
                                            <div>System Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="all_users">
                                    <div class="panel-footer">
                                        <span class="pull-left">View More</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                <!-- No of System Users -->

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>New Orders!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Support Tickets!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Cards -->

                <!--Dashboard Content -->
                
            </div>
            
        </div>
        <!-- Page Content Ends-->

</div>
<!-- Wrapper Ends-->

<?php include_once 'includes/footer.php'; ?>


