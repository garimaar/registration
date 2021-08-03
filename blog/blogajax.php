<?php
$data = json_decode(file_get_contents("php://input"), true);

require('./../others/db.php');
session_start();

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
        $query    = "INSERT into `blog` (title,content,admin_id)
        VALUES ('$title', '$content','$id')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "blog created";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
}
