<?php
require('db.php');
session_start();
$id = $_GET['id'];
$title = $_GET['ti'];
$content = $_GET['co'];
$username = $_GET['un'];

print_r($_SESSION['username']);

if ($username == $_SESSION['username']) {
    $checkRecord = mysqli_query($con, "SELECT * FROM blog WHERE id=" . $id);
    $totalrows = mysqli_num_rows($checkRecord);

    if ($totalrows > 0) {
        echo '<script>alert("are you sure")</script>';
        $query = "DELETE FROM blog WHERE id=" . $id;
        mysqli_query($con, $query);
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }
} else {
    echo '<script>alert("you cant delete ")</script>';
}

echo 0;
exit;
