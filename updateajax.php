<?php
require('db.php');
echo "xyz";
print_r($_REQUEST['id']);

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $query = 'UPDATE  user SET username=$username" ,email="$email " WHERE id=' . $id;
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "updated";
    }
}
