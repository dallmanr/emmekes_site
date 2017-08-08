
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Emmekes website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="about.htm">About</a>
          <a class="nav-link" href="allotment.php">Allotment</a>
          <a class="nav-link" href="garden.php">Garden</a>
          <a class="nav-link" href="other.php">Other</a>
          <a class="nav-link" href="links.htm">Links</a>
          <a class="nav-link" href="contact.htm">Contact</a>
          <a class="nav-link" href="postnews/admin_page.php">Admin</a>
        </nav>
    </div>
  </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Emmekes blog</h1>
        <p class="lead blog-description">Emmekes blog on all things gardening</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <!--<h2 class="blog-post-title">Posts</h2> -->
            <!--<p class="blog-post-meta">Enter date of post here <a href="#">Emmeke (add email link)</a></p> -->
            <?php
              include "database.php";
              $sql = "SELECT post_date, post_title, post_content FROM mynewdatabase.newsposts ORDER BY post_date DESC";
              $result = $conn->query($sql);
              if ($result-> num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  //echo "<h4>Title: " .  $row['post_title']. "</h4>" . "<i>Date: " . $row['post_date']. "</i>" . "<br>" . $row['post_content'] . "<br>";
                  echo "<h4 class='blog-post-title'>" . $row['post_title'] . " </h4>";
                  echo "<p class='blog-post-meta'>" . $row['post_date'] . " <a href='#'>Emmeke (add email link)" . "</a></p>";
                  echo $row['post_content'];
                  echo "<br>";
                }
              }
             ?>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">

          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://www.instagram.com/emmekevdvaart/" target="_blank">Instagram</a></li>
              <li><a href="https://twitter.com/Sayren" target="_blank">Twitter</a></li>
              <li><a href="https://www.facebook.com/emmeke.vandervaart" target="_blank">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
