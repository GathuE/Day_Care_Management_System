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
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    
                    <!-- Error Files -->
                        <?php include_once 'includes/errors.php'; ?>
                    <!-- Error Files -->

                    <form role="form" method='post' action='classes/login'>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" id="email_login" oninput="validate_login_input()" type="text" autofocus>
                                <span class="input_error" id="email_error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" id="password_login" oninput="validate_login_input()" type="password">
                                <span class="input_error" id="password_error"></span>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <a href="recover_password"> Forgot / Recover Password</a>
                                </label>
                            </div>
                           
                            <button type="submit" name="submit_login" id="submit_login" class="btn btn-lg btn-success btn-block">Login</button>
                            
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