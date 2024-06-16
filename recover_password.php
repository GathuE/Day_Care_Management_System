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
                    <h3 class="panel-title">Recover Password</h3>
                </div>
                <div class="panel-body">

                    <!-- Error Files -->
                        <?php include_once 'includes/errors.php'; ?>
                    <!-- Error Files -->

                    <form role="form" method="post" action="classes/recover_password">
                        <fieldset>
                            <div class="form-group">
                            <label>User Role</label>
                                <select class="form-control" name="user_role" id="user_role" onchange="validate_recover_input()">
                                    <option value="">Select User Role...</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Hr">Human Resource Manager</option>  
                                    <option value="Accountant">Accountant</option>
                                    <option value="Secretary">Secretary</option>
                                     
                                </select>
                                <span class="input_error" id="role_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Security Question</label>
                                <select class="form-control" name="security_question" id="security_question" onchange="validate_recover_input()">
                                    <option value="">Choose your Security Question</option>
                                    <option value="1">What is my Favourite Fruit?</option>
                                    <option value="2">What is my Favourite Drink?</option>
                                    <option value="3">What is my Favourite Food?</option>
                                </select>
                                <span class="input_error" id="security_question_error"></span>
                            </div>
                            <div class="form-group">
                            <label>Security Answer</label>
                                <input class="form-control" placeholder="Security Answer" name="security_answer" id="security_answer" type="text" oninput="validate_recover_input()">
                                <span class="input_error" id="security_answer_error"></span>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <a href="index"> Sign In Instead</a>
                                </label>
                            </div>
                            
                            <button type="" class="btn btn-lg btn-success btn-block" name="submit_recovery" id="submit_recovery">Recover Password</button>
                            
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