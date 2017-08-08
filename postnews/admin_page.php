<?php
  session_start();
  if(!isset ($_SESSION['user']) && $_SESSION['user'] != 'Emmmeke')
  {
    header("location: ../login_form.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog title</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="../home.php">Home</a>
          <a class="nav-link" href="newpost.php">Add new post</a>
          <a class="nav-link" href="removepost.php">Remove post</a>
          <a class="nav-link" href="newimage.php">Add images</a>
          <a class="nav-link" href="removeimage.php">Delete image</a>
          <a class="nav-link" href="../logout.php">Log out</a>
        </nav>
    </div>
  </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Control panel</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Donec urna augue, semper id pretium eget, malesuada vel tortor.</p>
            <p>Nunc vulputate sapien eu magna ultricies et pretium lacus congue.</p>
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <p>In quis lorem tincidunt ligula blandit dignissim ut a turpis.</p>
            <p>Vestibulum in sapien metus. Donec turpis massa, euismod sed pellentesque sed, molestie ut nulla.
                Donec cursus, justo sed congue vulputate, nibh massa accumsan nulla, eleifend adipiscing magna leo id lorem.
                Suspendisse semper velit eu leo fringilla hendrerit. Maecenas sit amet tellus risus. Ut vitae mauris arcu.
                In hac habitasse platea dictumst. Sed congue sodales ipsum, dictum ultricies massa aliquet ut. Suspendisse potenti.</p>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
