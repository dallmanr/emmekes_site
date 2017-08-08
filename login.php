<?php
  session_start();
  include 'database.php';

    $username = $_POST['username'];
    $pw =$_POST['password'];
    $username = stripslashes($username);
    $pw = stripslashes($pw);
    $username = mysqli_real_escape_string($conn, $username);
    $pw = mysqli_real_escape_string($conn, $pw);

    $sql = "SELECT * FROM users WHERE username = '$username' AND pass='$pw'";
    $result = $conn -> query($sql);

    if (!$row = $result -> fetch_assoc()){
      echo "Your username or password is incorrect";
    } else {
      //echo "Logged in successfully";

      $_SESSION['user'] = $row['username'];
      //header("location: postnews/newpost1.php");
      header("location: postnews/admin_page.php");
      //echo $_SESSION['user'];
      //session_start();
    }

?>
