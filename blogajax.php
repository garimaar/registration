<?php
$data = json_decode(file_get_contents("php://input"), true);
echo "erfagfregror";

print_r($_REQUEST['title']);

require('db.php');
session_start();

print_r($_SESSION['id']);

if (isset($_REQUEST['title'])) {
    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($con, $title);
    $content   = stripslashes($_REQUEST['content']);
    $content    = mysqli_real_escape_string($con, $content);
    $id = $_SESSION['id'];
    if (empty($title)) {
        $error = '<p>empty title</p>';
    }
    if (empty($content)) {
        $error = '<p>empty content</p>';
        echo $error;
    }
    if (empty($error)) {
        $query    = "UPDATE  user SET title='$title' ,content='$content' WHERE id='$id'";
        $result   = mysqli_query($con, $query);

        die($query);
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
