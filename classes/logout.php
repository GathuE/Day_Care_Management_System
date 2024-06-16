<?php
  session_start();
  session_unset();
  session_destroy();

  header("Location: ../home?s=Successfully Logged Out.");

  exit();
 ?>