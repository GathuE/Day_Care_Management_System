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

?><!-- Header Files -->
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navigation.php'; ?>
<!-- Header Files -->

<!-- Database Files -->


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
                        <h1 class="page-header">System Users</h1>
                    </div>
                    
                </div>

                <!-- All Users Data Table --->

                <!-- /.row -->
                <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    System Users
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No:</th>
                                                    <th>Username</th>
                                                    <th>User Role</th>
                                                    <th>User Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <!-- All System Users Data -->

                                            <?php 
                                                //REQUEST FOR SYSTEM CREDENTIALS FROM DATABASE
                                                error_reporting(E_ALL & E_NOTICE);
                                                include 'db_conn.php';
                                                $sql = "SELECT * from system_credentials";
                                                $query = $conn-> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetch();
                                            ?>

                                            <?php 

                                                //REQUEST FOR SYSTEM CREDENTIALS FROM DATABASE
                                                error_reporting(E_ALL & E_NOTICE);
                                                include 'includes/db_conn.php';
                                                $sql = "SELECT * FROM administrative_users WHERE role = 'Accountant' OR role = 'HR' OR role = 'Secretary'";
                                                $query = $conn -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0)
                                                {
                                                foreach($results as $result)
                                                {	
                                            ?>




                                                <tr class="odd gradeA">
                                                    <td><?php echo htmlentities($cnt);?></td>
                                                    <td><?php echo htmlentities($result->username);?></td>
                                                    <td><?php echo htmlentities($result->role);?></td>
                                                    <td><?php echo htmlentities($result->status);?></td>
                                                    <td>
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="edit_userdata?edit=<?php echo $result->ID;?>"><i class="fa fa-pencil m-r-5"></i> Edit</a><br>
                                                                <a class="dropdown-item" href="all_users?activate=<?php echo $result->ID;?>" onclick="return confirm('Activate User Account?');"><i class="fa fa-eye m-r-5"></i> Activate</a><br>
                                                                <a class="dropdown-item" href="view_posts?deactivate=<?php echo $result->ID;?>" onclick="return confirm('Deactivate User Account?');"><i class="fa fa-trash-o m-r-5"></i> De-Activate</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php $cnt=$cnt+1; }} else{ echo '<td colspan="6" style="text-align:center;color:red;font-weight:bold;">You have no posts Yet! </td>'; } ?>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->



                <!-- All Users Data Table --->

                

                <!--Dashboard Content -->
                
            </div>
            
        </div>
        <!-- Page Content Ends-->

</div>
<!-- Wrapper Ends-->

<?php include_once 'includes/footer.php'; ?>


<?php ?>