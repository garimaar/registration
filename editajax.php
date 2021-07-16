<?php
require('db.php');
if (isset($_REQUEST['password'])) {
    echo "edit";
    $password = mysqli_real_escape_string($con, $_REQUEST['password']);
    $cpassword = mysqli_real_escape_string($con, $_REQUEST['cpassword']);
    $email = mysqli_real_escape_string($con, $_REQUEST['email']);
    if (empty($password)) {
        $error = '<p>invalid password must be greater than 6</p>';
        echo $error;
    }
    if ($password != $cpassword) {
        $error = '<p>Password does not match</p>';
        echo $error;
    }
    if (empty($email)) {
        $error = '<p>invalid email </p>';
    }

    if (empty($error)) {
        $query    = "update user set password='$password' where email='$email'";
        die($query);
        if ($result) {
            echo "<div class='form'>
           <h3>editted successfuly.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
         </div>";
        } else {
            echo "<div class='form'>
     <h3>Required fields are missing.</h3><br/>
     <p class='link'>Click here to <a href='signup.php'>signup</a> again.</p>
     </div>";
        }
    }
}
