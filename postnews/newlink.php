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

        <title>Add new link</title>
        <meta name="keywords" content="enter,keywords,here" />
        <meta name="description" content="enter,desc,here" />

        <link href="../style.css" rel="stylesheet" type="text/css" />

    </h:head>
    <h:body>
        <div class="wrapper">
            <nav>
              <ul>
                  <li><a href="../home.php">Home</a></li>
                  <li><a href="newpost.php">Add new post</a></li>
                  <li><a href="removepost.php">Remove post</a></li>
                  <li><a href="newimage.php">Add images</a></li>
                  <li><a href="removeimage.php">Delete image</a></li>
                  <li><a href="newlink.php">Add links</a></li>
                  <li><a href="../logout.php">Log out</a></li>
              </ul>
            </nav>

            <div class="panel">
                <h2>Add new link</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec urna augue, semper id pretium eget, malesuada vel tortor.</p>
                <p>Nunc vulputate sapien eu magna ultricies et pretium lacus congue.</p>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p>In quis lorem tincidunt ligula blandit dignissim ut a turpis.</p>
                <p>Vestibulum in sapien metus. Donec turpis massa, euismod sed pellentesque sed, molestie ut nulla.
                    Donec cursus, justo sed congue vulputate, nibh massa accumsan nulla, eleifend adipiscing magna leo id lorem.
                    Suspendisse semper velit eu leo fringilla hendrerit. Maecenas sit amet tellus risus. Ut vitae mauris arcu.
                    In hac habitasse platea dictumst. Sed congue sodales ipsum, dictum ultricies massa aliquet ut. Suspendisse potenti.</p>
            </div>

        </div>
        <footer>
            <div class="wrapper">
                &copy; 2015 Richard Dallman
            </div>
        </footer>
        </h:body>
</html>
