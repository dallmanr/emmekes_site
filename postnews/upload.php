<?php
  include "../database.php";
  // Change the directory based on where the image is going, either allotment/garden/other
  //dropdown list to go here

  // Where the file is going to be placed
  $category = mysqli_real_escape_string($conn, $_POST['selection']);
  $dirs = array('garden','allotment','other');
  $imageDir = $_POST['selection'];
  $target_dir = '../images/' . $imageDir;


  // The path of the file to be uploaded
  $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
  $uploadOk = 1;

  // The extension of the file
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Check if image file is an actual image
  if(isset($_POST['submit']))
  {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if($check != false)
    {
      echo "File is an image - " . $check['mime'] . ".";
    }
    else
    {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  //Check if the file already exists in the target_dir
  // file exists takes one argument, the path of the file to be uploaded
  if(file_exists($target_file))
  {
    echo "Image already exists.";
    $uploadOk = 0;
  }

  //Limit files to only image types
  if($imageFileType != "jpg" && $imageFileType !="JPG"
      && $imageFileType != "png" && $imageFileType != "PNG"
      && $imageFileType != "jpeg" && $imageFileType != "JPEG"
      && $imageFileType != "gif" && $imageFileType !="GIF")
  {
    echo "Only images are allowed (jpg/png/jpeg/gif) ";
    $uploadOk = 0;
  }

  if($uploadOk == 0)
  {
    echo "Sorry, image not uploaded";
  }
  else
  {
    //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../images'.'/' .$imageDir ."/".  $_FILES['fileToUpload']['name']))//$target_file))
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . '/' . $_FILES['fileToUpload']['name']))//$target_file))
    {
      $image_path = str_replace(" ","_",'../images/' . $_POST['selection'] . '/' . $_FILES['fileToUpload']['name']);
      $sql = "INSERT INTO images (imagePath)
      VALUES ('$image_path')";
      if ($conn->query($sql) === TRUE) {
        //echo 'Image path is: ' . $image_path;
          header("location: imagesuccess.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //header("location: imagesuccess.php");
      //echo $image_loc;

      //echo $target_dir;
    }
    else
    {
      echo "Sorry, an error occurred uploading new image(s)";
    }
    $conn->close();
  }
 ?>
