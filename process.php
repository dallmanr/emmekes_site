<?php include 'database.php';

$post_date = $_POST['post_date'];
$title = $_POST['post_title'];
$content = $_POST['post_content'];

$sql = "INSERT INTO mynewdatabase (post_date, post_title, post_content)
VALUES ('2017-02-01', 'No variables', 'content')";


if (mysqli_query($conn, $sql)) {
    echo 'New record created successfully';
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}
?>