<?php
require('db.php');
echo "xyz";
print_r($_REQUEST['id']);

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE blog SET title='$title' content='$content' WHERE id='$id'";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "updated";
    }
}
