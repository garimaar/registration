<?php
require('db.php');
$id = $_GET['id'];
$username = $_GET['un'];
$email = $_GET['em'];
echo $email;
$query = 'DELETE FROM user WHERE id = "$id"';
$data = mysqli_query($con, $query);

if ($data) {
    echo "deleted";
}
