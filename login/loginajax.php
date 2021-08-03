<?php
require('./../others/db.php');
session_start();

if (isset($_REQUEST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if (empty($email)) {
        $error = '<p>empty email</p>';
        echo $error;
    } elseif (empty($password)) {
        $error = '<p>empty password</p>';
        echo $error;
    } else {
        $stmt = $con->prepare('SELECT username,role,email,id FROM user WHERE email = ? AND password = ?');
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $stmt->bind_result($username, $role, $email, $id);

        if ($stmt->fetch()) {
            if (password_verify($password, $hashed_password)) {
                echo "found";
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email; // Initializing Session
                exit;
            }
        }
    }
} else {
    return false;
}
