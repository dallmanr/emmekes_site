<?php
  session_start();
  session_destroy();

  echo "Logged out successfully";
  header("location: home.php");
  //header("location: home.php");
?>
