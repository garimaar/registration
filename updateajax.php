<?php
require('db.php');
print_r($_GET['id']);

if ($_GET['submit']) {
    $id = $_GET['id'];
    $username = $_GET['username'];
    $email = $_GET['email'];

    $query = 'UPDATE users SET username="$username ",email="$email " WHERE id="$id"';
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "updated";
    }
}


?>