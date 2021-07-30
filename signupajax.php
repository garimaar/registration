<?php
$data = json_decode(file_get_contents("php://input"), true);

require('db.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($con, $role);
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
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if (empty($error)) {
        $query    = "INSERT into `user` (username, password, email,role)
                     VALUES ('$username', '$hash', '$email' ,'$role')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "You are registered successfully.";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
}
