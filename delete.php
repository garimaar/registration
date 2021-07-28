<?php
require('db.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = 'DELETE FROM user WHERE id =' . $id;
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "deleted";
    }
}
