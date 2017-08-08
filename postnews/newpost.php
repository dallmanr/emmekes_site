
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
        <h2>Post a new news article to site</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <form action="process.php" method="POST">
                <fieldset>
                    <!--<p><b>Date: </b><input type="text" name="post_date"/></p> -->
                    <p><b>Title: </b><input type="text" name="post_title"/ required></p><br />
                    <p><b>Content of new post:</b><br />
                        <textarea name="post_content" cols="100" rows="20"></textarea></p>
                </fieldset>
                <p><input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="Reset"/></p>
            </form>
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
