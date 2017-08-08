<?php include '../database.php';

//$date = $_POST['post_date']; //string
//$title = $_POST['post_title']; //string
//$content = $_POST['post_content']; //string

//$date = mysqli_real_escape_string($conn, $_POST['post_date']);
$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$content = mysqli_real_escape_string($conn, $_POST['post_content']);

//$sql = "INSERT INTO newsposts (post_date, post_title, post_content)
//VALUES (STR_TO_DATE('$date','%d-%m-%Y'), '$title','$content')";

$sql = "INSERT INTO newsposts (post_title, post_content)
VALUES ('$title','$content')";

if ($conn->query($sql) === TRUE) {
    header("location: ../success.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
