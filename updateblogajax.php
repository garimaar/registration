<?php
require('db.php');
print_r($_REQUEST['id']);

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "UPDATE blog set title='" . $title . "', content='" . $content . "' WHERE id='" . $id . "'";

    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
