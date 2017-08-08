<?php
  session_start();
  if(!isset ($_SESSION['user']) && $_SESSION['user'] != 'Emmmeke')
  {
    header("location: ../login_form.php");
  }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:h="http://xmlns.jcp.org/jsf/html"
      xmlns:jsf="http://xmlns.jcp.org/jsf"
      xmlns:f="http://xmlns.jcp.org/jsf/core">
    <h:head>

        <title>Home</title>
        <meta name="keywords" content="enter,keywords,here" />
        <meta name="description" content="enter,desc,here" />

        <link href="../style.css" rel="stylesheet" type="text/css" />

    </h:head>
    <h:body>
        <div class="wrapper">
            <nav>
                <ul>
                  <li><a href="../home.php">Home</a></li>
                  <li><a href="newpost1.php">Add new post</a></li>
                  <li><a href="newimage.php">Add images</a></li>
                  <li><a href="newlink.php">Add links</a></li>
                  <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>

            <div class="panel">
                <h2>Images posted</h2>
                <p>Successfully posted new images</p>
        </div>
        <footer>
            <div class="wrapper">
                &copy; 2015 Richard Dallman
            </div>
        </footer>
        </h:body>
</html>
