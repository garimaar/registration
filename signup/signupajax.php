<?php
header("Content-Type: application/json");
require('./../others/db.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($con, $role);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if (empty($username)) {
        $error = '<p>invalid username</p>';
    }
    if (empty($email)) {
        $error = '<p>invalid email</p>';
        echo $error;
    }
    if (empty($password)) {
        $error = '<p>invalid password must be greater than 6</p>';
        echo $error;
    }
    if ($role == 'select') {
        $error = '<p>select option</p>';
        echo $error;
    }
    if (empty($error)) {
        $stmt = $con->prepare("SELECT username,email,password,role FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
            $stmt_1 = $con->prepare("INSERT INTO user (username, email, password,role) VALUES (?, ?, ?,?)");
            $stmt_1->bind_param("ssss", $username, $email, $password, $role);
            $stmt_1->execute();
            $response = array(
                'status' => true,
                'message' => 'registered'
            );
            $stmt_1->close();
        } else {
            $response = array(
                'status' => false,
                'message' => 'invalid email/username'
            );
        }
        echo json_encode($response);
        $stmt->free_result();
        $stmt->close();
    }
}
