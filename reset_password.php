<!-- Header Files -->
<?php include_once 'includes/header.php'; ?>

<!-- Header Files -->

<!-- Database Files -->


<!-- Database Files -->


<div class="container">

    <div class="card" style="text-align:center;">
            <!-- System Logo -->
            <div class="system_logo">
                    <?php include_once 'includes/system_logo.php'; ?>
            </div>
            <!-- System Logo -->
        
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Set New Password</h3>
                </div>
                <div class="panel-body">

                    <!-- Error Files -->
                        <?php include_once 'includes/errors.php'; ?>
                    <!-- Error Files -->

                    <!-- Database Reference Data -->

                    <?php 
                        
                        session_start();
                        error_reporting(E_ALL & E_NOTICE);

                        include 'classes/dbclass.php';

                        //Session Data
                        $id = $_SESSION['ID'];
                        $username = $_SESSION['username'];
                        $user_role = $_SESSION['role'];
                        $user_email = $_SESSION['email'];
                    ?>

                    <!-- Database Reference Data -->

                    <form role="form" method="post" action="classes/reset_password">
                        <fieldset>
                            <div class="form-group">
                            <label>User Role</label>
                            <input class="form-control" name="user_role" id="user_role" type="text" value="<?php echo $user_role ?>" readonly>
                            
                            <!-- Hidden Session Data -->

                            <input class="form-control" name="user_id" id="user_id" type="hidden" value="<?php echo $id ?>" readonly>
                            <input class="form-control" name="user_name" id="user_name" type="hidden" value="<?php echo $username ?>" readonly>
                            <input class="form-control" name="user_email" id="user_email" type="hidden" value="<?php echo $user_email ?>" readonly>
                            
                            <!-- Hidden Session Data -->
                            
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" name="reset_password" id="reset_password" type="password">
                            </div>
                            <div class="form-group">
                            <label>Confirm Password</label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" oninput="validate_confirmpassword_input()">
                            </div>
                            <div class="form-group">
                                <span class="input_error" id="reset_password_error"></span>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <a href="index"> Sign In Instead</a>
                                </label>
                            </div>
                            <button type="" class="btn btn-lg btn-success btn-block" name="submit_resetpassword" id="submit_resetpassword">Reset Password</button>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!--Author Meta Data -->

    <?php 
        //REQUEST FOR SYSTEM LOGO FROM DATABASE
        error_reporting(E_ALL & E_NOTICE);
        include 'includes/db_conn.php';
        $sql = "SELECT * from system_credentials";
        $query = $conn-> prepare($sql);
        $query->execute();
        $results=$query->fetch();
        
        
    ?>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p class="author_data">Sytem Designed by : <a href="https://<?php echo $results ["author_website"];?>">Website Link</a></p>
            <p class="author_data"><?php echo $results ["system_author"];?></p>
        </div>
    </div>

    <!--Author Meta Data -->


</div>

<?php include_once 'includes/footer.php'; ?>


<?php ?>