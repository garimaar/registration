<?php
require('db.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $query = "UPDATE user set username='" . $username . "', email='" . $email . "' WHERE id='" . $id . "'";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "updated";
    }
}
