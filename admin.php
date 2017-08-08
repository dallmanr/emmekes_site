<?php
session_start();
include "login2.php";
if(!isset($_SESSION['$logon']) || $_SESSION['$legitUser'] != '1') {
   //maybe redirect to login page
   header("location: ../login_form.php");
   die();
}
else {
  header("location: postnews/newpost1.php");
}

?>
