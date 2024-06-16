<?php
session_start();
error_reporting(E_ALL & E_NOTICE);
ini_set('display_errors', 1);

if(isset($_POST['submit_login'])){
    include 'operator.php';
    $user = new Operator();

    $login_email = $_POST['email'];
    $login_password = md5($_POST['password']);
    


      //check for empty input fields
    if (empty($login_email) || empty($login_password)) {
        header("Location: ../home?e=All fields are required.");
        exit();
      } elseif (!filter_var($login_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../home?e= The Email you entered is not valid.");
        exit();
      } 

      // start executing Login Checks
      else{

        //Check if the Provided Login Credentials Exist

        $Check_Credentials = $user-> CheckCredentials($login_email, $login_password);

        if($Check_Credentials == 1){

              //1. Check the User Level

              // A. Admin User
              $check_Admin_Role = $user->CheckAdministratorRole($login_email, $login_password);

              //B. HR User
              $Check_Hr_Role = $user->CheckHrRole($login_email, $login_password);

              //C. Accountant User
              $Check_Accountant_Role = $user->CheckAccountantRole($login_email, $login_password);

              //D. Secretary User
              $Check_Secretary_Role = $user->CheckSecretaryRole($login_email, $login_password);

                //Allow to Login if User is an Administrator.
              if($check_Admin_Role == 1 && $Check_Hr_Role == 0 && $Check_Accountant_Role == 0 && $Check_Secretary_Role == 0){

                $create_admin_session = $user->Create_admin_session($login_email);
                header("Location: ../administrator/dashboard?s=Welcome Administrator!!.");
                exit();
              }
                //Allow to Login if User is an HRM.
              else if($check_Admin_Role == 0 && $Check_Hr_Role == 1 && $Check_Accountant_Role == 0 && $Check_Secretary_Role == 0){

                //Check the Account Status if Active
                $check_Hr_status = $user->CheckHrStatus($login_email, $login_password);

                if($check_Hr_status == 1){
                  $create_hr_session = $user->Create_hr_session($login_email);
                  header("Location: ../hr/dashboard?s=Welcome Human Resource Manager!!.");
                  exit();
                }
                else{
                    // alert User that Status is Inactive
                    header("Location: ../home?e=Account currently Disabled!!.");
                    exit();
                }

                
              }
                //Allow to Login if User is an Accountant.
              else if($check_Admin_Role == 0 && $Check_Hr_Role == 0 && $Check_Accountant_Role == 1 && $Check_Secretary_Role == 0){

                //Check the Account Status if Active
                $check_Accountant_status = $user->CheckAccountantStatus($login_email, $login_password);

                if($check_Accountant_status == 1){
                  $create_accountant_session = $user->Create_accountant_session($login_email);
                  header("Location: ../accountant/dashboard?s=Welcome Accountant!!.");
                  exit();
                }
                else{
                  // alert User that Status is Inactive
                  header("Location: ../home?e=Account currently Disabled!!.");
                  exit();
                }

                
              }
              //Allow to Login if User is a Secretary.
              else if($check_Admin_Role == 0 && $Check_Hr_Role == 0 && $Check_Accountant_Role == 0 && $Check_Secretary_Role == 1){

                //Check the Account Status if Active
                $check_Secretary_status = $user->CheckSecretaryStatus($login_email, $login_password);

                if($check_Secretary_status == 1){
                  $create_secretary_session = $user->Create_secretary_session($login_email);
                  header("Location: ../secretary/dashboard?s=Welcome Secretary!!.");
                  exit();
                }
                else{
                   // alert User that Status is Inactive
                   header("Location: ../home?e=Account currently Disabled!!.");
                   exit();
                }
               

              } 
        }
        else{
          // alert that credentials combination is incorrect
          header("Location: ../home?e=Incorrect Login Details !!.");
          exit();
        }
      }
      //End Executing Login Checks

     

}