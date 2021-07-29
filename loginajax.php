<?php

require('db.php');
session_start();

if (isset($_REQUEST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    if (empty($email)) {
        $error = '<p>empty email</p>';
        echo $error;
    } elseif (empty($password)) {
        $error = '<p>empty password</p>';
        echo $error;
    } else {
        $query    = "SELECT * FROM `user` WHERE email='$email'
                     AND password='" . md5($password) . "'";

        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            echo "found";
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "incorrect id/password";
            return false;
        }
    }
} else {
    return false;
}
