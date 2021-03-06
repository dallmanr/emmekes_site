
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="home.php">Home</a>
          <a class="nav-link" href="about.htm">About</a>
          <a class="nav-link" href="allotment.php">Allotment</a>
          <a class="nav-link" href="garden.php">Garden</a>
          <a class="nav-link" href="other.php">Other</a>
          <a class="nav-link" href="links.htm">Links</a>
          <a class="nav-link" href="contact.htm">Contact</a>
          <a class="nav-link active" href="#">Admin</a>
        </nav>
    </div>
  </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Links</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <fieldset>
                <legend><b>User login</b></legend>
                <form name="loginForm" action="login.php" method="POST" >
                    <p>Username:
                        <input type="text" name="username" size="25" placeholder="username" required/></p>
                    <p>Password:
                        <input type="password" size="15" name="password" placeholder="password" required/></p>
                    <p>
                        <input type="submit" name="submit" value="Submit" /></p>
                </form>
            </fieldset>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->
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
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
