<?php
session_start();
error_reporting(E_ALL & E_NOTICE);
ini_set('display_errors', 1);

if(isset($_POST['submit_resetpassword'])){
    include 'operator.php';
    $user = new Operator();

    $user_id = $_SESSION['ID'];
    $reset_password = $_POST['reset_password'];
    $confirm_password = $_POST['confirm_password'];
    

      //check for empty input fields
      if (empty($reset_password) || empty($confirm_password)) {
        header("Location: ../reset_password?e=Some Information is Missing!!");
        exit();
      }
        else{

            //Check if Passwords are Identical
            $reset_password = md5($reset_password);
            $identical_password = md5($confirm_password);

            if($reset_password === $identical_password){
                //Set the New Password Now
                $change_password = $user->SetNewPassword($reset_password);

                //If the Reset Succeeds, Direct the User to Login Page
                if($change_password == 1){
                    //session_unset();
                    //session_destroy();
                    header("Location: ../home?s=Reset Successful.Log In to Continue");
                    exit();
                }
                else{
                    header("Location: ../reset_password?e=Unable to Reset the Password.Contact your Webmaster!!");
                    exit();
                }
            }
            else{
                header("Location: ../reset_password?e=The Passwords Do not Match!!");
                exit();
            }
 

        }




}

