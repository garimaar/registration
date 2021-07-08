<?php
echo "erfagfregror";

require('db.php');
session_start();
if (isset($_REQUEST['email'])) {
    echo "xyz";
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
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";


        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $row = mysqli_fetch_array($result);
            echo "found";
            header("Location: login.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
}
