<?php
$data = json_decode(file_get_contents("php://input"), true);
echo "erfagfregror";

require('db.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    if (empty($username)) {
        $error = '<p>empty username</p>';
        echo $error;
    }
    if (empty($email)) {
        $error = '<p>invalid email</p>';
        echo $error;
    }
    if (empty($password)) {
        $error = '<p>invalid password must be greater than 6</p>';
        echo $error;
    }
    if (empty($error)) {
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
}
