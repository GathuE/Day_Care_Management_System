<?php
  session_start();
  error_reporting(E_ALL & E_NOTICE);

  // Set timezone
  date_default_timezone_set('Africa/Nairobi');
  
  include_once 'dbclass.php';

  class Operator {
    public $dbh;

    function __construct() {
      $db_connection = new Dbh;
      $this->dbh = $db_connection->connect();
      return $this->dbh;
    }

    // Functions for Database Operation Go Here 

    //1. Check For Provided Credentials Existence
    function CheckCredentials($login_email, $login_password) {
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=?");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    
    //2a. Check if the User is an Administrator

    function  CheckAdministratorRole($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='Administrator'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    

    //2b. Create Session Data for Administrator
    function Create_admin_session($login_email) {
      $query = $this->dbh->query("SELECT * FROM administrative_users WHERE email='$login_email'");
      $user = $query->fetch();
      $_SESSION['ID'] = $user['ID'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['profile_pic'] = $user['profile_pic'];
      $_SESSION['phone_number'] = $user['phone_number'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['logged_in'] = 1;
    }


    //3a. Check if the User is the HR

    function  CheckHrRole($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='HR'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    //3b. Check if the HR Status is Active

    function  CheckHrStatus($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='HR' AND status='Active'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    //3c. Create Session Data for HR
    function Create_hr_session($login_email) {
      $query = $this->dbh->query("SELECT * FROM administrative_users WHERE email='$login_email'");
      $user = $query->fetch();
      $_SESSION['ID'] = $user['ID'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['profile_pic'] = $user['profile_pic'];
      $_SESSION['phone_number'] = $user['phone_number'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['logged_in'] = 1;
    }


    //4a. Check if the User is the Accountant

    function  CheckAccountantRole($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='Accountant'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    //4b. Check if the Accountant Status is Active

    function  CheckAccountantStatus($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='Accountant' AND status='Active'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }
    
    //4c. Create Session Data for Accountant
    function Create_accountant_session($login_email) {
      $query = $this->dbh->query("SELECT * FROM administrative_users WHERE email='$login_email'");
      $user = $query->fetch();
      $_SESSION['ID'] = $user['ID'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['profile_pic'] = $user['profile_pic'];
      $_SESSION['phone_number'] = $user['phone_number'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['logged_in'] = 1;
    }

    //5a. Check if the User is the Secretary

    function  CheckSecretaryRole($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='Secretary'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    //5b. Check if the Secretary Status is Active

    function  CheckSecretaryStatus($login_email, $login_password){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE email=? AND password=? AND role ='Secretary' AND status='Active'");
      $values = array($login_email, $login_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

    //5c. Create Session Data for Secretary
    function Create_secretary_session($login_email) {
      $query = $this->dbh->query("SELECT * FROM administrative_users WHERE email='$login_email'");
      $user = $query->fetch();
      $_SESSION['ID'] = $user['ID'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['profile_pic'] = $user['profile_pic'];
      $_SESSION['phone_number'] = $user['phone_number'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['logged_in'] = 1;
    }


    //PASSWORD RECOVERY METHODS

    //1. Verify the Security Details Provided.

    function CheckSecurityDetails($user_role, $security_question, $hashed_answer){
      $query = $this->dbh->prepare("SELECT * FROM administrative_users WHERE role=? AND security_question=? AND security_answer=?");
      $values = array($user_role, $security_question, $hashed_answer);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck; 

    }

    //Collect Session Data to Reset the Password
    function CollectReference($user_role, $security_question, $hashed_answer){
      $query = $this->dbh->query("SELECT * FROM administrative_users WHERE role='$user_role' AND security_question='$security_question' AND security_answer='$hashed_answer'");
      $user = $query->fetch();
      $_SESSION['ID'] = $user['ID'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['profile_pic'] = $user['profile_pic'];
      $_SESSION['phone_number'] = $user['phone_number'];
      $_SESSION['email'] = $user['email'];

    }

    // Set the New Password

    function SetNewPassword($reset_password){
      $id = $_SESSION['ID'];
      $query = $this->dbh->prepare("UPDATE administrative_users SET password=? WHERE ID = $id;");
      $values = array($reset_password);
      $query->execute($values);
      $resultCheck = $query->rowCount();
      return $resultCheck;
    }

  }

  ?>