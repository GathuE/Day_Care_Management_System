<?php
session_start();
error_reporting(E_ALL & E_NOTICE);
ini_set('display_errors', 1);

if(isset($_POST['submit_recovery'])){
    include 'operator.php';
    $user = new Operator();

    $user_role = $_POST['user_role'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    $hashed_answer = md5($_POST['security_answer']);

      //check for empty input fields
      if (empty($user_role) || empty($security_question) || empty($security_answer)) {
        header("Location: ../recover_password?e=Some Information is Missing!!");
        exit();
      }
        else{

            //Verify if Provided Security Details Exists
            $verify_security_data = $user->CheckSecurityDetails($user_role, $security_question, $hashed_answer);

            if($verify_security_data == 1){

            // Collect Database Reference as Session Data to assist in Password Reset Mechanism
            $reset_database_reference = $user->CollectReference($user_role, $security_question, $hashed_answer);
                header("Location: ../reset_password?s=Security Details Confirmed!!");
                exit();
            }
            else{
                header("Location: ../recover_password?e=Incorrect Details Provided!!");
                exit();
            }
            
            

        }




}

